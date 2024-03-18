<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Models\Stock;
use App\Models\BasePenjualan;
use App\Models\BaseReturPenjualan;
use App\Models\Penjualan;
use App\Models\TempPenjualan;
use App\Models\HistoryPembayaran;
use App\Models\HistoryPelunasan;
use App\Models\HistoryReturPenjualan;
use App\Models\Sales;

class PenjualanController extends BaseController
{
    //Fungsi menampilkan halaman penjualan
    public function index()
    {
        $cust = new Customer();
        $sto = new Stock();
        $bp = new BasePenjualan();
        $sl = new Sales();
        $m = $cust->get()->getResult();
        $n = $sto->get()->getResult();
        $c = $sl->get()->getResult();

        $retail = $bp->where('jenis_penjualan', 1)
            ->get()->getResult();
        $grossir = $bp->where('jenis_penjualan', 2)
            ->get()->getResult();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'penjualan',
            'main'  =>      'jual',
            'isi'   =>      'penjualan/penjualan-page',
            'cust'  =>      $m,
            'stock'   =>      $n,
            'retail'  => $retail,
            'grossir' => $grossir,
            'sales' => $c
        ];
        echo view('wrapper', $data);
    }

    //fungsi untuk mengirimkan data penjualan
    public function kirimDataPenjualan()
    {
        $jualMod = new Penjualan();
        $baseMod = new BasePenjualan();
        $stockmod = new Stock();

        //Untuk inputan dalam base penjualan
        $tanggal = new \Datetime('now');
        $customer = $this->request->getPost("customer");
        $id_cust = $this->request->getPost("id_cust");
        $faktur = $this->request->getPost("faktur");
        $tempo = $this->request->getPost("tempo");
        $total = $this->request->getPost("total");
        $totaldisc = $this->request->getPost("totaldisc");
        //Jenis 1 retail - Jenis 2 Grosir
        $jenis = $this->request->getPost("jenis");
        $jt = new \Datetime('now +' . $tempo . ' day');
        $base = [
            'tanggal_terima' => $tanggal->format('Y/m/d H:m:s'),
            'tempo' => $tempo,
            'tgl_jatuh_tempo_jual' => $jt->format('Y/m/d H:m:s'),
            'id_customer' => $customer,
            'no_faktur_penjualan' => $faktur,
            'jenis_penjualan' => $jenis,
            'total_penjualan' => $total,
            'customer'  => $id_cust,
            'total_penjualan_diskon' => $totaldisc

        ];

        $baseMod->insert($base);
        $id = $baseMod->InsertID();
        //end
        //Untuk inputan dalam tabel penjualan

        //pemanggilan untuk mengetahui index data dalam inputan
        $data =  $this->request->getPost('gudang');
        $l = count($data);
        //iterasi karena data dalam 1 post lebih dari 1 atau dalam array
        for ($i = 1; $i <= $l; $i++) {
            $stock = $this->request->getPost("nama[$i]");
            $harga = $this->request->getPost("harga[$i]");
            $jumlah = $this->request->getPost("jumlah[$i]");
            $qty = $this->request->getPost("qty[$i]");
            $disc = $this->request->getPost("disc[$i]");
            $sales = $this->request->getPost("sales[$i]");
            $jumlahdisc = $this->request->getPost("jumlahdisc[$i]");
            $stockqty = $stockmod->select('qty_stock_kum')
                ->where('id_stock', $stock)
                ->get()->getRow();
            $stockup = [
                'qty_stock_kum' => $stockqty->qty_stock_kum - $qty
            ];
            $stockmod->update($stock, $stockup);
            $jual = [
                'no_faktur' => $faktur,
                // 'tanggal_terima' => $tanggal->format('Y/m/d H:m:s'),
                'harga_penjualan' => $harga,
                'jumlah_penjualan' => $jumlah,
                'ball_penjualan' => 12,
                'qty_penjualan' => $qty,
                'id_stock' => $stock,
                'id_base' => $id,
                'diskon_penjualan' => $disc,
                'id_sales' => $sales,
                'jumlah_penjualan_diskon' => $jumlahdisc
            ];
            $jualMod->insert($jual);
            //end inputan ke penjualan

            //untuk update nilai total pada base penjualan
        }
        return redirect()->to('/penjualan-page');
    }

    public function koreksiPenjualan()
    {
        $id = $this->request->uri->getSegment(2);
        $del = $this->request->uri->getSegment(3);
        $sto = new Stock();
        $bpenj = new BasePenjualan();
        $cust = new Customer();
        $tempj = new TempPenjualan();
        $n = $sto->get()->getResult();
        $m = $cust->get()->getResult();
        $b = $bpenj->where('id_bpenjualan', $id)
            ->join('penjualan', 'id_bpenjualan = id_base')
            ->join('stock', 'penjualan.id_stock = stock.id_stock')
            ->join('customer', 'base_penjualan.id_customer = customer.id_customer')
            ->get()->getResultArray();

        if ($del == 0) {
            $c = $tempj->where('id_bpenjualan', $id)->get()->getResult();
            if ($c != null) {
                $tempj->where('id_bpenjualan', $id)
                    ->delete();
            }
            //looping untuk insert ke tabel temp
            for ($i = 0; $i < count($b); $i++) {
                $base = [
                    'tanggal_terima' => $b[$i]['tanggal_terima'],
                    'tempo' => $b[$i]['tempo'],
                    'no_faktur_penjualan' => $b[$i]['no_faktur_penjualan'],
                    'id_customer' => $b[$i]['id_customer'],
                    'total_penjualan' => $b[$i]['total_penjualan'],
                    'harga_penjualan' => $b[$i]['harga_penjualan'],
                    'jumlah_penjualan' => $b[$i]['jumlah_penjualan'],
                    'ball_penjualan' => $b[$i]['ball_penjualan'],
                    'qty_penjualan' => $b[$i]['qty_penjualan'],
                    'kode_stock' => $b[$i]['kode_stock'],
                    'nama_stock' => $b[$i]['nama_stock'],
                    'gudang' => $b[$i]['gudang'],
                    'diskon_penjualan' => $b[$i]['diskon_penjualan'],
                    'id_bpenjualan' => $b[$i]['id_bpenjualan'],

                ];
                $tempj->insert($base);
            }
        }
        $d = $tempj->where('id_bpenjualan', $id)->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'penjualan',
            'main'  =>      'jual',
            'isi'   =>      'penjualan/koreksi-penjualan-page',
            'cust'  =>      $m,
            'stock'   =>      $n,
            'base'  => $b,
            'temp' => $d
        ];
        echo view('wrapper', $data);
    }

    public function penjualanPrint()
    {
        $bp = new BasePenjualan();
        $logo = $this->request->getPost("logo");
        $id = $this->request->getPost("id");
        $b = $bp->where('id_bpenjualan', $id)
            ->join('penjualan', 'id_bpenjualan = id_base')
            ->join('stock', 'penjualan.id_stock = stock.id_stock')
            ->join('customer', 'base_penjualan.id_customer = customer.id_customer')
            ->get()->getResultArray();

        $data = [
            'title' =>      'Admin',
            'page'  =>      'laporan-jual',
            'main'  =>      'jual',
            'isi'   =>      '/penjualan/print/fakturpenjualan-print',
            'logo'  =>      $logo,
            'data'  =>      $b
        ];
        echo view('wrapper', $data);
    }

    //Menhapus item dr database dalam koreksi
    public function deleteItemPenjualan()
    {
        $beliMod = new Penjualan();
        $stockmod = new Stock();
        $id = $this->request->uri->getSegment(2);
        $id_base = $this->request->uri->getSegment(3);
        $stock = $this->request->uri->getSegment(4);
        $qty = $this->request->uri->getSegment(5);
        $stockqty = $stockmod->select('qty_stock_kum')
            ->where('id_stock', $stock)
            ->get()->getRow();
        $stockup = [
            'qty_stock_kum' => $stockqty->qty_stock_kum + $qty
        ];
        $stockmod->update($stock, $stockup);

        $beliMod->delete($id);
        return redirect()->to('/koreksi-penjualan/' . $id_base . '/1');
    }

    public function updateDataPenjualan()
    {
        $jualMod = new Penjualan();
        $baseMod = new BasePenjualan();
        $stockmod = new Stock();
        $temp = new TempPenjualan();

        $tanggal = $this->request->getPost("tanggal");
        $supplier = $this->request->getPost("customer");
        $id = $this->request->getPost("id_base");
        $faktur = $this->request->getPost("faktur");
        $tempo = $this->request->getPost("tempo");
        $jt = date('Y-m-d H:m:s', strtotime($tanggal . ' + ' . $tempo . ' days'));
        $base = [
            'tanggal_terima' => $tanggal,
            'tempo' => $tempo,
            'tgl_jatuh_tempo_jual' => $jt,
            'id_supplier' => $supplier,
            'no_ref' => $faktur
        ];
        $baseMod->update($id, $base);

        $data =  $this->request->getPost('gudang');
        $l = count($data);
        $total = 0;
        $totaldisc = 0;
        for ($i = 1; $i <= $l; $i++) {
            $id_pemb = $this->request->getPost("id[$i]");
            $stock = $this->request->getPost("nama[$i]");
            $harga = $this->request->getPost("harga[$i]");
            $satuan = $this->request->getPost("satuan[$i]");
            $jumlah = $this->request->getPost("jumlah[$i]");
            $jumlahdisc = $this->request->getPost("jumlahdisc[$i]");
            $diskon_penjualan = $this->request->getPost("disc[$i]");
            $qty = $this->request->getPost("qty[$i]");
            $qtyawal = $this->request->getPost("qtyawal[$i]");
            $qtybase = $this->request->getPost("qtybase[$i]");
            if ($id_pemb != null) {
                var_dump("ada");
                $stockqty = $stockmod->select('qty_stock_kum')
                    ->where('id_stock', $stock)
                    ->get()->getRow();
                $stockup = [
                    'qty_stock_kum' => $stockqty->qty_stock_kum - $qty + $qtyawal
                ];
                $stockmod->update($stock, $stockup);
                $jual = [
                    'no_penjualan' => $faktur,
                    // 'tanggal_terima' => $tanggal,
                    'harga_penjualan' => $harga,
                    'jumlah_penjualan' => $jumlah,
                    'ball_penjualan' => $satuan,
                    'qty_penjualan' => $qty,
                    'id_stock' => $stock,
                    'diskon_penjualan' => $diskon_penjualan,
                    'jumlah_penjualan_diskon' => $jumlahdisc

                ];
                $jualMod->update($id_pemb, $jual);
            } else if ($id_pemb == null) {
                var_dump("kosong");
                $stockqty = $stockmod->select('qty_stock_kum')
                    ->where('id_stock', $stock)
                    ->get()->getRow();
                $stockup = [
                    'qty_stock_kum' => $stockqty->qty_stock_kum - $qty
                ];
                $stockmod->update($stock, $stockup);
                $jual = [
                    'no_pembelian' => $faktur,
                    // 'tanggal_terima' => $tanggal,
                    'harga_penjualan' => $harga,
                    'jumlah_penjualan' => $jumlah,
                    'ball_penjualan' => $satuan,
                    'qty_penjualan' => $qty,
                    'id_stock' => $stock,
                    'id_base' => $id,
                    'diskon_penjualan' => $diskon_penjualan,
                    'jumlah_penjualan_diskon' => $jumlahdisc,
                    'id_sales' => 1,
                ];
                $jualMod->insert($jual);
            }

            $base = [
                'total_penjualan' => $this->request->getPost("total"),
                'total_penjualan_diskon' => $this->request->getPost("totaldisc")
            ];

            $baseMod->update($id, $base);
        }
        //Menghapus data dalam temp
        $temp->where('id_bpenjualan', $id)
            ->delete();
        return redirect()->to('/penjualan-page');
    }

    public function penjualanPrintsj()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'penjualan',
            'main'  =>      'jual',
            'isi'   =>      '/penjualan/print/sjpenjualan-print'
        ];
        echo view('wrapper', $data);
    }


    public function halamanPembayaran()
    {
        $cust = new Customer();
        $m = $cust->get()->getResult();

        $data = [
            'title' =>      'Admin',
            'page'  =>      'pembayaran',
            'main'  =>      'bayar',
            'isi'   =>      'pembayaran/pembayaran-page',
            'cust'  =>      $m
        ];
        echo view('wrapper', $data);
    }

    public function halamanPelunasan()
    {
        $cust = new Customer();
        $m = $cust->get()->getResult();

        $data = [
            'title' =>      'Admin',
            'page'  =>      'pelunasan',
            'main'  =>      'bayar',
            'isi'   =>      'pembayaran/pelunasan-page',
            'cust'  =>      $m
        ];
        echo view('wrapper', $data);
    }
    public function returPagePenjualan()
    {
        $id = $this->request->uri->getSegment(2);
        $del = $this->request->uri->getSegment(3);
        $sto = new Penjualan();
        $bpenj = new BasePenjualan();
        $cust = new Customer();
        $tempj = new TempPenjualan();
        $n = $sto->select(['penjualan.id_stock', 'stock.kode_stock', 'stock.nama_stock'])
            ->join('stock', 'penjualan.id_stock = stock.id_stock')
            ->where('id_base', $id)
            ->distinct()->get()->getResult();
        $m = $cust->get()->getResult();
        $b = $bpenj->where('id_bpenjualan', $id)
            ->join('penjualan', 'id_bpenjualan = id_base')
            ->join('stock', 'penjualan.id_stock = stock.id_stock')
            ->join('customer', 'base_penjualan.id_customer = customer.id_customer')
            ->get()->getResultArray();

        if ($del == 0) {
            $c = $tempj->where('id_bpenjualan', $id)->get()->getResult();
            if ($c != null) {
                $tempj->where('id_bpenjualan', $id)
                    ->delete();
            }
            //looping untuk insert ke tabel temp
            for ($i = 0; $i < count($b); $i++) {
                $base = [
                    'tanggal_terima' => $b[$i]['tanggal_terima'],
                    'tempo' => $b[$i]['tempo'],
                    'no_faktur_penjualan' => $b[$i]['no_faktur_penjualan'],
                    'id_customer' => $b[$i]['id_customer'],
                    'total_penjualan' => $b[$i]['total_penjualan'],
                    'harga_penjualan' => $b[$i]['harga_penjualan'],
                    'jumlah_penjualan' => $b[$i]['jumlah_penjualan'],
                    'ball_penjualan' => $b[$i]['ball_penjualan'],
                    'qty_penjualan' => $b[$i]['qty_penjualan'],
                    'kode_stock' => $b[$i]['kode_stock'],
                    'nama_stock' => $b[$i]['nama_stock'],
                    'gudang' => $b[$i]['gudang'],
                    'diskon_penjualan' => $b[$i]['diskon_penjualan'],
                    'id_bpenjualan' => $b[$i]['id_bpenjualan'],

                ];
                $tempj->insert($base);
            }
        }
        $d = $tempj->where('id_bpenjualan', $id)->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'penjualan',
            'main'  =>      'jual',
            'isi'   =>      'penjualan/retur-page',
            'cust'  =>      $m,
            'stock'   =>      $n,
            'base'  => $b,
            'temp' => $d
        ];
        echo view('wrapper', $data);
    }

    public function kirimDataRetur()
    {
        $customer = new Customer();
        $retur = new HistoryReturPenjualan();
        $baseRet = new BaseReturPenjualan();
        $stockmod = new Stock();
        $penj = new Penjualan();
        $temp = new TempPenjualan();

        $tanggal = new \Datetime('now');
        $id_customer = $this->request->getPost("id_customer");
        $id = $this->request->getPost("id_base");
        $no_retur = $this->request->getPost("oke");
        $total = $this->request->getPost("total");
        $base = [
            'tanggal_transaksi' => $tanggal->format('Y/m/d H:m:s'),
            'no_trans_retur' => $no_retur,
            'total' => $total,
            'id_bpenjualan' => $id,
            'id_customer' => $id_customer
        ];
        $baseRet->insert($base);
        $idbase = $baseRet->InsertID();

        $saldo = $customer->select('saldo')
            ->where('id_customer', $id_customer)
            ->get()->getRow();
        $saldoup = [
            'saldo' => $saldo->saldo + $total
        ];
        $customer->update($id_customer, $saldoup);

        $data =  $this->request->getPost('harga');
        $l = count($data);
        for ($i = 1; $i <= $l; $i++) {
            $stock = $this->request->getPost("nama[$i]");
            $harga = $this->request->getPost("harga[$i]");
            $qty = $this->request->getPost("qty[$i]");
            if ($qty != "") {
                $stockqty = $stockmod->select('qty_stock_kum')
                    ->where('id_stock', $stock)
                    ->get()->getRow();
                $stockup = [
                    'qty_stock_kum' => $stockqty->qty_stock_kum + $qty
                ];
                $stockmod->update($stock, $stockup);
            }
            $jual = [
                'id_stock' => $stock,
                'jumlah_retur' => $qty,
                'harga_retur' => $harga,
                'id_bretur_penjualan' => $idbase,
            ];
            $retur->insert($jual);
        }
        //Menghapus data dalam temp
        $temp->where('id_bpenjualan', $id)
            ->delete();
        return redirect()->to('/penjualan-page');
    }

    public function halamanFormPelunasan()
    {
        $base = $this->request->uri->getSegment(2);
        $id = $this->request->uri->getSegment(3);
        $cust = new Customer();
        $bp = new BasePenjualan();
        $hp = new HistoryPelunasan();

        $m = $cust->where('id_customer', $id)->get()->getRow();
        $n = $bp->where('id_bpenjualan', $base)->get()->getRow();
        $o = $hp->where('id_customer', $id)
            ->where('id_bpenjualan', $base)
            ->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'pelunasan',
            'main'  =>      'bayar',
            'isi'   =>      'pembayaran/form-pelunasan',
            'cust'  =>      $m,
            'base'  =>      $n,
            'hist'  =>      $o
        ];
        echo view('wrapper', $data);
    }
    public function kirimPelunasan()
    {
        $cust = new Customer();
        $bp = new BasePenjualan();
        $hp = new HistoryPelunasan();
        $tanggal = new \Datetime('now');
        $id_pemb = $this->request->getPost("notrans");
        $jumlah_pelunasan = $this->request->getPost("jumlah");
        $id = $this->request->getPost("id");
        $base = $this->request->getPost("base");


        $saldo = $cust->select('saldo')
            ->where('id_customer', $id)
            ->get()->getRow();
        $update = [
            'saldo' => $saldo->saldo - $jumlah_pelunasan
        ];
        $cust->update($id, $update);

        $insert = [
            'tanggal_pelunasan' => $tanggal->format('Y/m/d H:m:s'),
            'no_transaksi'       => $id_pemb,
            'jumlah_pelunasan'  => $jumlah_pelunasan,
            'id_customer'        => $id,
            'id_bpenjualan'        => $base
        ];
        $hp->insert($insert);

        $sisa = $bp->select('jumlah_pelunasan')
            ->where('id_bpenjualan', $base)
            ->get()->getRow();
        $uplunas = [
            'jumlah_pelunasan' => $sisa->jumlah_pelunasan + $jumlah_pelunasan
        ];
        $bp->update($base, $uplunas);

        return redirect()->to('/form-pelunasan/' . $base . '/' . $id);
    }
    public function kirimPembayaran()
    {
        $cust = new Customer();
        $hp = new HistoryPembayaran();
        $tanggal = new \Datetime('now');
        $id_pemb = $this->request->getPost("notrans");
        $jumlah_pembayaran = $this->request->getPost("bayar");
        $id = $this->request->getPost("id");
        $saldo = $cust->select('saldo')
            ->where('id_customer', $id)
            ->get()->getRow();
        $update = [
            'saldo' => $saldo->saldo + $jumlah_pembayaran
        ];
        $cust->update($id, $update);
        $insert = [
            'tanggal_pembayaran' => $tanggal->format('Y/m/d H:m:s'),
            'no_transaksi'       => $id_pemb,
            'jumlah_pembayaran'  => $jumlah_pembayaran,
            'id_customer'        => $id
        ];
        $hp->insert($insert);
        return redirect()->to('/pembayaran-page');
    }
}

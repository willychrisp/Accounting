<?php

namespace App\Controllers;

use App\Models\Supplier;
use App\Models\Stock;
use App\Models\Pembelian;
use App\Models\BasePembelian;
use App\Models\TempPembelian;

class PembelianController extends BaseController
{
    public function __construct()
    {
        $stock = new Stock();
    }
    public function index()
    {
        $sup = new Supplier();
        $sto = new Stock();
        $bp = new BasePembelian();
        $m = $sup->get()->getResult();
        $n = $sto->get()->getResult();
        $b = $bp->get()->getResult();



        $data = [
            'title' =>      'Admin',
            'page'  =>      'beli',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/pembelian-page',
            'supp'  =>      $m,
            'stock'   =>      $n,
            'base'  => $b
        ];
        echo view('wrapper', $data);
    }
    public function kirimDataPembelian()
    {
        $beliMod = new Pembelian();
        $baseMod = new BasePembelian();
        $stockmod = new Stock();
        $tanggal = new \Datetime('now');
        $supplier = $this->request->getPost("supplier");
        $ref = $this->request->getPost("ref");
        $tempo = $this->request->getPost("tempo");
        $jt = new \Datetime('now +' . $tempo . ' day');
        $base = [
            'tanggal_terima' => $tanggal->format('Y/m/d H:m:s'),
            'tempo' => $tempo,
            'tgl_jatuh_tempo_bl' => $jt->format('Y/m/d H:m:s'),
            'id_supplier' => $supplier,
            'no_ref' => $ref
        ];

        $baseMod->insert($base);
        $id = $baseMod->InsertID();

        $data =  $this->request->getPost('gudang');
        $l = count($data);
        $total = 0;
        for ($i = 1; $i <= $l; $i++) {
            $stock = $this->request->getPost("nama[$i]");
            $harga = $this->request->getPost("harga[$i]");
            $jumlah = $this->request->getPost("jumlah[$i]");
            $total = $total + $jumlah;
            $ball = $this->request->getPost("satuan[$i]");
            $qty = $this->request->getPost("qty[$i]");
            $stockqty = $stockmod->select('qty_stock_kum')
                ->where('id_stock', $stock)
                ->get()->getRow();
            $stockup = [
                'qty_stock_kum' => $stockqty->qty_stock_kum + ($qty * $ball)
            ];
            $stockmod->update($stock, $stockup);
            $beli = [
                'no_pembelian' => $ref,
                'harga_pembelian' => $harga,
                'jumlah_pembelian' => $jumlah,
                'ball_pembelian' => $ball,
                'qty_stock' => $qty * $ball,
                'id_stock' => $stock,
                'id_base' => $id
            ];
            $beliMod->insert($beli);
            $base = [
                'total_pembelian' => $total
            ];

            $baseMod->update($id, $base);
        }
        return redirect()->to('/pembelian-page');
    }

    //update data pembelian page
    public function koreksiPembelian()
    {
        $id = $this->request->uri->getSegment(2);
        $del = $this->request->uri->getSegment(3);
        $sto = new Stock();
        $bp = new BasePembelian();
        $sup = new Supplier();
        $temp = new TempPembelian();
        $n = $sto->get()->getResult();
        $m = $sup->get()->getResult();
        $b = $bp->where('id_bp', $id)
            ->join('pembelian', 'id_bp = id_base')
            ->join('stock', 'pembelian.id_stock = stock.id_stock')
            ->join('supplier', 'base_pembelian.id_supplier = supplier.id_supplier')
            ->get()->getResultArray();

        if ($del == 0) {
            $c = $temp->where('id_bp', $id)->get()->getResult();
            if ($c != null) {
                $temp->where('id_bp', $id)
                    ->delete();
            }
            //looping untuk insert ke tabel temp
            for ($i = 0; $i < count($b); $i++) {
                $base = [
                    'tanggal_terima' => $b[$i]['tanggal_terima'],
                    'tempo' => $b[$i]['tempo'],
                    'no_ref' => $b[$i]['no_ref'],
                    'tgl_jatuh_tempo_bl' => $b[$i]['tgl_jatuh_tempo_bl'],
                    'id_supplier' => $b[$i]['id_supplier'],
                    'total_pembelian' => $b[$i]['total_pembelian'],
                    'harga_pembelian' => $b[$i]['harga_pembelian'],
                    'jumlah_pembelian' => $b[$i]['jumlah_pembelian'],
                    'ball_pembelian' => $b[$i]['ball_pembelian'],
                    'qty_stock' => $b[$i]['qty_stock'],
                    'kode_stock' => $b[$i]['kode_stock'],
                    'nama_stock' => $b[$i]['nama_stock'],
                    'gudang' => $b[$i]['gudang'],
                    'id_bp' => $b[$i]['id_bp'],

                ];
                $temp->insert($base);
            }
        }
        $d = $temp->where('id_bp', $id)->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'beli',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/koreksi-pembelian-page',
            'supp'  =>      $m,
            'stock'   =>      $n,
            'base'  => $b,
            'temp' => $d
        ];
        echo view('wrapper', $data);
    }
    //update data pembelian proses
    public function updateDataPembelian()
    {
        $beliMod = new Pembelian();
        $baseMod = new BasePembelian();
        $stockmod = new Stock();
        $temp = new TempPembelian();

        $tanggal = $this->request->getPost("tanggal");
        $supplier = $this->request->getPost("supplier");
        $id = $this->request->getPost("id_base");
        $ref = $this->request->getPost("ref");
        $tempo = $this->request->getPost("tempo");
        $jt = date('Y-m-d H:m:s', strtotime($tanggal . ' + ' . $tempo . ' days'));
        $base = [
            'tanggal_terima' => $tanggal,
            'tempo' => $tempo,
            'tgl_jatuh_tempo_bl' => $jt,
            'id_supplier' => $supplier,
            'no_ref' => $ref
        ];
        $baseMod->update($id, $base);

        $data =  $this->request->getPost('gudang');
        $l = count($data);
        $total = 0;
        for ($i = 1; $i <= $l; $i++) {
            $id_pemb = $this->request->getPost("id[$i]");
            $stock = $this->request->getPost("nama[$i]");
            $harga = $this->request->getPost("harga[$i]");
            $jumlah = $this->request->getPost("jumlah[$i]");
            $total = $total + $jumlah;
            $ball = $this->request->getPost("satuan[$i]");
            $qty = $this->request->getPost("qty[$i]");
            $qtyawal = $this->request->getPost("qtyawal[$i]");
            if ($id_pemb != null) {
                var_dump("ada");
                $stockqty = $stockmod->select('qty_stock_kum')
                    ->where('id_stock', $stock)
                    ->get()->getRow();
                $stockup = [
                    'qty_stock_kum' => $stockqty->qty_stock_kum + $qty - $qtyawal
                ];
                $stockmod->update($stock, $stockup);
                $beli = [
                    'no_pembelian' => $ref,
                    'harga_pembelian' => $harga,
                    'jumlah_pembelian' => $jumlah,
                    'ball_pembelian' => $ball,
                    'qty_stock' => $qty,
                    'id_stock' => $stock
                ];
                $beliMod->update($id_pemb, $beli);
            } else if ($id_pemb == null) {
                var_dump("kosong");
                $stockqty = $stockmod->select('qty_stock_kum')
                    ->where('id_stock', $stock)
                    ->get()->getRow();
                $stockup = [
                    'qty_stock_kum' => $stockqty->qty_stock_kum + $qty
                ];
                $stockmod->update($stock, $stockup);
                $beli = [
                    'no_pembelian' => $ref,
                    // 'tanggal_terima' => $tanggal,
                    'harga_pembelian' => $harga,
                    'jumlah_pembelian' => $jumlah,
                    'ball_pembelian' => $ball,
                    'qty_stock' => $qty,
                    'id_stock' => $stock,
                    'id_base' => $id
                ];
                $beliMod->insert($beli);
            }

            $base = [
                'total_pembelian' => $total
            ];

            $baseMod->update($id, $base);
        }
        //Menghapus data dalam temp
        $temp->where('id_bp', $id)
            ->delete();
        return redirect()->to('/pembelian-page');
    }

    public function deleteItemPembelian()
    {
        $beliMod = new Pembelian();
        $stockmod = new Stock();
        $id = $this->request->uri->getSegment(2);
        $id_base = $this->request->uri->getSegment(3);
        $stock = $this->request->uri->getSegment(4);
        $qty = $this->request->uri->getSegment(5);
        $stockqty = $stockmod->select('qty_stock_kum')
            ->where('id_stock', $stock)
            ->get()->getRow();
        $stockup = [
            'qty_stock_kum' => $stockqty->qty_stock_kum - $qty
        ];
        $stockmod->update($stock, $stockup);
        $beliMod->delete($id);
        return redirect()->to('/koreksi-pembelian/' . $id_base . '/1');
    }


    //Menampilkan halaman print
    public function PembelianPrint()
    {
        $bp = new BasePembelian();
        $logo = $this->request->getPost("logo");
        $id = $this->request->getPost("id");
        $b = $bp->where('id_bp', $id)
            ->join('pembelian', 'id_bp = id_base')
            ->join('stock', 'pembelian.id_stock = stock.id_stock')
            ->get()->getResultArray();

        $data = [
            'title' =>      'Admin',
            'page'  =>      'pembelian',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/print/pembelian-print',
            'logo'  =>      $logo,
            'data' => $b
        ];
        echo view('wrapper', $data);
    }


    //Controller hutang
    public function hutangPage()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'hutang',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/hutang-page'
        ];
        echo view('wrapper', $data);
    }
    public function LaporanPage()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'laporan',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/laporan-pembelian'
        ];
        echo view('wrapper', $data);
    }
    public function returPagePembelian()
    {
        $sup = new Supplier();
        $sto = new Stock();
        $m = $sup->get()->getResult();
        $n = $sto->get()->getResult();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'retur-beli',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/retur-page',
            'supp'  =>      $m,
            'stock'   =>      $n
        ];
        echo view('wrapper', $data);
    }

    public function LaporanPrint()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'laporan',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/print/laporan-print'
        ];
        echo view('wrapper', $data);
    }

    public function returPrint()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'pembelian',
            'main'  =>      'beli',
            'isi'   =>      'pembelian/print/retur-print'
        ];
        echo view('wrapper', $data);
    }

    public function coba()
    {
        $logo = $this->request->getPost("kode");

        dd($logo);
    }
}

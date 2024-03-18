<?php

namespace App\Controllers\API;

use App\Models\BasePembelian;
use App\Models\BasePenjualan;
use App\Models\Customer;
use App\Models\Stock;
use App\Models\Pembelian;
use App\Models\Penjualan;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class PemanggilanAPI extends ResourceController
{
    use ResponseTrait;

    //Data pemanggilan ketika input data pembelian
    public function dataPembelian($id)
    {
        $stock = new Stock();
        $data = $stock->where('id_stock', $id)
            ->get()->getRow();

        return $this->respond($data);
    }

    //Pemanggilan API untuk mendapatkan daftar dan detail dari transaksi pembelian
    public function dataListPembelian($id)
    {
        $beli = new Pembelian();
        $data = $beli->where('id_base', $id)
            ->join('stock', 'pembelian.id_stock = stock.id_stock')
            ->join('base_pembelian', 'id_base = id_bp')
            ->get()->getResultArray();
        return $this->respond($data);
    }
    //Pemanggilan API untuk mendapatkan daftar dan detail dari transaksi penjualan
    public function dataListPenjualan($id, $jenis)
    {
        $beli = new Penjualan();
        $data = $beli->where('id_base', $id)
            ->join('stock', 'penjualan.id_stock = stock.id_stock')
            ->join('base_penjualan', 'id_base = id_bpenjualan')
            ->join('customer', 'customer.id_customer = base_penjualan.id_customer')
            ->get()->getResultArray();
        return $this->respond($data);
    }
    //Pemanggilan API untuk mendapatkan daftar dan detail dari transaksi pembelian berdasarkan bulan dan tahun
    public function dataDaftarPembelian($bulan, $tahun)
    {
        $base = new BasePembelian();
        $data = $base->where('MONTH(tanggal_terima)', $bulan)
            ->where('YEAR(tanggal_terima)', $tahun)
            ->join('supplier', 'supplier.id_supplier = base_pembelian.id_supplier', 'left')
            ->get()->getResultArray();

        return $this->respond($data);
    }

    //Pemanggilan API untuk mendapatkan daftar dan detail dari transaksi penjualan berdasarkan bulan dan tahun
    public function dataDaftarPenjualan($bulan, $tahun)
    {
        $base = new BasePenjualan();
        $data = $base->where('MONTH(tanggal_terima)', $bulan)
            ->where('YEAR(tanggal_terima)', $tahun)
            ->join('customer', 'customer.id_customer = base_penjualan.id_customer', 'left')
            ->get()->getResultArray();

        return $this->respond($data);
    }

    public function dataDaftarCustomer($id)
    {
        $cust = new Customer();
        $data = $cust->where('customer.id_customer', $id)
            ->join('history_pembayaran', 'customer.id_customer = history_pembayaran.id_customer', 'left')
            ->get()->getResultArray();

        return $this->respond($data);
    }

    public function dataDaftarTransaksiCustomer($id)
    {
        $cust = new BasePenjualan();
        $data = $cust->where('base_penjualan.id_customer', $id)
            ->join('customer', 'customer.id_customer = base_penjualan.id_customer', 'left')
            ->get()->getResultArray();

        return $this->respond($data);
    }

    public function dataNotifPenjualan()
    {
        $base = new BasePenjualan();

        $date = date_create('+1 day')->format('Y-m-d');
        $data = $base->where('tgl_jatuh_tempo_jual <=', $date)->get()->getResultArray();
        return $this->respond($data);
    }
}

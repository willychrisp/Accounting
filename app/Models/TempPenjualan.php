<?php

namespace App\Models;

use CodeIgniter\Model;

class TempPenjualan extends Model
{
    protected $table         = 'temp_penjualan';
    protected $primaryKey    = 'id_tempjual';
    protected $allowedFields = ['kode_stock', 'nama_stock', 'ball_penjualan', 'diskon_penjualan', 'qty_penjualan', 'gudang', 'tanggal_terima', 'tempo', 'id_customer', 'no_faktur_penjualan', 'total_penjualan', 'harga_penjualan', 'jumlah_penjualan', 'id_bpenjualan'];
}

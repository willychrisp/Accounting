<?php

namespace App\Models;

use CodeIgniter\Model;

class Penjualan extends Model
{
    protected $table         = 'penjualan';
    protected $primaryKey    = 'id_penjualan';
    protected $allowedFields = ['no_faktur', 'tanggal_terima', 'harga_penjualan', 'jumlah_penjualan', 'jumlah_penjualan_diskon', 'ball_penjualan', 'qty_penjualan', 'ppn_penjualan', 'id_stock', 'id_base', 'diskon_penjualan', 'id_sales', 'jumlah_pelunasan'];
}

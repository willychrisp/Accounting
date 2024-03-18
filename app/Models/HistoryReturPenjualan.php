<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryReturPenjualan extends Model
{
    protected $table            = 'history_retur_penjualan';
    protected $primaryKey    = 'id_retur_penjualan';
    protected $allowedFields = ['id_stock', 'id_bpenjualan', 'jumlah_retur', 'harga_retur', 'id_bretur_penjualan'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseReturPenjualan extends Model
{
    protected $table            = 'base_retur';
    protected $primaryKey    = 'id_bretur_penjualan';
    protected $allowedFields = ['tanggal_transaksi', 'no_trans_retur', 'total', 'id_bpenjualan', 'id_customer'];
}

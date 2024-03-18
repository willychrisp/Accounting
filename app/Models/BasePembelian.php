<?php

namespace App\Models;

use CodeIgniter\Model;

class BasePembelian extends Model
{
    protected $table         = 'base_pembelian';
    protected $primaryKey    = 'id_bp';
    protected $allowedFields = ['no_pembelian', 'tanggal_terima', 'tempo', 'tgl_jatuh_tempo_bl', 'qty_stock', 'id_supplier', 'no_ref', 'total_pembelian'];
}

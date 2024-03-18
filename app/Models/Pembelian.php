<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembelian extends Model
{
    protected $table         = 'pembelian';
    protected $primaryKey    = 'id_pembelian';
    protected $allowedFields = ['no_pembelian', 'tanggal_terima', 'harga_pembelian', 'jumlah_pembelian', 'ball_pembelian', 'qty_stock', 'ppn_pembelian', 'id_stock', 'id_base'];
}

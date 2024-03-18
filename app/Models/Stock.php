<?php

namespace App\Models;

use CodeIgniter\Model;

class Stock extends Model
{
    protected $table         = 'stock';
    protected $primaryKey    = 'id_stock';
    protected $allowedFields = ['kode_stock', 'nama_stock', 'hpp', 'satuan', 'qty_stock_kum', 'gudang'];
}

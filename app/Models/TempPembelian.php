<?php

namespace App\Models;

use CodeIgniter\Model;

class TempPembelian extends Model
{
    protected $table         = 'temp_pembelian';
    protected $primaryKey    = 'id_temp';
    protected $allowedFields = ['kode_stock', 'nama_stock', 'hpp', 'ball_pembelian', 'qty_stock', 'gudang', 'tanggal_terima', 'tempo', 'id_supplier', 'no_ref', 'total_pembelian', 'harga_pembelian', 'jumlah_pembelian', 'id_bp'];
}

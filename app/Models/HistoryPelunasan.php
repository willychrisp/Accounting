<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryPelunasan extends Model
{
    protected $table            = 'history_pelunasan';
    protected $primaryKey    = 'id_pelunasan';
    protected $allowedFields = ['tanggal_pelunasan', 'no_transaksi', 'jumlah_pelunasan', 'id_customer', 'id_bpenjualan'];
}

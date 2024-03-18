<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryPembayaran extends Model
{
    protected $table            = 'history_pembayaran';
    protected $primaryKey    = 'id_pembayaran';
    protected $allowedFields = ['tanggal_pembayaran', 'no_transaksi', 'jumlah_pembayaran', 'id_customer'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BasePenjualan extends Model
{
    protected $table         = 'base_penjualan';
    protected $primaryKey    = 'id_bpenjualan';
    protected $allowedFields = ['no_faktur_penjualan', 'tanggal_terima', 'tempo', 'tgl_jatuh_tempo_jual', 'id_customer', 'no_ref_penjualan', 'total_penjualan', 'total_penjualan_diskon', 'jenis_penjualan', 'jumlah_pelunasan'];
}

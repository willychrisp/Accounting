<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model
{
    protected $table            = 'customer';
    protected $primaryKey    = 'id_customer';
    protected $allowedFields = ['kode_customer', 'nama_customer', 'lokasi_customer', 'saldo'];
}

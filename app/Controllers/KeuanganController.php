<?php

namespace App\Controllers;

class KeuanganController extends BaseController
{
    public function index()
    {
    }
    public function kasBesarPage()
    {
        $data = [
            'title' =>     'Admin',
            'page'  =>      'kasbesar',
            'main'  =>      'uang',
            'isi'   =>      'keuangan/kas-besar'
        ];
        echo view('wrapper', $data);
    }

    public function kasKecilPage()
    {
        $data = [
            'title' =>     'Admin',
            'page'  =>      'kaskecil',
            'main'  =>      'uang',
            'isi'   =>      'keuangan/kas-kecil'
        ];
        echo view('wrapper', $data);
    }

    public function bankPage()
    {
        $data = [
            'title' =>     'Admin',
            'page'  =>      'bank',
            'main'  =>      'uang',
            'isi'   =>      'keuangan/bank'
        ];
        echo view('wrapper', $data);
    }
}

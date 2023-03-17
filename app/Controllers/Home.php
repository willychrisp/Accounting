<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>     'Admin',
            'isi'   =>      'index'
        ];
        echo view('wrapper', $data);
    }
}

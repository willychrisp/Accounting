<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>     'Admin',
            'page'  =>      'home',
            'main'  =>      'home',
            'isi'   =>      'index'
        ];
        echo view('wrapper', $data);
    }
    public function login()
    {
        $data = [
            'title' =>     'Admin',
            'isi'   =>      'login'
        ];
        echo view('login');
    }
}

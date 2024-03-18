<?php

namespace App\Controllers;

class StockController extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>     'Admin',
            'page'  =>      'tg',
            'main'  =>      'stock',
            'isi'   =>      'stock/transgud-page'
        ];
        echo view('wrapper', $data);
    }

    public function printTG()
    {
        $data = [
            'title' =>      'Admin',
            'page'  =>      'tg',
            'main'  =>      'stock',
            'isi'   =>      '/stock/print/tg-print'
        ];
        echo view('wrapper', $data);
    }
}

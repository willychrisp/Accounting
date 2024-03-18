<?php

namespace App\Controllers;

use App\Models\Stock;

class MasterController extends BaseController
{
    public function masterStock()
    {
        $stock = new Stock();
        $all = $stock->get()->getResultArray();
        $data = [
            'title' =>      'Admin',
            'page'  =>      'master-stock',
            'main'  =>      'master',
            'isi'   =>      'master/master-stock',
            'stock' =>      $all
        ];
        echo view('wrapper', $data);
    }

    public function kirimMasterStock()
    {
        $stockmod = new Stock();
        $send = [
            'kode_stock' => $this->request->getPost("kode"),
            'nama_stock' => $this->request->getPost("nama"),
            'hpp' => $this->request->getPost("hpp"),
            'gudang' => $this->request->getPost("gudang"),
            'satuan' => $this->request->getPost("satuan"),
            'persatuan' => 12,
            'qty_stock_kum' => 0

        ];
        $stockmod->insert($send);
        return redirect()->to('/master-stock');
    }
}

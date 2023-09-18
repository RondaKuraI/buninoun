<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\MainModel;

class MainController extends BaseController
{
    public function save(){
        $data = [
            'ID' => $this->request->getPost('ID'),
            'UPC' => $this->request->getPost('UPC'),
            'Name' => $this->request->getPost('Name'),
            'Quantity' => $this->request->getPost('Quantity'),
            'Price' => $this->request->getPost('Price'),
            'Expiry_Date' => $this->request->getPost('Expiry_Date'),
            //'Created_At' => $this->request->getPost('Created_At'),
        ];
        $this->main->insert($data);
        return redirect()->to('/main');
        
    }
    public function add(){
        return view('add');
    }
    private $main;
    public function __construct(){
        $this->main = new \App\Models\MainModel();
    }
    public function index()
    {
        //$main = new MainModel();
        $data['product'] = $this->main->findAll();
        //print_r($data);
        return view('main', $data);
    }
    public function delete($ID = null){
        $this->main->delete(['ID' => $ID]);
        return redirect()->to('/main');
    }
    public function update($ID){
        $data = [
            'product' => $this->main->findAll(),
            'pro' => $this->main->where('ID', $ID)->first(),
        ];
        return view('add', $data);
    }
}

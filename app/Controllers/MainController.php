<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\MainModel;

class MainController extends BaseController
{
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
}

<?php

namespace App\Controllers;

use App\Models\PancasudhaModel;
use App\Controllers\BaseController;

class Pancasudha extends BaseController
{
    protected $pancasudhaModel;
    public function __construct()
    {
        $this->pancasudhaModel = new PancasudhaModel();
    }
    public function index()
    {
        //$panca = $this->pancasudhaModel->findAll();
        $data = [
            //judul halaman
            'title' => 'Panca sudha page',
            'panca' => $this->pancasudhaModel->getPancasudha()
        ];
        return view('pancasudha/index', $data);
    }
    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Panca Sudha',
            'panca' => $this->pancasudhaModel->getPancasudha($slug)
        ];
        return view('pancasudha/detail', $data);
    }
}

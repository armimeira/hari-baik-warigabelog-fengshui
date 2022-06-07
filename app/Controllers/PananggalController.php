<?php

namespace App\Controllers;

use App\Models\PananggalModel;
use App\Controllers\BaseController;
use App\Models\DetailwarigaModel;
use App\Models\WarigaModel;

class PananggalController extends BaseController
{
    protected $pananggalModel;
    protected $warigaModel;
    protected $detailwarigaModel;
    public function __construct()
    {
        $this->pananggalModel = new PananggalModel();
        $this->warigaModel = new WarigaModel();
        $this->detailwarigaModel = new DetailwarigaModel();
    }

    public function detail($birth)
    {
        //dd($birth);
        $detail = [];
        $tanggal = [];
        $panang = [];
        $angka_pananggal = [];
        $pananggal = [];
        if ($birth != null) {
            
            $tanggal = $this->warigaModel->getWariga($birth);
            dd($tanggal);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['pananggal']);
            $panang = $this->pananggalModel->getPananggal($detail['angka_pananggal']);
            $detail = $this->pananggalModel->getPananggal($panang['angka_pananggal']);
           //dd($panang);
            //dd($panga);
            if (isset($birth['tanggal'])) {
                echo $tanggal['pananggal'];
                echo $detail['angka_pananggal'];
                echo $panang['angka_pananggal'];
            }
        }
        $data = [
            //judul halaman
            'title' => 'Detail Wariga Page',
            'tanggal' => $tanggal,
            'birth' => $birth,
            'wariga'=> $detail,
            'pananggal' => $detail,
            'panang' => $panang
        ];
        return view('dashboard/detailwariga', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\DetailwarigaModel;
use App\Controllers\BaseController;
use App\Models\PancasudhaModel;
use App\Models\PangarasanModel;
use App\Models\SaptawaraModel;
use App\Models\WarigaModel;
use App\Models\PananggalModel;
use App\Models\SasihModel;

class WarigaDetailController extends BaseController
{
    protected $detailwarigaModel;
    protected $warigaModel;
    protected $saptawaraModel;
    protected $pancasudhaModel;
    protected $pangarasanModel;
    protected $pananggalModel;
    protected $sasihModel;

    public function __construct()
    {
        $this->detailwarigaModel = new DetailwarigaModel();
        $this->warigaModel = new WarigaModel();
        $this->saptawaraModel = new SaptawaraModel();
        $this->pancasudhaModel = new PancasudhaModel();
        $this->pangarasanModel = new PangarasanModel();
        $this->pananggalModel = new PananggalModel();
        $this->sasihModel = new SasihModel();
    }

    public function detail($birth)
    {
        //dd($birth);
        $umur = 0;
        $detail = [];
        $tanggal = [];
        $saptawara = [];
        $pancasudha = [];
        $panga = [];
        $panang = [];
        $sasih = [];
        $angka_pananggal = [];
        $pananggal = [];
        $now = date('Y');

        if ($birth != null) {
            $birthYear = date('Y', strtotime($birth));
            //dd($birthYear);

            $umur = $now - $birthYear;
            //dd($umur);
            $tanggal = $this->warigaModel->getWariga($birth);
            //dd($tanggal);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['saptawara']);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['pancasadha']);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['pangarasan']);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['pananggal']);
            $detail = $this->detailwarigaModel->getDetailwariga($tanggal['sasih']);
            $saptawara = $this->saptawaraModel->getSaptawara($tanggal['saptawara']);
            $pancasudha = $this->pancasudhaModel->getPancasudha($tanggal['pancasadha']);
            $panga = $this->pangarasanModel->getPangarasan($tanggal['pangarasan']);
            $panang = $this->pananggalModel->getPananggal($tanggal['pananggal']);
            $sasih = $this->sasihModel->getSasih($tanggal['sasih']);
            //dd($sasih);
            // if ($detail != null) {
            //     $detail = $this->pananggalModel->getPananggal($panang['angka_pananggal']);
            // }
            //dd($pancasudha);
            //dd($panga);
            if (isset($birth['tanggal'])) {
                echo $tanggal['saptawara'];
                echo $tanggal['pancasadha'];
                echo $tanggal['pangarasan'];
                echo $tanggal['pananggal'];
                echo $tanggal['sasih'];
                //echo $panang['angka_pananggal'];
            }
        }
        $data = [
            //judul halaman
            'title' => 'Detail Wariga Page',
            'tanggal' => $tanggal,
            'birth' => $birth,
            'pancasudha' => $pancasudha,
            'saptawara' => $detail,
            'saptawara' => $saptawara,
            'pangarasan' => $panga,
            'umur' => $umur,
            'panang' => $panang,
            'pananggal' => $detail,
            'sasihbulan' => $detail,
            'sasih' => $sasih
        ];
        return view('frontend/detailwariga', $data);
    }
}

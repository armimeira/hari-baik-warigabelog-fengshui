<?php

namespace App\Controllers;

use App\Models\Detailfengshui;
use App\Controllers\BaseController;
use App\Models\FengshuiModel;
use App\Models\PeluangusahaModel;

class FengshuiDetailController extends BaseController
{
    protected $detailfengshui;
    protected $fengshuiModel;
    protected $peluangusahaModel;
    public function __construct()
    {
        $this->detailfengshui = new Detailfengshui();
        $this->fengshuiModel = new FengshuiModel();
        $this->peluangusahaModel = new PeluangusahaModel();
    }

    public function detail($birth)
    {
        $detail = [];
        $hasil;
        $hasilbagi;
        $hasilkali;
        $angkashio;
        $angka_shio = [];
        $shio = [];
        $usaha = [];
        //cek kondisi jika birth tidak kosong
        if ($birth != null) {
            $hasil = $birth - 4;
            $hasilbagi = floor($hasil / 12);
            $hasilkali = $hasilbagi * 12;
            $angkashio = $hasil - $hasilkali;
            //dd($angkashio);

            $shio = $this->detailfengshui->getDetailfengshui($angkashio);
            //dd($shio);
            $detail = $this->detailfengshui->getDetailfengshui($shio['angka_shio']);
            $usaha = $this->peluangusahaModel->getPeluangusaha($detail['angka_shio']);
            $detail = $this->peluangusahaModel->getPeluangusaha($usaha['angka_shio']);
            //dd($detail);
        }
        $data = [
            //judul halaman
            'title' => 'Detail Fengshui Page',
            'birth' => $birth,
            'shio' => $shio,
            'fengshui' => $detail,
            'angkashio' => $angkashio,
            'peluangusaha' => $detail,
            'usaha' => $usaha,
            'shio' => $shio
        ];
        return view('frontend/detailfengshui', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\WarigaModel;
use App\Models\FengshuiModel;
use App\Models\SaptawaraModel;
use App\Models\PancasudhaModel;
use App\Models\PangarasanModel;
use App\Models\PindahrumahModel;
use App\Models\Detailfengshui;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\IncomingRequest;

class UserController extends BaseController
{
    protected $fengshuiModel;
    protected $warigaModel;
    protected $pancasudhaModel;
    protected $saptawaraModel;
    protected $pangarasanModel;
    protected $pindahrumahModel;
    protected $detailfengshui;
    public function __construct()
    {
        $this->fengshuiModel = new FengshuiModel();
        $this->warigaModel = new WarigaModel();
        $this->pancasudhaModel = new PancasudhaModel();
        $this->saptawaraModel = new SaptawaraModel();
        $this->pangarasanModel = new PangarasanModel();
        $this->pindahrumahModel = new PindahrumahModel();
        $this->detailfengshui = new Detailfengshui();
    }

    public function index()
    {
        // $user = $this->usersModel->findAll();
        $data = [
            //judul halaman
            'title' => 'Home Page'
        ];
        return view('frontend/home', $data);
    }
    public function about()
    {
        $data = [
            //judul halaman
            'title' => 'About Page'
        ];
        return view('frontend/about', $data);
    }
    public function fengshui()
    {
        $request = service('request');
        // Retrieve $_GET and $_POST variables
        //inisialisasi variabel
        $name = $request->getGet('name');
        $gender = $request->getGet('gender');
        $birth = $request->getGet('birth');
        $fengshui = [];
        //deklarasi variabel
        $mingKua = 0; //belum terhitung
        $hasil;
        $hasilbagi;
        $hasilkali;
        $angkashio;
        $angka_shio = [];
        $shio = [];
        $pindah = [];
        $detail = [];
        //cek kondisi jika birth tidak kosong
        if ($birth != null) {
            $birthArray = str_split($birth); //str_split = mengkonversi string ke array menjadi indeks
            $y = $birthArray[2] + $birthArray[3];
            if ($y > 9) {
                $yArray = str_split($y);
                $y = $yArray[0] + $yArray[1];
                //dd($y);
            }
            if ($gender == 'Laki-laki') {
                $mingKua = 10 - $y;
            } else if ($gender == 'Perempuan') {
                $mingKua = $y + 5;
            }
            if ($mingKua > 9) {
                $mingKuaArray = str_split($mingKua);
                $mingKua = $mingKuaArray[0] + $mingKuaArray[1];
            }
            $fengshui = $this->fengshuiModel->getFengshui($mingKua);

            $hasil = $birth - 4;
            $hasilbagi = floor($hasil / 12);
            $hasilkali = $hasilbagi * 12;
            $angkashio = $hasil - $hasilkali;
            //dd($angkashio);

            $shio = $this->detailfengshui->getDetailfengshui($angkashio);
            //dd($shio);
            if ($shio != null) {

                $pindah = $this->pindahrumahModel->getPindahRumah($shio['angka_shio']);
                //dd($pindah);
                $detail = $this->pindahrumahModel->getPindahRumah($pindah['angka_shio']);
                if (isset($angkashio['shio'])) {
                    echo $shio['angka_shio'];
                    echo $pindah['angka_shio'];
                }
                //dd($detail);
            }
        }

        $data = [
            //judul halaman
            'title' => 'Fengshui Page',
            'name' => $name,
            'gender' => $gender,
            'birth' => $birth,
            'mingkua' => $mingKua,
            'fengshui' => $fengshui,
            'pindah' => $pindah,
            'pindahrumah' => $detail,
            'shio' => $shio
        ];
        return view('frontend/fengshui', $data);
    }

    public function wariga()
    {
        $request = service('request');
        // Retrieve $_GET and $_POST variables
        //inisialisasi variabel
        $name = $request->getGet('name');
        $birth = $request->getGet('birth');
        $tanggal = [];
        $pancasudha = [];
        $sapta = [];
        $panga = [];
        $sasih = [];
        $tahunsaka = [];
        $ingkel = [];
        $jejepan = [];
        $lintang = [];
        $rakam = [];
        $watekmadya = [];
        $watekalit = [];
        $neptu = [];
        $ekajalarsi = [];
        $zodiak = [];
        $pratiti = [];
        // $pancasadha = $request->getGet('p');
        if ($birth != null) {
            $tanggal = $this->warigaModel->getWariga($birth);
            //dd($tanggal);
            $pancasudha = $this->pancasudhaModel->getPancasudha($tanggal['pancasadha']);
            $sapta = $this->saptawaraModel->getSaptawara($tanggal['saptawara']);
            $panga = $this->pangarasanModel->getPangarasan($tanggal['pangarasan']);
            //dd($panga);
            //mengambil data dari model dari tanggal
        }

        $data = [
            //judul halaman
            'title' => 'Wariga Page',
            'name' => $name,
            'birth' => $birth,
            'tanggal' => $tanggal,
            'pancasudha' => $pancasudha,
            'saptawara' => $sapta,
            'pangarasan' => $panga,
            'sasih' => $sasih,
            'tahunsaka' => $tahunsaka,
            'ingkel' => $ingkel,
            'jejepan' => $jejepan,
            'lintang' => $lintang,
            'rakam' => $rakam,
            'watekmadya' => $watekmadya,
            'watekalit' => $watekalit,
            'neptu' => $neptu,
            'ekajalarsi' => $ekajalarsi,
            'zodiak' => $zodiak,
            'pratiti' => $pratiti
        ];
        return view('frontend/wariga', $data);
    }
}

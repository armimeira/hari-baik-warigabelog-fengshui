<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Hari Baik App'
        ];

        return view('pages/home', $data);
    }
}

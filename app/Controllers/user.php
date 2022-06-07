<?php

namespace App\Controllers;

use App\Models\M_User;
use App\Models\Login_User;

class user extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('template/wrapper', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('template/wrapper', $data);
    }

    public function regis()
    {
        $userData = new Login_User();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $userData->insert($_POST);
        $session = session();
        session()->setFlashdata('message', 'Selamat Registrasi Berhasil!!');
        return redirect()->to(site_url('user'));
    }

    public function login()
    {
        $data = [
            //judul halaman
            'title' => 'Home Page'
        ];
        if ($this->ada($_POST['email'], $_POST['password']) != Null) {

            $session = session();
            $session->set('email', $_POST['email']);
            return $this->response->redirect(site_url('home'));
        } else {
            session()->setFlashdata('msg', 'Email/Password Salah!');
            return view('dashboard/home', $data);
        }
    }

    public function ada($email, $password)
    {
        $Login_user = new Login_User();
        $user = $Login_user->where('email', $email)->first();
        if ($user != NULL) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
    }
}

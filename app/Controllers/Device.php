<?php

namespace App\Controllers;

class Device extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Monitoring Web'
        ];
        return view('pages/home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
            [
                'alamat' => 'Jl. Setiadia No.1998',
                'kota' => 'Bandung',
                'telp' => '0612394'
            ],
            [
                'alamat' => 'Jl. Soehart No.98',
                'kota' => 'Yogyakarta',
                'telp' => '0613215'
            ]
            ]
        ];
        return view('pages/contact', $data);
    }
}

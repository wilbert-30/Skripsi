<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
       
        $data = [
            'title' => 'Home | Hai'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Hai'
        ];

        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [[

                'tipe' => 'rumah',
                'alamat' => 'Jl. addd',
                'kota' => 'Bandung'
            ],
            [
                'tipe' => 'kantor',
                'alamat' => 'Jl. asssddd',
                'kota' => 'Jakarta'
            ]
            ]

        ];
        return view('pages/contact', $data);
    }
}

<?php

namespace App\Controllers;

class Produk extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'BERAK'
        ];
        return view('produk/index', $data);
    }
	
	public function home(){
		echo view('layout/header');
        echo view('produk/index');
        echo view('layout/footer');
        
	}
}

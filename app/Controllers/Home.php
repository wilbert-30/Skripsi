<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	
	public function home(){
		echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
	}
}

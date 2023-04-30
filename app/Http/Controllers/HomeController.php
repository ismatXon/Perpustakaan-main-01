<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hometampil(){
        return view('halaman/home');
    }
}

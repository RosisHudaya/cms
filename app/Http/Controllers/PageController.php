<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Hi! Selamat Datang di Website Laravel";
    }

    public function about(){
        echo "Nama  : Rosis Hudaya <br>";
        echo "NIM   : 2041720053 <br>";
        echo "Kelas : TI 2G";
    }

    public function articles($id = 2041){
        echo "Ini adalah halaman Artikel dengan ID : ". $id;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{ 
    public function index() 
    {
        // Variabel
        $judul1 = "Website Praktikum Laravel";
        $judul2 = "Rekayasa Perangkat Lunak";

        return view('pages.home', [//array dari data variabel
                    'judul1' => $judul1,
                    'judul2' => $judul2
                    ]);
    }
} 

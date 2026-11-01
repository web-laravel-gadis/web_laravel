<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{ 
    public function index() 
    {
        // Variabel
        $nama = "Muhammad Irwansyah";
        $sekolah = "SMK DINAMIKA PEMBANGUNAN 2 JAKARTA";
        $jurusan = "Rekayasa Perangkat Lunak";
        $nis = "250319";
        $kelas = "XI RPL 2";

        return view('pages.profil', [//array dari data variabel
                    'nama' => $nama,
                    'sekolah' => $sekolah,
                    'jurusan' => $jurusan,
                    'nis' => $nis,
                    'kelas' => $kelas
                    ]);
    }
}   
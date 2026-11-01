@extends('layout.master')
@section('content')

<h2 class="mb-4 text-danger">Artikel Terbaru</h2>

<div class="card shadow mb-4">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('images/artikel/berita1.jpg') }}" 
            class="img-fluid rounded-start" alt="berita 1">
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Pelatihan Laravel</h3>
                    <p>Peserta didik mengikuti kegiatan praktikum
                        pemrograman web dinamis menggunakan framework
                        laravel untuk membangun website modern berbasis
                        MVC.
                    </p>

                    <a href="{{ url('/readmore') }}" class="btn btn-danger">
                        Baca bro
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

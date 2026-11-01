@extends('layout.master')

@section('content')

<h2>{{ $judul1 }}</h2> <h3 class="mb-5">{{ $judul2 }}</h3>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="text-danger">Produk 1</h3>
                    <p>Informasi Produk 1</p>
                    <a href="{{ url('/detail') }}" class="btn btn-danger">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="text-danger">Produk 2</h3>
                    <p>Informasi Produk 2</p>
                    <a href="{{ url('/detail') }}" class="btn btn-danger">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="text-danger">Produk 3</h3>
                    <p>Informasi Produk 3</p>
                    <a href="{{ url('/detail') }}" class="btn btn-danger">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="text-danger">Produk 4</h3>
                    <p>Informasi Produk 4</p>
                    <a href="{{ url('/detail') }}" class="btn btn-danger">
                        Detail
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
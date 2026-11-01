@extends('layout.admin')

@section('content')

<div class="row">

    <!-- Kategori Artikel -->
    <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">

                <i class="bi bi-folder-fill fs-1 text-primary"></i>

                <h5 class="mt-3">
                    Kategori Artikel
                </h5>

                <h2>
                    5
                </h2>

            </div>
        </div>
    </div>


    <!-- Artikel -->
    <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">

                <i class="bi bi-newspaper fs-1 text-success"></i>

                <h5 class="mt-3">
                    Artikel
                </h5>

                <h2>
                    12
                </h2>

            </div>
        </div>
    </div>


    <!-- Administrator -->
    <div class="col-md-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">

                <i class="bi bi-person fs-1 text-danger"></i>

                <h5 class="mt-3">
                    Administrator
                </h5>

                <h2>
                    1
                </h2>

            </div>
        </div>
    </div>

</div>


<!-- FOOTER -->
<footer class="bg-dark text-white mt-5 fixed-bottom">
    <div class="container text-center py-4">

        <h5>
            RPL - SMK Dinamika Pembangunan 2 Jakarta
        </h5>

        <p class="mb-0">
            Hak Cipta Oleh Gadis - XI RPL 2
        </p>

    </div>
</footer>

@endsection
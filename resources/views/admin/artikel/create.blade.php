
@extends('layout.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3>Artikel / Berita</h3>
        <p class="text-muted mb-0">
            Kelola artikel dan berita website.
        </p>
    </div>

    <a href="{{ route('kategori.index') }}" class="btn btn-outline-primary">
        <i class="bi bi-folder-fill"></i>
        Kategori Artikel
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Artikel / Berita</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('artikel.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label">Kategori</label>

                <select name="id_kategori" class="form-select" required>
                    <option value="">-- Pilih kategori --</option>

                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Artikel</label>
                <input type="text"
                       name="judul"
                       class="form-control"
                       placeholder="Masukkan judul artikel"
                       value="{{ old('judul') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi Artikel</label>
                <textarea name="isi"
                          rows="8"
                          class="form-control"
                          placeholder="Masukkan isi artikel"
                          required>{{ old('isi') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Artikel</label>
                <input type="file"
                    name="gambar"
                    class="form-control"
                    accept="image/*"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i>
                Simpan
            </button>

            <a href="{{ route('artikel.index') }}"
               class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>

@endsection

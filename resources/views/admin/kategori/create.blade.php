
@extends('layout.admin')

@section('content')

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

                    @foreach ($kategori as $item)
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
            </div>

            <div class="mb-3">
                <label class="form-label">Isi Artikel</label>

                <textarea name="isi"
                        rows="8"
                        class="form-control"
                        placeholder="Masukkan isi artikel"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Artikel</label>

                <input type="file"
                    name="gambar"
                    class="form-control"
                    accept="image/*">
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

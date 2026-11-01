@extends('layout.admin.master')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3>Artikel / Berita</h3>
        <p class="text-muted mb-0">
            Kelola artikel dan berita website
        </p>
    </div>

    <a href="{{ route('artikel.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Tambah Artikel
    </a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th width="60">No</th>
                        <th width="120">Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($kategori as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if ($item->gambar)
                                    <img
                                        src="{{ asset('images/artikel/' . $item->gambar) }}"
                                        width="100"
                                        class="img-thumbnail"
                                        alt="Gambar artikel"
                                    >
                                @else
                                    -
                                @endif
                            </td>

                            <td>{{ $item->judul }}</td>

                            <td>
                                {{ $item->kategori->nama_kategori ?? '-' }}
                            </td>

                            <td>
                                <a
                                    href="{{ route('artikel.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>

                                <form
                                    action="{{ route('artikel.destroy', $item->id) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Belum ada artikel
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
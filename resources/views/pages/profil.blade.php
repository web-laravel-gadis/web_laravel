@extends('layout.master')

@section('content')

<h2 class="mb-4 text-danger">Halaman Profil</h2>

<div class="card shadow mb-4">
    <div class="card-body">
        <h3 class="card-title mb-4">Biodata</h3>

```
    <h2 class="mb-3">Profil Siswa</h2>

    <table class="table table-bordered w-100">
        <tr>
            <th style="width: 30%;">Nama Siswa</th>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <td>{{ $sekolah }}</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>{{ $jurusan }}</td>
        </tr>
        <tr>
            <th>NIS</th>
            <td>{{ $nis }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $kelas }}</td>
        </tr>
    </table>

</div>
```

</div>

@endsection

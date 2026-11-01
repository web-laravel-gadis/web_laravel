@extends('layout.admin')
@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-warning">
        <h5 class="mb-0">
            Edit Kategori Artikel
        </h5>
    </div>

    <div class="card-body">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            enctype="multipart/from-data">

            @csrf
            @method('PUT')

            <input type="text"
            name="judul"
            class="from-control"
            value="{{ $artikel->judul }}"

            <textarea name="isi"
            rows="8"
            class="from-control">{{ $artikel->isi }}</textarea>

            <img src="{{ asset('images/artikel/' . $artikel->gambar) }}"
            width="150"
            class="img-thumbnail mb-2">

            <button type="submit"
            class="btn btn-primary">
            <i class="bi bi-save"></i>
            Update
            </button

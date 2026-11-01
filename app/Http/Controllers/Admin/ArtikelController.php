<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $artikel = Artikel::with('kategoriArtikel')
        ->latest()
        ->get();

    return view('admin.artikel.index', compact('artikel'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $kategori = KategoriArtikel::all();

    return view('admin.artikel.create', [
        'kategori' => $kategori
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'id_kategori' => 'required',
        'judul' => 'required|max:200',
        'isi' => 'required',
        'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $namaGambar = time() . '.' . $request->gambar->extension();

    $request->gambar->move(
        public_path('images/artikel'),
        $namaGambar
    );

    Artikel::create([
        'id_kategori' => $request->id_kategori,
        'judul' => $request->judul,
        'isi' => $request->isi,
        'gambar' => $namaGambar
    ]);

    return redirect()->route('artikel.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = KategoriArtikel::all();

        return view('admin.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
        'id_kategori' => 'required',
        'judul' => 'required|max:200',
        'isi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);

    $namaGambar = $artikel->gambar;

    if ($request->hasFile('gambar')) {
        if (
            $artikel->gambar &&
            file_exists(
                public_path(
                    'images/artikel/' . $artikel->gambar
                )
            )
        ) {
            unlink(
                public_path(
                    'images/artikel/' . $artikel->gambar
                )
            );
            }

        $namaGambar = time() . '.' .
            $request->gambar->extension();

        $request->gambar->move(
            public_path('images/artikel'),
            $namaGambar
        );
    }

    $artikel->update([
        'id_kategori' => $request->id_kategori,
        'judul' => $request->judul,
        'isi' => $request->isi,
        'gambar' => $namaGambar
    ]);
    
    return redirect()
    >route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
{
    if (
        $artikel->gambar &&
        file_exists(public_path('images/artikel/' . $artikel->gambar))
    ) {
        unlink(public_path('images/artikel/' . $artikel->gambar));
    }

    $artikel->delete();

    return redirect()->route('artikel.index');
}
}
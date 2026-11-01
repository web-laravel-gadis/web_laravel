<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = [
        'id_kategori',
        'judul',
        'isi',
        'gambar',
    ];

    public function kategoriArtikel()
    {
        return $this->belongsTo(
            kategoriArtikel::class, 
            'id_kategori');
    }
}

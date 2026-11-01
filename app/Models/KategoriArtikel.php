<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table = 'kategori_artikel';
    protected $fillable = [
        'nama_kategori'
    ];
    public function artikel()
    {
        return $this->hasMany(
            artikel::class, 
            'id_kategori');
    }
}

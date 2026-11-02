
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori_artikel')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};

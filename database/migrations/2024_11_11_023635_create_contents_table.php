<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255); // Batasan panjang 255 karakter
            $table->string('slug', 255)->unique(); // Menjadikan slug unik dan diindex
            $table->text('content')->nullable(); // Kolom konten tetap tipe teks
            $table->string('category', 100)->index(); // Batasan panjang 100 karakter dan diindex untuk pencarian cepat
            $table->string('img', 255)->nullable()->default(null); // Nullable jika tidak selalu ada gambar
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};

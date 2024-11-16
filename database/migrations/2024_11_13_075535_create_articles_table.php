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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255); // Batasan panjang 255 karakter
            $table->string('slug', 255)->unique(); // Menjadikan slug unik dan diindex
            $table->text('content'); // Kolom konten tetap tipe teks            
            $table->string('img', 255)->nullable()->default(null); // Nullable jika tidak selalu ada gambar
            $table->foreignId('article_category_id')->constrained('article_categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

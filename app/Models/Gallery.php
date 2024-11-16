<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\GalleryCategory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // Kolom lainnya di tabel Gallery
        'category_id', // Foreign key ke kategori
    ];
    
    public function gallery_category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class);
    }
}

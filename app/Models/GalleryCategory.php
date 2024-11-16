<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Gallery;

class GalleryCategory extends Model
{
    use HasFactory;
    public function Gallery(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}

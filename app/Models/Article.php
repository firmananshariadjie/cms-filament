<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ArticleCategory;


class Article extends Model
{
    use HasFactory;

    public function article_category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($content) {
            $content->created_by = auth()->user()->name;  
        });

        // Untuk menambahkan updated_by saat melakukan update
        static::updating(function ($content) {
            $content->edited_by = auth()->user()->name; 
        });
    }
    
}


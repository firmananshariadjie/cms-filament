<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category','edited_by','created_by'];

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

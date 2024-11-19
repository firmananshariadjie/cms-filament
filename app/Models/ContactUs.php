<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();        

        // Untuk menambahkan updated_by saat melakukan update
        static::creating(function ($content) {
            $content->status = "Pending";
        });
    }
}

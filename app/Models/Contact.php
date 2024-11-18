<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($content) {
            $content->created_by = auth()->user()->name;  
        });
    }

    protected $casts = [
        'status' => 'boolean',
    ];
}

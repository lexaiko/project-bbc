<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'title',
        'excerpt',
        'date',
        'content',
    ];
}

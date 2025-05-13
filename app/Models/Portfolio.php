<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short_description',
        'detailed_description',
        'images',
        'link',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}

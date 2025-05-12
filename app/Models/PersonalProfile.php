<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'nickname',
        'slogan',
        'about',
        'github',
        'linkedin',
        'instagram',
        'whatsapp',
        'email',
        'maps',
    ];
}

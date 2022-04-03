<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'image1',
        'title1',
        'desc1',
        'image2',
        'title2',
        'desc2',
        'image3',
        'title3',
        'desc3',
    ];
}

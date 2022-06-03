<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sertifikat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pelatihan_id',
        'peserta_id',
        'foto_sertifikat' 
    ];
}

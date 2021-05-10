<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;
    protected $fillable =[
        'codeP',
        'date entre',
        'date sortie',
        'heure entre',
        'heure sortie',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paie extends Model
{
    use HasFactory;
    protected $fillable = [
        'codeP',
        'nombre de jour',
        'prix heure',
        'regime',
        'salaire de base',
        'salaire net',
        'cnss',
        'les heurs suplementaires',
        'les intéréts bancaires',
        'primes',
    ];
}

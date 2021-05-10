<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'nom',
        'prenom',
        'situation familiale',
        'telephone',
        'adresse',
        'cv',
        'nationalite',
    ];
}

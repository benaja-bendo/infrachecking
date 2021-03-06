<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'telephone',
        'adresse',
        'email',
        'logo',
        'taille',
        'role',
        'statut'
    ];
}

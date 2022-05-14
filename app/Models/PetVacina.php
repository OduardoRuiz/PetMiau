<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetVacina extends Model
{
    use HasFactory;

    protected $table = 'pet_vacina';

    protected $fillable = ['pet_id','vacina_id','data'];

    
}

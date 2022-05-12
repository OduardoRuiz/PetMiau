<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacao extends Model
{
    use HasFactory;

    protected $table = 'obsevacoes';
    protected $fillable = ['texto','pet_id'];

    
}

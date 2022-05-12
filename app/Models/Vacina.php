<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    
    public function pets(){
        return $this->belongsToMany(Pet::class);
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['nome','data_nascimento','imagem','peso','tipo_id','user_id'];
    
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    

    

}

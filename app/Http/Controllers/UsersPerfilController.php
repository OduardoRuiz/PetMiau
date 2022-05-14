<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use App\Models\Tipo;
use App\Models\Vacina;
use App\Models\Observacoes;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersPerfilController extends Controller
{
    public function usuario()
    {

        
        $pefilusuario=User::where('id', Auth()->user()->id)->first();
        $pefilendereco=Endereco::where('user_id', Auth()->user()->id)->first();
        
        return view('perfil.usuario')->with(['user'=>$pefilusuario,'endereco'=>$pefilendereco]);
    }
    public function geral($id)

    {
        $pefilusuario=User::where('id', $id)->first();
        $pefilendereco=Endereco::where('user_id', $id)->first();
        $pefilpet=Pet::where('user_id', $id)->first();
        

        return view('perfil.geral')->with(['user'=>$pefilusuario,'endereco'=>$pefilendereco,'pet'=>$pefilpet]);
    }

    public function meuspets()

    {
        
        $pefilpet=Pet::where('user_id', Auth()->user()->id)->paginate(3);
        return view('perfil.meuspets')->with(['pets'=>$pefilpet]);
    }
}

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
        $idusuario= Pet::where('id',$id )->value('user_id');
        $pefilusuario=User::where('id',   $idusuario)->first();
        $pefilendereco=Endereco::where('user_id',  $idusuario)->first();
        $pefilpet=Pet::where('id',$id )->first();



        return view('perfil.geral')->with(['user'=>$pefilusuario,'endereco'=>$pefilendereco,'pet'=>$pefilpet]);
    }

    public function meuspets()

    {
        $endereco=Endereco::where('user_id', Auth()->user()->id)->first();
        $petcount=Pet::where('user_id', Auth()->user()->id)->count();
        $petperfil=Pet::where('user_id', Auth()->user()->id)->simplePaginate(3);
        return view('perfil.meuspets')->with(['pets'=>$petperfil,'endereco'=>$endereco, 'petCount'=>$petcount]);
    }
}

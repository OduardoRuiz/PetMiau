<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Tipo;
use App\Models\Vacina;
use App\Models\Observacoes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class PetsController extends Controller
{
    public function index()
    {
        return view('pet.index')->with(['pets'=>Pet::all(),'tipos'=> Tipo::all(),'vacinas'=>Vacina::all()]);
    }

    public function create()
    {
        return view('pet.create')->with(['tipos'=> Tipo::all(),]);
    }

    public function store(Request $request)
    {
       if ($request->imagem) {
            $imagem = $request->file('imagem')->store('/public/pets');
            $imagem = str_replace('public/', 'storage/', $imagem);
        } else {
            $imagem = "storage/pets/imagempadrao.png";
        } 

       
        $pets=Pet::create([
            'user_id' => Auth()->user()->id,
            'nome' => $request->nome,
            'peso' => $request->peso,
            'data_nascimento' => $request->data_nascimento,
            'obs' => $request->obs,
            'tipo_id' => $request->tipo_id,
            'imagem' => $imagem

        ]);


        session()->flash("sucesso", 'pet cadastrado com sucesso');
        return redirect(route('perfil.meuspets'));

    }

    public function edit(Pet $pet)
    {
        return view('pet.edit')->with(['pet'=>$pet,'tipos'=>Tipo::all(),'vacinas'=>Vacina::all()]);
    }

    public function update(Request $request, Pet $pet)
    {  
        if ($request->imagem) {
            $imagem = $request->file('imagem')->store('/public/pets');
            $imagem = str_replace('public/', 'storage/', $imagem);
            Storage::delete($pet->imagem);
            if (!$pet->imagem == 'storage/pets/imagempadrao.png')
                Storage::delete($pet->imagem);
        } else {
            $imagem = $pet->imagem;
        }
    

        $pet->update([
            'user_id' => Auth()->user()->id,
            'nome' => $request->nome,
            'peso' => $request->peso,
            'data_nascimento' => $request->data_nascimento,
            'obs' => $request->obs,
            'tipo_id' => $request->tipo_id,
            'imagem' => $imagem
        ]);
        session()->flash("sucesso", 'pet atualizado com sucesso');
        return redirect(route('perfil.meuspets'));

    }

    public function destroy(Pet $pet,$id)
    {
    
     Pet::where('id', $id)->delete();
     session()->flash('sucesso','Pet apagado com sucesso');
     return redirect(route('perfil.meuspets'));
     
    }
}

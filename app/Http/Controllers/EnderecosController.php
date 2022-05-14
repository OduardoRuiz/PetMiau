<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;


class EnderecosController extends Controller
{
    public function index()
    {
        return view('endereco.index')->with('enderecos',Endereco::all());
    }

    public function create()
    {
        return view('endereco.create');
    }

    public function store(Request $request)
    {

       
        Endereco::create([
            'user_id' => Auth()->user()->id,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'contato' => $request->contato,
            'cep' => $request->cep

        ]);

    
        session()->flash("sucesso", 'endereco cadastrado com sucesso');
        return redirect(route('perfil.usuario'));

    }

    public function edit(Endereco $endereco)
    {
        return view('endereco.edit')->with('endereco',$endereco);
    }

    public function update(Request $request, Endereco $endereco)
    {

        $endereco->update([
            'user_id' => Auth()->user()->id,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'contato' => $request->contato,
            'cep' => $request->cep

        ]);
        session()->flash("sucesso", 'endereco atualizado com sucesso');
        return redirect(route('perfil.usuario'));

    }

    public function destroy($id)
    {
    
     Endereco::where('id', $id)->delete();
     session()->flash('sucesso','endereço apagado apagado com sucesso');
     return redirect(route('endereco.index'));
     
    }
}

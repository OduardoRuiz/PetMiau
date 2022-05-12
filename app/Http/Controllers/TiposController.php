<?php

namespace App\Http\Controllers;
use App\Models\Tipo;

use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index()
    {
        return view('tipo.index')->with('tipos',Tipo::all());
    }

    public function create()
    {
        return view('tipo.create');
    }

    public function store(Request $request)
    {

        Tipo::create($request->all());
        session()->flash("sucesso", 'tipo cadastrado com sucesso');
        return redirect(route('tipo.index'));

    }

    public function edit(Tipo $tipo)
    {
        return view('tipo.edit')->with('tipo',$tipo);
    }

    public function update(Request $request, Tipo $tipo)
    {

        $tipo->update([
            'nome' => $request->nome
        ]);
        session()->flash("sucesso", 'usuario atualizado com sucesso');
        return redirect(route('tipo.index'));

    }
    public function destroy(Tipo $tipo,$id)
    {
    
     Tipo::where('id', $id)->delete();
     session()->flash('sucesso','Usuario apagado com sucesso');
     return redirect(route('user.index'));
     
    }
}

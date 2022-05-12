<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacina;
use App\Models\Pet;

class VacinasController extends Controller
{
    public function index()
    {
        return view('vacina.index')->with('vacinas',Vacina::all());
    }

    public function create()
    {
        return view('vacina.create');
    }

    public function store(Request $request)
    {

        Vacina::create($request->all());
        session()->flash("sucesso", 'vacina cadastrado com sucesso');
        return redirect(route('tipo.index'));

    }

    public function edit(Vacina $vacina)
    {
        return view('vacina.edit')->with('vacina',$vacina);
    }

    public function update(Request $request, Vacina $vacina)
    {

        $vacina->update([
            'nome' => $request->nome
        ]);
        session()->flash("sucesso", 'vacina atualizado com sucesso');
        return redirect(route('vacina.index'));

    }
    public function destroy(Vacina $vacina,$id)
    {
    
    Vacina::where('id', $id)->delete();
     session()->flash('sucesso','vacina apagada com sucesso');
     return redirect(route('vacina.index'));
     
    }


}

<?php

namespace App\Http\Controllers;
use App\Models\Tipo;
use App\Models\Pet;

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
        if(Pet::where('tipo_id', $id)->count()==0){

            Tipo::where('id', $id)->delete();
            session()->flash('sucesso','Tipo apagado com sucesso');
            return redirect(route('tipo.index'));

            

        }else {
            session()->flash('sucesso','Tipo não pode ser apagado ');
            return redirect(route('tipo.index'));
        }
    
    
     
     
    }
}

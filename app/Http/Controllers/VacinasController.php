<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacina;
use App\Models\Pet;
use App\Models\PetVacina;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return redirect(route('vacina.index'));

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

        if(PetVacina::where('vacina_id', $id)->count()==0){

            Vacina::where('id', $id)->delete();
            session()->flash('sucesso','vacina apagada com sucesso');
            return redirect(route('vacina.index'));



        }else {
            session()->flash('sucesso','vacina não pode ser apagada');
            return redirect(route('vacina.index'));
        }



    }

    public function criar(Request $request,Vacina $vacina,$id)
    {

        $vacinas= DB::table('pet_vacina')->where('pet_id', '=', $id)->get();
        $nomevacinas = Vacina::all();
        $id1=$id;

        PetVacina::create([
            'vacina_id' => $request->vacina_id,
            'pet_id' => $id,
            'data' => $request->data
            ]);


            return redirect("/vacinas/$id");

    }
    public function lista(PetVacina $petvacina,$id)
    {

        $vacinas= DB::table('pet_vacina')->where('pet_id', '=', $id)->get();
        $nomevacinas = Vacina::all();
        $id1=$id;
        $nomepet = DB::table('pets')->where('id', '=', $id)->value('nome');


        return view('vacina_pet.index')->with(['vacinas'=>$vacinas,'nomes'=>$nomevacinas,'id'=>$id1, 'nomepet'=> $nomepet]);

    }
    public function carregar($id){

        $vacinas= DB::table('pet_vacina')->where('pet_id', '=', $id)->get();
        $nomevacinas = Vacina::all();
        $id1=$id;
        $nomepet = DB::table('pets')->where('id', '=', $id)->value('nome');


        return view('vacina_pet.index')->with(['vacinas'=>$vacinas,'nomes'=>$nomevacinas,'id'=>$id1, 'nomepet'=> $nomepet]);

    }

    public function apagar($id)
    {

    $pet= DB::table('pet_vacina')->where('updated_at', '=', $id)->value('pet_id');
    $vacinas= DB::table('pet_vacina')->where('updated_at', '=', $id)->delete();

    return redirect("/vacinas/$pet");

    }




}

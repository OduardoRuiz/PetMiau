<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observacao;
use App\Models\Pet;
use Illuminate\Support\Facades\DB;

class ObservacoesController extends Controller
{
    public function index(Request $request,$pet_id)
    {
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $pet_id)->orderBy('updated_at','DESC')->get();
        $nomepet = DB::table('pets')->where('id', '=', $pet_id)->value('nome');

        return view('observacao.index')->with(['observacoes'=>$obs,'pet_id'=>$pet_id, 'nomepet'=>$nomepet]);
    }

    public function create(Request $request, $pet_id)
    {
        
        $id=$pet_id;
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $pet_id)->get();
        $nomepet = DB::table('pets')->where('id', '=', $pet_id)->value('nome');

        return view('observacao.index')->with(['pet_id'=>$id,'observacoes'=>$obs, 'nomepet'=>$nomepet]);
        
    }

    public function store(Request $request,$id )
    {

        Observacao::create([
            'texto' => $request->texto,
            'pet_id' => $id
            ]);
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $id)->get();
       
        return redirect("/store/$id");



    }

    public function carregar($id){

        $obs= DB::table('obsevacoes')->where('pet_id', '=', $id)->get();
        $nomepet = DB::table('pets')->where('id', '=', $id)->value('nome');
       
        return view('observacao.index')->with(['pet_id'=>$id,'observacoes'=>$obs, 'nomepet'=>$nomepet]);
     
    }

    public function edit(Observacao $observacao, )
    {
        
        return view('observacao.index')->with(['observacao'=>$observacao]);
    }

    public function update(Request $request, Observacao $observacao)
    {

        $observacao->update([
            'texto' => $request->texto
        ]);
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $observacao->pet_id)->get();
       
        
        return redirect("/observacoes/$observacao->pet_id");

    }

    public function destroy(Observacao $observacao,$id)
    {
        $pet = DB::table('obsevacoes')->where('id', '=', $id)->value('pet_id');
        $obs= DB::table('obsevacoes')->where('pet_id', '=', $pet)->get();
        

        Observacao::where('id', $id)->delete();

     

     return redirect("/observacoes/$pet");
     
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('noticia.index')->with('noticias',Noticia::all());
    }

    public function create()
    {
        return view('noticia.create');
    }

    public function store(Request $request)
    {

        Noticia::create($request->all());
        session()->flash("sucesso", 'noticia cadastrado com sucesso');
        return redirect(route('noticia.index'));

    }

    public function edit(Noticia $noticia)
    {
        return view('noticia.edit')->with('noticia',$noticia);
    }

    public function update(Request $request, Noticia $noticia)
    {

        $noticia->update([
            'noticia' => $request->noticia
        ]);
        session()->flash("sucesso", 'noticia atualizado com sucesso');
        return redirect(route('noticia.index'));

    }
}

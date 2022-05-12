<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('user.index')->with('users',User::all());
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        if ($request->imagem) {
            $imagem = $request->file('imagem')->store('/public/usuarios');
            $imagem = str_replace('public/', 'storage/', $imagem);
        } else {
            $imagem = "storage/usuarios/imagempadrao.png";
        } 

        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8'
        ]);
        $request['password'] = Hash::make($request['password']);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'imagem' => $imagem]);
    }

    public function edit(User $user)
    {
        return view('user.edit')->with('user',$user);
    }

    public function update(Request $request, User $user)
    {
        if ($request->imagem) {
            $imagem = $request->file('imagem')->store('/public/users');
            $imagem = str_replace('public/', 'storage/', $imagem);
            \Storage::delete($user->imagem);
            if (!$user->imagem == 'storage/users/imagempadrao.png')
                \Storage::delete($user->imagem);
        } else {
            $imagem = $user->imagem;
        }

        $user->update([
            'name' => $request->name,
            'imagem' => $imagem
        ]);
        session()->flash("sucesso", 'usuario atualizado com sucesso');
        return redirect(route('user.index'));

    }

    public function destroy(User $user,$id)
    {
    
     User::where('id', $id)->delete();
     session()->flash('sucesso','Usuario apagado com sucesso');
     return redirect(route('user.index'));
     
    }
    

}

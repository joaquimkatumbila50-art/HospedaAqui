<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.listar', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('users.listar');
    }
public function edit($id)
{
    $user = User::findOrFail($id); // busca o usuário pelo ID
    return view('users.edit', compact('user')); // envia para a view
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$id,
        'password' => 'nullable|min:6', // senha opcional
    ]);

    $user = User::findOrFail($id);

    $data = $request->only(['name', 'email']); // pega apenas os campos básicos

    if($request->filled('password')) {
        $data['password'] = Hash::make($request->password); // só atualiza se enviado
    }

    $user->update($data);

    return redirect()->route('users.listar')->with('success', 'Usuário atualizado com sucesso!');
}
}


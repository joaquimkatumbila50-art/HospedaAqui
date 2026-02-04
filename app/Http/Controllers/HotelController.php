<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'nullable'
        ]);

        Hotel::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'preco' => $request->preco,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotels cadastrado com sucesso!');
    }

    public function edit($id)
    {
    

    $hotel = Hotel::findOrFail($id); // pega o hotel pelo ID
    return view('hotels.edit', compact('hotel')); // envia $hotel para a view


    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'nullable'
        ]);

        $hotels = Hotel::findOrFail($id);
        $hotels->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotels atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $hotels = Hotel::findOrFail($id);
        $hotels->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotels excluído com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // LISTAR hotéis
    public function index()
    {
        $hoteis = Hotel::all();
        return view('hoteis.index', compact('hoteis'));
    }

    // MOSTRAR formulário
    public function create()
    {
        return view('hoteis.create');
    }

    // 
    public function store(Request $request)
    {
        Hotel::create($request->all());
        return redirect()->route('hoteis.index');
    }

    // EDITAR
    public function edit(Hotel $hotel)
    {
        return view('hoteis.edit', compact('hotel'));
    }

    // ATUALIZAR
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return redirect()->route('hoteis.index');
    }

    // EXCLUIR
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hoteis.index');
    }
}

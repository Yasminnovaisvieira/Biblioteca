<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller{
    public function index(){
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create(){
        return view('livros.adicionar');
    }

    public function store(Request $request){
        $request->validate([
            'titulo' => 'required|max:100',
            'autor' => 'required|max:50',
            'ano_publicacao' => 'required|integer',
        ]);

        Livro::create($request->all());
        return redirect('/livros');
    }
}

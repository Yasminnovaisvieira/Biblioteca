<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder{
    public function run(){
        Livro::create([
            'titulo' => 'Verity',
            'autor' => 'Colleen Hoover',
            'ano_publicacao' => 2018,
            'resumo' => 'Uma escritora descobre segredos perturbadores em um manuscrito inacabado de uma autora famosa.',
        ]);
        
        Livro::create([
            'titulo' => 'A Paciente Silenciosa',
            'autor' => 'Alex Michaelides',
            'ano_publicacao' => 2019,
            'resumo' => 'Uma artista que atira no marido e depois se recusa a falar se torna o foco da investigação de um psicoterapeuta.',
        ]);
        
        Livro::create([
            'titulo' => 'O Silêncio dos Inocentes',
            'autor' => 'Thomas Harris',
            'ano_publicacao' => 1988,
            'resumo' => 'Uma jovem agente do FBI busca a ajuda de um psicopata encarcerado para capturar um serial killer.',
        ]);
        
        Livro::create([
            'titulo' => 'A Garota da Capa Vermelha',
            'autor' => 'Sarah Blakley-Cartwright',
            'ano_publicacao' => 2011,
            'resumo' => 'Uma jovem se vê envolvida em um mistério quando descobre que sua vila é assombrada por um lobo que se disfarça como humano.',
        ]);
        
        Livro::create([
            'titulo' => 'A Última Palavra',
            'autor' => 'Harlan Coben',
            'ano_publicacao' => 2016,
            'resumo' => 'Um escritor de mistérios se vê no meio de um enigma real após a morte de um amigo.',
        ]);    
    }
}
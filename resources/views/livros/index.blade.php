@extends('layouts.app')

@section('content')
    <h1 class="my-4">Lista de Livros</h1>
    <a href="{{ url('/livros/adicionar') }}" class="btn btn-primary mb-3">Adicionar Livro</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Resumo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>{{ $livro->resumo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

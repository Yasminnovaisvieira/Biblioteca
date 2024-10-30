@extends('layouts.app')

@section('content')
    <h1 class="my-4">Adicionar Livro</h1>

    <form action="{{ url('/livros') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação</label>
            <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
        </div>
        <div class="form-group">
            <label for="resumo">Resumo</label>
            <textarea class="form-control" id="resumo" name="resumo"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ url('/livros') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection

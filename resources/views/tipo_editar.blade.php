@extends('layouts.base', ["current"=>"tipos"])

@section('body')
    <form action = "{{ route('tipos.update', $tipo) }}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de tipo de tarefa</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$tipo->nome}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection
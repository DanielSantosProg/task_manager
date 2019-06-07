@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
    <form action = "{{route('tarefas.store')}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Tarefa</h1>
            <label for="titulo">Título: </label>
            <input type = "text" class = "form-control" id="titulo" name="titulo">
            <label for="descricao">Descrição: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao">                                
            <label for="id_tipo">ID do tipo: </label>
            <select class = "form-control" id="id_tipo" name="id_tipo">
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}" >{{$tipo->nome}}</option>
                @endforeach
            </select>             
            <label for="privacidade">Privacidade</label>
            <select class = "form-control" id="privacidade" name="privacidade">
                <option selected>Selecione aqui</option>
                <option value="Publica">Pública</option>
                <option value="Privada">Privada</option>
            </select>           
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection
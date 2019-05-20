@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
    <form action = "{{ route('tarefas.update', $tarefa) }}" method = "POST">  
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de tarefa</h1>
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
            <label for="status">Status</label>
            <select class = "form-control" id="status" name="status">
                <option selected>Selecione aqui</option>
                <option value="A fazer">A fazer</option>
                <option value="Fazendo">Fazendo</option>
                <option value="Concluido">Concluído</option>
            </select>
            <label for="data_conclusao">Data de conclusão: </label>
            <input type = "text" class = "form-control" id="data_conclusao" name="data_conclusao">                    
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection
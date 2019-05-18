@extends('layouts.base', ["current"=>"tipos"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">ID do usuário</th>
            <th scope="col">ID do tipo de tarefa</th>
            <th scope="col">Privacidade</th>
            <th scope="col">Descrição</th>
            <th scope="col">Status</th>
            <th scope="col">Data de conclusão</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->titulo }}</td>
                <td>{{ $task->id_usuario }}</td>
                <td>{{ $task->id_tipo }}</td>
                <td>{{ $task->privacidade }}</td>
                <td>{{ $task->descricao }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->data_conclusao }}</td>
                <td>
                  <form action = "{{ route('tarefas.destroy', $task->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('tarefas.edit', $task->id) }}">Editar</a>
                    @method('DELETE')
                    <button type = "submit" class="btn btn-danger">Excluir</button>
                  </form>
                </td>
                </td>                   
            </tr>          
            @endforeach     
        </tbody>
      </table>
@endsection
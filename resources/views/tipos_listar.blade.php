@extends('layouts.base', ["current"=>"tipos"])

@section('body')
<table class="table table-hover">
    <h1>Tipos de tarefas</h1>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>      
          </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $tip)
            <tr>
                <td>{{ $tip->id }}</td>
                <td>{{ $tip->nome }}</td>
                <td>
                  <form action = "{{ route('tipos.destroy', $tip->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('tipos.edit', $tip->id) }}">Editar</a>
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
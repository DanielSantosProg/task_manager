@extends('layouts.base', ["current"=>"tipos"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>                                 
                <td>{{ $user->sexo }}</td>                                 
                <td>{{ $user->data_nasc }}</td>                                 
                <td>{{ $user->telefone }}</td>                
            </tr>          
            @endforeach     
        </tbody>
      </table>
@endsection
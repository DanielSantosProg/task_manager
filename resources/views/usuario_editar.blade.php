@extends('layouts.base', ["current"=>"usuarios"])

@section('body')  
@php
$user= Auth::user();
@endphp  
    <form action = "{{ route('usuarios.update', $user) }}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de usuário</h1>
            <label for="name">Nome: </label>
            <input type = "text" class = "form-control" id="name" name="name" value="{{ old( 'name', $usuario->name) }}">
            <label for="email">Email: </label>
            <input type = "text" class = "form-control" id="email" name="email" value="{{ old( 'email', $usuario->email) }}">                                        
            <label for="password">Senha: </label>
            <input type = "password" class = "form-control" id="password" name="password">   
            <label for="sexo">Sexo:</label>
            <select class = "form-control" id="sexo" name="sexo">
                <option selected>Selecione aqui</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <label for="data_nasc">Data de nascimento: </label>
            <input type = "text" class = "form-control" id="data_nasc" name="data_nasc" value="{{ old( 'data_nasc', $usuario->data_nasc) }}">
            <label for="telefone">Telefone: </label>
            <input type = "text" class = "form-control" id="telefone" name="telefone" value="{{ old( 'telefone', $usuario->telefone) }}">
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection
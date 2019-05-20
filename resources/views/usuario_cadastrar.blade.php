@extends('layouts.base', ["current"=>"usuarios"])

@section('body')
    <form action = "{{route('usuarios.store')}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de usuário</h1>
            <label for="name">Nome: </label>
            <input type = "text" class = "form-control" id="name" name="name">
            <label for="email">Email: </label>
            <input type = "text" class = "form-control" id="email" name="email">
            <label for="password">Senha: </label>
            <input type = "password" class = "form-control" id="password" name="password">                             
            <label for="sexo">Sexo:</label>
            <select class = "form-control" id="sexo" name="sexo">
                <option selected>Selecione aqui</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <label for="data_nasc">Data de nascimento: </label>
            <input type = "text" class = "form-control" id="data_nasc" name="data_nasc">
            <label for="telefone">Telefone: </label>
            <input type = "text" class = "form-control" id="telefone" name="telefone">
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection
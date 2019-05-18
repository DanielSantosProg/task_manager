@extends('layouts.base', ["current"=>"tipos"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>                                 
            </tr>          
            @endforeach     
        </tbody>
      </table>
@endsection
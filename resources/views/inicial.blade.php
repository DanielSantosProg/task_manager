@extends('layouts.base', ["current"=>"principal"])

@section('body')
@php
$user = Auth::user()->id;
$tarefass = DB::table('tarefas')->where('id_usuario', $user)->get();
@endphp
    <h1>Gerenciador de tarefas</h1>
    <p>Tarefas a Fazer:</p>
    <ul class="list-group">
        @foreach ($tarefass as $task)            
            <li class="list-group-item list-group-item-primary">{{ $task->titulo }}</li>            
        @endforeach
    </ul>
@endsection
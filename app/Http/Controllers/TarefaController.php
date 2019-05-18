<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas_listar', compact('tarefas'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefa_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->id_usuario = $request->input("id_usuario");
        $tarefa->id_tipo = $request->input("id_tipo");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->tipo = $request->input("tipo");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefa_editar', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefa->titulo = $request->input("titulo");
        $tarefa->id_usuario = $request->input("id_usuario");
        $tarefa->id_tipo = $request->input("id_tipo");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->tipo = $request->input("tipo");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}

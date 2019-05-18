<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos_listar', compact('tipos'));
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
        return view('tipo_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->titulo = $request->input("titulo");
        $tipo->id_usuario = $request->input("id_usuario");
        $tipo->id_tipo = $request->input("id_tipo");
        $tipo->privacidade = $request->input("privacidade");
        $tipo->descricao = $request->input("descricao");
        $tipo->tipo = $request->input("tipo");
        $tipo->status = $request->input("status");
        $tipo->data_conclusao = $request->input("data_conclusao");
        $tipo->save();
        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        return view('tipo_editar', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        $tipo->titulo = $request->input("titulo");
        $tipo->id_usuario = $request->input("id_usuario");
        $tipo->id_tipo = $request->input("id_tipo");
        $tipo->privacidade = $request->input("privacidade");
        $tipo->descricao = $request->input("descricao");
        $tipo->tipo = $request->input("tipo");
        $tipo->status = $request->input("status");
        $tipo->data_conclusao = $request->input("data_conclusao");
        $tipo->save();
        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index');
    }
}

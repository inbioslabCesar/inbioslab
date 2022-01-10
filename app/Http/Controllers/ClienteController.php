<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('tipo');

        $clientes = Cliente::buscarpor($tipo, $buscar )->paginate(2);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'      => 'required',
            'referencia'      => 'required',
            'nombre'      => 'required',
            'apellido'    => 'required',
            'edad'        => 'required',
            'sexo'        => 'required',
            'dni'         => 'required',
            'cel'         => 'required',
        ]);
        Cliente::create([
            'codigo' => $request -> codigo,
            'referencia' => $request -> referencia,
            'nombre' => $request -> nombre,
            'apellido' => $request -> apellido,
            'edad' => $request -> edad,
            'sexo' => $request -> sexo,
            'dni' => $request -> dni,
            'cel' => $request -> cel,

        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
        *$clientes = Cliente::all($id);
        *return view('clientes.show', compact('clientes'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->codigo = $request->codigo;
        $cliente->referencia = $request->referencia;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->edad = $request->edad;
        $cliente->sexo = $request->sexo;
        $cliente->dni = $request->dni;
        $cliente->cel = $request->cel;

        $cliente->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back();

    }
}

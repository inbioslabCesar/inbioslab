<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Examen;
use Livewire\WithPagination;

class ExamenController extends Controller
{
   use WithPagination;
    public function index(Request $request, Categoria $categoria)
    {
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('tipo');
        $examens = Examen::buscarpor($tipo, $buscar)->paginate(2);
        $examen = $categoria->examens;
        return view('examens.index', compact('examens', 'examen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('examens.create', compact('categorias'));
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
            'codigo'         => 'required',
            'categoria_id'   => 'required',
            'nombre'         => 'required',
            'descripcion'    => 'required',
            'precioC'        => 'required',
            'precioP'        => 'required',

        ]);
        Examen::create([
            'codigo' => $request -> codigo,
            'categoria_id' => $request -> categoria_id,
            'nombre' => $request -> nombre,
            'descripcion' => $request -> descripcion,
            'precioC' => $request -> precioC,
            'precioP' => $request -> precioP,

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $examen = Examen::find($id);
        return view('examens.edit', compact('examen', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        $examen->codigo = $request->codigo;
        $examen->categoria_id = $request->categoria_id;
        $examen->nombre = $request->nombre;
        $examen->descripcion = $request->descripcion;
        $examen->precioC = $request->precioC;
        $examen->precioP = $request->precioP;
        $examen->save();
        return back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        $examen->delete();
        return back();

    }
}

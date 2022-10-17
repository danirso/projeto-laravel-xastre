<?php

namespace App\Http\Controllers;

use App\Models\materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = materias::latest()->paginate(5);

        return view('materias_index',compact ('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias_create');
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
            'rp'          => 'required',
            'nome'            => 'required',
            'id_materia'    => 'required'

        ]);

        $materias = new materias;

        $materias->rp = $request->rp;
        $materias->nome = $request->nome;
        $materias->id_materia = $request->id_materia;

        $materias->save();

        return redirect()->route('materias.index')->with('boa, foi','materia adicionada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(materias $materia)
    {
        return view ('materias_show',compact ('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit(materias $materia)
    {
        return view ('materias_edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materias $materias)
    {
        $request->validate([
            'rp'      =>  'required',
            'nome'        =>  'required',
            'id_materia'=>  'required'
        
        ]);


        $materias = materias::find($request->hidden_id);

        $materias->rp = $request->rp;

        $materias->nome = $request->nome;

        $materias->id_materia = $request->id_materia;


        $materias->save();

        return redirect()->route('materias.index')->with('boa,foi', 'dados da materia atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy(materias $materia)
    {
        $materia->delete();

        return redirect()->route('materias.index')->with('boa,foi', 'dados da materia deletados');
    }
}

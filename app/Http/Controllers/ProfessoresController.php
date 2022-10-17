<?php

namespace App\Http\Controllers;

use App\Models\professores;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = professores::latest()->paginate(5);

        return view('professores_index',compact ('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professores_create');
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

        $professores = new professores;

        $professores->rp = $request->rp;
        $professores->nome = $request->nome;
        $professores->id_materia = $request->id_materia;

        $professores->save();

        return redirect()->route('professores.index')->with('boa, foi','materia adicionada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function show(professores $professore)
    {
        return view ('professores_show',compact ('professore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function edit(professores $professore)
    {
        return view ('professores_edit',compact('professore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, professores $professores)
    {
        $request->validate([
            'rp'      =>  'required',
            'id_materia'        =>  'required',
            'nome'=>  'required'
        
        ]);


        $professores = professores::find($request->hidden_id);

        $professores->nome = $request->nome;

        $professores->id_materia = $request->id_materia;

        $professores->rp = $request->rp;


        $professores->save();

        return redirect()->route('professores.index')->with('boa,foi', 'dados do professor atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function destroy(professores $professore)
    {
        $professore->delete();

        return redirect()->route('professores.index')->with('boa,foi', 'dados da materia deletados');
    }
}

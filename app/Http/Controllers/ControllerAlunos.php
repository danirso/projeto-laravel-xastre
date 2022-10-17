<?php

namespace App\Http\Controllers;

use App\Models\alunos;
use Illuminate\Http\Request;

class ControllerAlunos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = alunos::latest()->paginate(5);

        return view('index',compact ('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'nome'          => 'required',
            'ra'            => 'required',
            'id_materia'    => 'required',
            'filmes'        => 'required',

        ]);

        $alunos = new alunos;

        $alunos->nome = $request->nome;
        $alunos->ra = $request->ra;
        $alunos->id_materia = $request->id_materia;
        $alunos->filmes = $request->filmes;

        $alunos->save();

        return redirect()->route('alunos.index')->with('boa, foi','aluno adicionado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show(alunos $aluno)
    {
        return view ('show',compact ('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(alunos $aluno)
    {
        return view ('edit',compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alunos $alunos)
    {
        $request->validate([
            'nome'      =>  'required',
            'ra'        =>  'required',
            'id_materia'=>  'required',
            'filmes'    =>  'required'
        
        ]);


        $alunos = alunos::find($request->hidden_id);

        $alunos->nome = $request->nome;

        $alunos->ra = $request->ra;

        $alunos->id_materia = $request->id_materia;

        $alunos->filmes = $request ->filmes;


        $alunos->save();

        return redirect()->route('alunos.index')->with('boa,foi', 'dados do aluno atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(alunos $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('boa,foi', 'dados do aluno deletados');
    }
}

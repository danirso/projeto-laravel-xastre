@extends('modelos.template')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>detalhes do aluno</b></div>
			<div class="col col-md-6">
				<a href="{{ route('alunos.index') }}" class="btn btn-primary btn-sm float-end">Ver todos</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>nome do aluno</b></label>
			<div class="col-sm-10">
				{{ $aluno->nome }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>RA do aluno</b></label>
			<div class="col-sm-10">
				{{ $aluno->ra }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>materias do aluno</b></label>
			<div class="col-sm-10">
				{{ $aluno->id_materia }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>filme favorito do aluno</b></label>
			<div class="col-sm-10">
				{{ $aluno->filmes }}
	</div>
</div>

@endsection('content')
@extends('modelos.template')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Adicionar aluno</div>
	<div class="card-body">
		<form method="post" action="{{ route('alunos.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Aluno</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">RA do aluno</label>
				<div class="col-sm-10">
					<input type="text" name="ra" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ID de uma matéria</label>
				<div class="col-sm-10">
					<input type="text" name="id_materia" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome de um filme</label>
				<div class="col-sm-10">
					<input type="text" name="filmes" class="form-control" />
				</div>
			</div>	
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Adicionar aluno" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
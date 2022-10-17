@extends('modelos.template')

@section('content')

<div class="card">
	<div class="card-header">Editar Aluno</div>
	<div class="card-body">
		<form method="post" action="{{ route('alunos.update', $aluno) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Aluno</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" value="{{ $aluno->nome }}"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">RA do aluno</label>
				<div class="col-sm-10">
					<input type="text" name="ra" class="form-control" value="{{ $aluno->ra}}"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ID de uma matéria</label>
				<div class="col-sm-10">
					<input type="text" name="id_materia" class="form-control" value="{{ $aluno->id_materia}}"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome de um filme</label>
				<div class="col-sm-10">
					<input type="text" name="filmes" class="form-control" value="{{ $aluno->filmes}}"/>
				</div>
			</div>	
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $aluno->id}}"/>
				<input type="submit" class="btn btn-primary" value="Editar aluno" />
			</div>	
		</form>
	</div>
</div>
@endsection('content')
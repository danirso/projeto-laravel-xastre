@extends('modelos.template')

@section('content')

<div class="card">
	<div class="card-header">Editar Professor</div>
	<div class="card-body">
		<form method="post" action="{{ route('professores.update', $professore) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Profoessor</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" value="{{ $professore->nome }}"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">RP do professor</label>
				<div class="col-sm-10">
					<input type="text" name="rp" class="form-control" value="{{ $professore->rp}}"/>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ID da matéria</label>
				<div class="col-sm-10">
					<input type="text" name="id_materia" class="form-control" value="{{ $professore->id_materia}}"/>
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $professore->id}}"/>
				<input type="submit" class="btn btn-primary" value="Editar professor" />
			</div>	
		</form>
	</div>
</div>
@endsection('content')
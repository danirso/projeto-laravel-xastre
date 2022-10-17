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
	<div class="card-header">Adicionar materia</div>
	<div class="card-body">
		<form method="post" action="{{ route('materias.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome da materia</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">RP do professor</label>
				<div class="col-sm-10">
					<input type="text" name="rp" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ID da materia</label>
				<div class="col-sm-10">
					<input type="text" name="id_materia" class="form-control" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Adicionar materia" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
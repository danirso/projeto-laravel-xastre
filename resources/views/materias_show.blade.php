@extends('modelos.template')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>detalhes da materia</b></div>
			<div class="col col-md-6">
				<a href="{{ route('materias.index') }}" class="btn btn-primary btn-sm float-end">Ver todos</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>nome da materia</b></label>
			<div class="col-sm-10">
				{{ $materia->nome }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>RP do professor</b></label>
			<div class="col-sm-10">
				{{ $materia->rp }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Id da materia</b></label>
			<div class="col-sm-10">
				{{ $materia->id_materia }}
			</div>
		</div>
	</div>
</div>

@endsection('content')

@extends('modelos.template')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Dados das materias</b></div>
			<div class="col col-md-6">
				<a href="{{ route('materias.create') }}" class="btn btn-success btn-sm float-end">Adicionar</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>RP</th>
				<th>nome</th>
				<th>Id materia</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->rp }}</td>
						<td>{{ $row->nome }}</td>
						<td>{{ $row->id_materia }}</td>
						<td>
							<form method="post" action="{{ route('materias.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('materias.show', $row->id) }}" class="btn btn-primary btn-sm">Detalhes</a>
								<a href="{{ route('materias.edit', $row->id) }}" class="btn btn-warning btn-sm">Editar</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Apagar" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">Nenhuma materia cadastrada</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
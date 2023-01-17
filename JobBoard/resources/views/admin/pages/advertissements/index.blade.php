@extends('admin.pages.advertissements.master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>advertissement Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('advertisements.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Type</th>
				<th>Image</th>
				<th>Description</th>
				<th>Lieu</th>
				<th>Horaire</th>
				<th>Salaire</th>
				<th>Titre</th>
				
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
					<td>{{ $row->type}}</td>
					<td><img src="{{ asset('images/' . $row->image) }}" width="75" /></td>
					
						<td>{{ $row->description}}</td>
						<td>{{ $row->lieu}}</td>
						<td>{{ $row->horaire}}</td>
						<td>{{ $row->salaire}}</td>
						<td>{{ $row->titre }}</td>
						
						<td>
							<form method="post" action="{{ route('advertisements.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('advertisements.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('advertisements.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
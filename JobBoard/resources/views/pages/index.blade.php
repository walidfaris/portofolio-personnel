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
			<div class="col col-md-6"><b>Information Data</b></div>
			
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Cv</th>
				<th>Numero</th>
				<th>Message</th>
				<th>Controle</th>
			</tr>

			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
				
                    
					
						<td>{{ $row->nom}}</td>
						
						<td>{{ $row->prenom}}</td>
						<td>{{ $row->email}}</td>
						<td class="text-center"> 
							<span class="view"> <a href="{{asset('cv/'.$row->cv )}}" target="_blank"
                            rel="noopener noreferrer"><span><i class="fa-solid fa-file" ></i></a> </span></a> 
						</span> 
					   </td>
						<td>{{ $row->numero}}</td>
						<td>{{ $row->message }}</td>
						
						<td>
							<form method="post" action="{{ route('informations.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								
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
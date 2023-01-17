@extends('admin.pages.advertissements.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>gj

@endif

<div class="card">
	<div class="card-header">Add Advertissement</div>
	<div class="card-body">
		<form method="post" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
			@csrf

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Titre</label>
				<div class="col-sm-10">
					<input type="text" name="titre" class="form-control" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Type</label>
				<div class="col-sm-10">
					<input type="text" name="type" class="form-control" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Salaire</label>
				<div class="col-sm-10">
					<input type="text" name="salaire" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
		
					<textarea name="description" id="description" cols="12" rows="3" class="form-control"></textarea>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Horaire</label> 
				<div class="col-sm-10">
					<input type="text" name="horaire" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Lieu</label> 
				<div class="col-sm-10">
					<input type="text" name="lieu" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
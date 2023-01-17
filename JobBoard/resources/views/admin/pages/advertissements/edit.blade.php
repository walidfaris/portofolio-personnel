@extends('admin.pages.advertissements.master')

@section('content')

<div class="card">
	<div class="card-header">Edit advertisements</div>
	<div class="card-body">
		<form method="post" action="{{ route('advertisements.update', $advertisement->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Titre</label>
				<div class="col-sm-10">
					<input type="text" name="titre" class="form-control" value="{{ $advertisement->titre }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Type</label>
				<div class="col-sm-10">
					<input type="text" name="type" class="form-control" value="{{ $advertisement->type }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Salaire</label>
				<div class="col-sm-10">
					<input type="text" name="salaire" class="form-control" value="{{ $advertisement->salaire}}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
	
					<textarea name="description" id="description" cols="12" rows="3" class="form-control">{{ $advertisement->description }}</textarea>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Horaire</label>
				<div class="col-sm-10">
					<input type="text" name="horaire" class="form-control" value="{{ $advertisement->horaire}}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">lieu</label>
				<div class="col-sm-10">
					<input type="text" name="lieu" class="form-control" value="{{ $advertisement->lieu }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $advertisement->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $advertisement->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $advertisement->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>


@endsection('content')
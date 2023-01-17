@extends('admin.pages.advertissements.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>advertisements Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('advertisements.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>description</b></label>
			<div class="col-sm-10">
				{{ $advertisement->description }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>horaire</b></label>
			<div class="col-sm-10">
				{{ $advertisement->horaire }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>salaire</b></label>
			<div class="col-sm-10">
				{{ $advertisement->salaire }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>titre</b></label>
			<div class="col-sm-10">
				{{ $advertisement->titre }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>lieu</b></label>
			<div class="col-sm-10">
				{{ $advertisement->lieu }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>type</b></label>
			<div class="col-sm-10">
				{{ $advertisement->type }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $advertisement->image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
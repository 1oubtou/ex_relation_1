@extends('layout.section')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Classe Details</h3>
			</div>
			<a href="{{ route('classe_edit', $classe_show->id) }}" class="btn btn-sm btn-primary align-self-center">Edit Classe</a>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Number Classe</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $classe_show->number }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $classe_show->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $classe_show->updated_at == $classe_show->created_at ? "Not Updated" : $classe_show->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
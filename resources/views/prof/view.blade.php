@extends('layout.section')
@section('prof' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Professeurs Details</h3>
			</div>
			<a href="{{ route('prof_edit', $prof_show->id) }}" class="btn btn-sm btn-primary align-self-center">Modifier Professeur</a>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Nom</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $prof_show->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Prenom</label>
				<div class="col-lg-8 fv-row">
					<span class="fw-semibold text-gray-800 fs-6">{{ $prof_show->prenom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Lage </label>
				<div class="col-lg-8 d-flex align-items-center">
					<span class="fw-bold fs-6 text-gray-800 me-2">{{ $prof_show->lage }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">N° CIN</label>
				<div class="col-lg-8">
					<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $prof_show->n_cin }}</a>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Adresse </label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $prof_show->adresse }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Telephone</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $prof_show->telephone }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Cours</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $prof_show->cour->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Classe</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $prof_show->classe->number }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $prof_show->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $prof_show->updated_at == $prof_show->created_at ? "Not Updated" : $prof_show->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
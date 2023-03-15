@extends('layout.section')
@section('etudiant' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card">
		<div class="card-header">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Etudiant Details</h3>
			</div>
			<a href="{{ route('etudiant_edit', $etudiant_show->id) }}" class="btn btn-sm btn-primary align-self-center">Modifier Etudiant</a>
		</div>
		<div class="card-body p-9">
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Nom</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $etudiant_show->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Prenom</label>
				<div class="col-lg-8 fv-row">
					<span class="fw-semibold text-gray-800 fs-6">{{ $etudiant_show->prenom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Lage </label>
				<div class="col-lg-8 d-flex align-items-center">
					<span class="fw-bold fs-6 text-gray-800 me-2">{{ $etudiant_show->lage }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Adresse </label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $etudiant_show->adresse }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Telephone</label>
				<div class="col-lg-8">
					<span class="fw-bold fs-6 text-gray-800">{{ $etudiant_show->telephone }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Prof</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $etudiant_show->prof->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Cours</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $etudiant_show->cour->nom }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Classe</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $etudiant_show->classe->number }}</span>
				</div>
			</div>
			<div class="row mb-7">
				<label class="col-lg-4 fw-semibold text-muted">Date Create</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $etudiant_show->created_at->toDateString() }}</span>
				</div>
			</div>
			<div class="row">
				<label class="col-lg-4 fw-semibold text-muted">Date Update</label>
				<div class="col-lg-8">
					<span class="fw-semibold fs-6 text-gray-800">{{ $etudiant_show->updated_at == $etudiant_show->created_at ? "Not Updated" : $etudiant_show->updated_at->toDateString() }}</span>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
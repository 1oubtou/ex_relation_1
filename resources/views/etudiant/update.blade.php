@extends('layout.section')
@section('etudiant' , 'active')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card card-flush">
		<div class="card-body">
			<div class="pb-3" >
				<h2>Ajouter Prof</h2>
			</div>
			<form action="{{ route('etudiant_update', $etudiant_edit->id ) }}" method="POST">
				@csrf
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Nom</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="nom" value="{{ $etudiant_edit->nom }}" required />
							@error('nom')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Prenom</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="prenom" value="{{ $etudiant_edit->prenom }}" required />
							@error('prenom')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Lage</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="lage" value="{{ $etudiant_edit->lage }}" required />
							@error('lage')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Telephone</span>
							</label>
							<input type="tel" class="form-control form-control-solid" name="telephone" value="{{ $etudiant_edit->telephone }}" required />
							@error('telephone')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Adresse</span>
							</label>
							<input type="text" class="form-control form-control-solid" name="adresse" value="{{ $etudiant_edit->adresse }}" required />
							@error('adresse')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Prof</span>
							</label>
							<div class="w-100">
								<select class="form-select form-select-solid" name="prof_id" required>
									<option hidden>Select Prof...</option>
									@foreach ( $prof as $profs )
										<option @if ($etudiant_edit->prof_id == $profs->id)
											selected
										@endif value="{{ $profs->id }}" >{{ $profs->nom }}</option>
									@endforeach
								</select>
								@error('prof_id')
									<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Cours</span>
							</label>
							<div class="w-100">
								<select class="form-select form-select-solid" name="cour_id" required >
									<option hidden>Select Course...</option>
									@foreach ( $cour as $coure )
										<option @if ($etudiant_edit->cour_id == $coure->id)
											selected
										@endif value="{{ $coure->id }}" >{{ $coure->nom }}</option>
									@endforeach
								</select>
								@error('cour_id')
									<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="col">
						<div class="fv-row mb-7">
							<label class="fs-6 fw-semibold form-label mt-3">
								<span class="required">Classe</span>
							</label>
							<div class="w-100">
								<select class="form-select form-select-solid" name="classe_id" required >
									<option hidden>Select Classe...</option>
									@foreach ( $clase as $clases )
										<option @if ($etudiant_edit->classe_id == $clases->id)
											selected
										@endif value="{{ $clases->id }}" >{{ $clases->number }}</option>
									@endforeach
								</select>
								@error('classe_id')
									<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
					
					<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
						<span class="indicator-label">Save</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
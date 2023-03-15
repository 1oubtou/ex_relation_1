@extends('layout.section')
@section('section')

<div class="col-xl-11 m-auto">
	<div class="card-body p-8 bg-white rounded border border-secondary">
		<div class="d-flex justify-content-between mb-10">
			<div class="card-title m-0">
				<h3 class="fw-bold m-0">Numero Classe : {{ $classe->number }}</h3>
			</div>
			<a href="{{ route('classe_index') }}" class="btn btn-sm btn-primary align-self-center">List Classe</a>
		</div>
		@if ($etudiant->isEmpty())
			<h3 class="text-center text-danger">Desole il ny a pas etudiant dans cette classe.</h3>
		@else
			<table class="table table-row-dashed mx-auto w-50">
				<!--begin::Table head-->
				<thead>
					<!--begin::Table row-->
					<tr class="text-center text-gray-400 fw-bold">
						<th class="min-w-100px">#</th>
						<th class="min-w-100px">Nom</th>
						<th class="min-w-100px">Prenom</th>
					</tr>
					<!--end::Table row-->
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody class="fw-semibold text-gray-600 text-center">
					@foreach ( $etudiant as $key => $etu )
						<tr>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary fw-bold">{{ ++$key }}</a>
							</td>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $etu->nom }}</a>
							</td>
							<td>
								<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $etu->prenom }}</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
</div>

@endsection
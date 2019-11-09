@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

	@include('partials.success')

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header secondary-color waves-effect text-white">
					<h5>Add New Course</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('course.store') }}" method="POST" class="form">
						@csrf
						<div class="form-group">
							<label>Name:</label>
							<div class="d-inline float-right text-secondary">
								<div class="custom-control custom-switch d-inline">
									<input type="checkbox" name="visible" class="custom-control-input success" id="visibilitySwitch" @if(old('visible')) checked @endif>
									<label class="custom-control-label" for="visibilitySwitch">Publish</label>
								</div>
							</div>
							<input type="text" name="name" class="form-control rounded-0 {{ errorClass('name') }}" value="{{ old('name') }}">
							@invalid('name')
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control rounded-0" id="" cols="30" rows="10">{{ old('description') }}</textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary rounded-0 waves-effect float-right"  data-toggle="modal" data-target="#modalConfirmDelete">Add Course</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<table class="table table-hover">
						<!-- Table head -->
						<thead class="secondary-color lighten-4 text-white">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Published</th>
								<th></th>
							</tr>
						</thead>
						<!-- Table head -->

						<!-- Table body -->
						<tbody>

							@forelse ( $courses as $course )
							@if ( $loop->first )
							@php
							$count = 1;
							@endphp
							@endif
							<tr>
								<th scope="row">{{ $count }}</th>
								<td>
									<a href="{{ route('viewcourse', $course->id) }}" data-toggle="tooltip" title="View Chapters">{{ $course->name }}</a>
								</td>
								<td>@if ($course->visible) Yes @else No @endif</td>
								<td>
									<a data-toggle="modal" data-target="#courseModal-{{ $course->id }}" class="btn btn-link py-0" >
										<i class="fa fa-pen text-secondary" data-toggle="tooltip" title="Edit"></i>
									</a>

									<form action="{{ route('course.destroy', $course->id) }}" method="POST" class="form d-inline">
										@csrf
										@method('delete')
										<button type="submit" onClick="return confirm('Connfirm to delete?');" class="btn btn-link p-0" data-toggle="tooltip" title="Trash"><i class="far fa-trash-alt text-danger"></i></button>
									</form>
								</td>
							</tr>
							@php
							$count++;
							@endphp
							@empty
							<tr>
								<td colspan="4" class="text-center font-italic">No Courses found !!</td>
							</tr>
							@endforelse
						</tbody>
						<!-- Table body -->
					</table>
					<!-- Table  -->
				</div>
			</div>
		</div>
	</div>
</div>

@foreach($courses as $course)
<div class="modal fade" id="courseModal-{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<form action="{{ route('course.update', $course->id) }}" class="form" method="POST">
		@csrf
		@method('put')
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Edit Course</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Name:</label>
						<div class="d-inline float-right text-secondary">
							<div class="custom-control custom-switch d-inline">
								<input type="checkbox" name="visible" class="custom-control-input success" id="visibilitySwitch{{ $course->id }}" @if($course->visible) checked @endif>
								<label class="custom-control-label" for="visibilitySwitch{{ $course->id }}">Publish</label>
							</div>
						</div>
						<input type="text" name="name" class="form-control rounded-0" value="{{ $course->name }}">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control rounded-0" id="" cols="30" rows="10">{{ $course->description }}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-sm">Save changes</button>
				</div>
			</div>
		</div>
	</form>
</div>

{{-- Modal: modalConfirmDelete --}}
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
	<!--Content-->
	<div class="modal-content text-center">
		<div class="modal-header d-flex justify-content-center">
			<p class="heading">Are you sure?</p>
		</div>
		<div class="modal-body">

			<i class="fas fa-times fa-4x animated rotateIn"></i>

		</div>
		<div class="modal-footer flex-center">
			<a href="" class="btn  btn-outline-danger">Yes</a>
			<a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
		</div>
	</div>
	{{-- /.Content --}}
</div>
</div>
{{-- Modal: modalConfirmDelete --}}

@endforeach
@endsection

@push('scripts')
<script>
</script>
@endpush
@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
	
	@include('partials.success')

	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header secondary-color waves-effect text-white">
					<h5>Add New Chapter</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('chapter.store') }}" method="POST" class="form">
						@csrf
						<div class="form-group">
							<label>Title:</label>
							<input type="text" name="title" class="form-control rounded-0 {{ errorClass('title') }}" value="{{ old('title') }}">
							@invalid('title')
						</div>
						<div class="form-group">
							<label>Weight</label>
							<input type="number" name="weight" class="form-control rounded-0 {{ errorClass('weight') }}" value="{{ old('weight') }}" min="1">
							@invalid('weight')
						</div>
						<div class="form-group">
							<label>Course</label>
							<select name="course_id" id="" class="form-control rounded-0 {{ errorClass('course_id') }}">
								@forelse ($courses as $course)
								<option value="{{ $course->id }}">{{ $course->name }}</option>
								@empty
								<option disabled selected>No Course Available</option>
								@endforelse
							</select>
							@invalid('course_id')
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary rounded-0 waves-effect float-right">Add Chapter</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header secondary-color white-text p-1">
					<div class="form-group text-center m-1 mt-0">
						<label>Course: </label>
						<select id="filterCourse" class="form-control form-control d-inline w-25">
							<option value=" ">All</option>
							@foreach($courses as $course)
							<option value="{{ $course->name }}">{{ $course->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="card-body">

					<table id="chaptersTable" class="table table-hover">
						<!-- Table head -->
						<thead class="secondary-color lighten-4 text-white">
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Weight</th>
								<th>Course</th>
								<th data-orderable="false"></th>
							</tr>
						</thead>
						<!-- Table head -->

						<!-- Table body -->
						<tbody>

							@forelse ( $chapters as $chapter )
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td><a href="{{ route('chapter.show', $chapter->id) }}">{{ $chapter->title }}</a></td>
								<td>{{ $chapter->weight }}</td>
								<td>{{ $chapter->course->name }}</td>
								<td>
									<a data-toggle="modal" data-target="#chapterModal-{{ $chapter->id }}" class="btn btn-link"><i class="fa fa-pen text-secondary"></i></a>
									<a href="" class="btn btn-link"><i class="fa fa-trash-alt text-danger"></i></a>
								</td>
							</tr>
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

@forelse($chapters as $chapter)
<div class="modal fade" id="chapterModal-{{ $chapter->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<form action="{{ route('chapter.update', $chapter->id) }}" class="form" method="POST">
		@csrf
		@method('PUT')
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Edit Chapter</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Title:</label>
						<input type="text" name="title" class="form-control rounded-0" value="{{ $chapter->title }}">
					</div>
					<div class="form-group">
						<label>Weight</label>
						<input type="number" name="weight" class="form-control rounded-0" value="{{ $chapter->weight }}" min="1">
					</div>
					<div class="form-group">
						<label>Course</label>
						<select name="course_id" id="" class="form-control">
							@forelse ($courses as $course)
							<option value="{{ $course->id }}" @if ($course->id == $chapter->id) selected @endif>{{ $course->name }}</option>
							@empty
							<option disabled selected>No Course Available</option>
							@endforelse
						</select>
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
@endforeach

@push('scripts')
<script>
	$(document).ready(function () {
		var chaptersTable = $('#chaptersTable').dataTable({"bFilter": true,});
		$('.dataTables_length').addClass('bs-select');

		$('#filterCourse').on('change',function(){
			console.log('triggered');
			var selectedValue = $(this).val();
			chaptersTable.fnFilter("^"+selectedValue+"$", 3, true); //Exact value, column, reg
			// chaptersTable.search(selectedValue, 3, true).draw();
		});

	});
</script>
@endpush
@endsection
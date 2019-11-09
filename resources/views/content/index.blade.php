@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
	
	@include('partials.success')

	<div class="card">
		<div class="card-header secondary-color white-text p-2 pr-3">
			<div class="form-group text-center m-1 mt-0 d-inline">
				<label>Course: </label>
				<select id="filterCourse" class="form-control form-control d-inline w-25">
					<option value=" ">All</option>
					{{-- @foreach($courses as $course)
					<option value="{{ $course->name }}">{{ $course->name }}</option>
					@endforeach --}}
				</select>
			</div>
			<a href="{{ route('content.create') }}" class="btn btn-success m-0 p-2 float-right" style="border-radius: 50%;"><i class="fa fa-plus fa-lg"></i></a>
		</div>
		<div class="card-body">

			<table id="chaptersTable" class="table table-hover table-sm">
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

					@forelse ( $contents as $content )
					<tr>
						<th scope="row">{{ $loop->iteration }}</th>
						<td><a href="{{ route('$content.show', $content->id) }}">{{ $content->title }}</a></td>
						<td>{{ $content->weight }}</td>
						<td>{{ $content->course->name }}</td>
						<td>
							<a data-toggle="modal" data-target="#chapterModal-{{ $content->id }}" class="btn btn-link py-0"><i class="fa fa-pen text-secondary"></i></a>

							<form action="{{ route('chapter.destroy', $content->id) }}" method="POST" class="form d-inline">
								@csrf
								@method('delete')
								<button type="submit" onClick="return confirm('Connfirm to delete?');" class="btn btn-link p-0" data-toggle="tooltip" title="Trash"><i class="far fa-trash-alt text-danger"></i></button>
							</form>

						</td>
					</tr>
					@empty
					<tr>
						<td colspan="4" class="text-center font-italic">No Chapters found !!</td>
					</tr>
					@endforelse
				</tbody>
				<!-- Table body -->
			</table>
			<!-- Table  -->
		</div>

	</div>
</div>

@push('scripts')
<script>
	$(document).ready(function () {
		var chaptersTable = $('#chaptersTable').dataTable({"bFilter": true,});
		/*$('.dataTables_length').addClass('bs-select');

		$('#filterCourse').on('change',function(){
			console.log('Filtering by course');
			var selectedValue = $(this).val();
			chaptersTable.fnFilter("^"+selectedValue+"$", 3, true); //Exact value, column, reg
			// chaptersTable.search(selectedValue, 3, true).draw();
		});

		@if (isset($selectCourse))
		console.log('Course ID set {{ $selectCourse->name }}');
		var selectedValue = '{{ $selectCourse->name }}';
		console.log('selected Value: ' + selectedValue);
		$('#filterCourse').find('option[value="'+ selectedValue+'"]').attr("selected",true);
		chaptersTable.fnFilter("^"+selectedValue+"$", 3, true);
		@endif*/
	});
</script>
@endpush
@endsection
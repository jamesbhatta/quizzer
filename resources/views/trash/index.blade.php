@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

	@include('partials.heading')
	@include('partials.alerts')
	
	<div class="row">
		<div class="col-md-5">
			<div class="card">
				<div class="card-header purple-gradient white-text">Courses</div>
				<div class="card-body">
					<table class="table table-hover">
						<thead class="purple-gradient white-text">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@forelse($courses as $course)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $course->name }}</td>
								<td>
									<form action="{{ route('course.untrash', $course->id) }}" method="POST" class="d-inline">
										@csrf
										<button type="submit" class="btn btn-link m-0 p-0" data-toggle="tooltip" title="Untrash">
											<i class="fa fa-trash-restore text-success mr-4"></i>
										</button>
									</form>
									<form action="{{ route('course.harddelete', $course->id) }}" method="POST" class="d-inline">
										@csrf
										@method('delete')
										<button type="submit" class="btn btn-link m-0 p-0" data-toggle="tooltip" title="Delete">
											<i class="fa fa-backspace text-warning"></i>
										</button>
									</form>

								</td>
							</tr>
							@empty
							<tr>
								<td colspan="3">No Courses in trash.</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
			{{-- End of Course card --}}
		</div>

		<div class="col-md-7">
			<div class="card">
				<div class="card-header aqua-gradient white-text">Chapters</div>
				<div class="card-body">
					<table class="table table-hover table-sm">
						<thead class="aqua-gradient white-text">
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Course</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@forelse($chapters as $chapter)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $chapter->title }}</td>
								<td>{{ $chapter->course->name }}</td>
								<td>
									<form action="{{ route('chapter.untrash', $chapter->id) }}" method="POST" class="d-inline">
										@csrf
										<button type="submit" class="btn btn-link m-0 p-0" data-toggle="tooltip" title="Untrash">
											<i class="fa fa-trash-restore text-success mr-4"></i>
										</button>
									</form>
									<form action="{{ route('chapter.harddelete', $chapter->id) }}" method="POST" class="d-inline">
										@csrf
										@method('delete')
										<button type="submit" class="btn btn-link m-0 p-0" data-toggle="tooltip" title="Delete">
											<i class="fa fa-backspace text-warning"></i>
										</button>
									</form>
								</td>
							</tr>
							@empty
							<tr>
								<td colspan="3">No Chapters in trash.</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
			{{-- End of Course card --}}
		</div>

	</div>
	{{-- End of row --}}
</div>

@endsection
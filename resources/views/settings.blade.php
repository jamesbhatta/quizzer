@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

	@include('partials.alerts')

	<div class="card rounded-0 w-50">
		<div class="card-header rounded-0 secondary-color waves-effect text-white">
			<h5>App Settings</h5>
		</div>
		<div class="card-body">
			<form action="{{ route('settings') }}" method="POST" class="form">
				@csrf
				<div class="form-group">
					<label>Application Name</label>
					<input type="text" name="app_name" class="form-control rounded-0" value="{{ old('app_names', $settings->app_name) }}">
				</div>
				<div class="form-group">
					<label>Marks Per Question</label>
					<input type="number" name="marks_per_question" class="form-control rounded-0 w-50" value="{{ old('marks_per_question', $settings->marks_per_question) }}">
				</div>
				<div class="form-group">
					<label>Negative Marks Per Question</label>
					<input type="number" step="0.01" name="negative_mark_per_question" class="form-control rounded-0 w-50" value="{{ old('negative_mark_per_question', $settings->negative_mark_per_question) }}">
					<small class="form-text text-muted">Set to zero for no negative marking</small>
				</div>
				<div class="form-group">
					<label>Exam Duration</label>
					<input type="number" name="exam_duration" class="form-control rounded-0 w-50" value="{{ old('exam_duration', ($settings->exam_duration / 60) ) }}">
					<small class="text-muted">In minutes</small>
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-lg rounded-0">Save</button>
				</div>
			</form>
		</div>
	</div>

</div>
@endsection
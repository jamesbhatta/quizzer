@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

	<div class="card mb-4">
		<div class="card-header bg-secondary white-text">
			<h4 class="h4 d-inline align-middle">{{ $chapter->course->name }} <i class="fa fa-angle-double-right"></i> {{ $chapter->title }}</h4>
			<button class="btn btn-success" id="addQuestionBtn">Add Questions</button>
		</div>
	</div>

	@include('partials.success')

	{{-- New Question Card --}}
	<div class="card mb-4" id="addQuestionCard" style="display:{{ $errors->any() ? '' : 'none' }};">
		<div class="card-header secondary-color text-center waves-effect text-white">
			<h5>Add New Question</h5>
		</div>
		<div class="card-body">

			{{-- Display error for Correct Answer selection --}}
			@if ($errors->has('is_correct'))
			<div class="alert danger-color  text-white alert-dismissible fade show z-depth-1" role="alert">
				{{ $errors->first('is_correct') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" class="text-white">&times;</span>
				</button>
			</div>
			@endif

			<form action="{{ route('questions.store') }}" method="POST" class="form">
				@csrf
				<input type="number" name="course_id" value="{{ $chapter->course->id }}" hidden="">
				<input type="number" name="chapter_id" value="{{ $chapter->id }}" hidden>
				<div class="form-group">
					<label>Question:</label>
					<input type="text" name="text" class="form-control rounded-0 {{ errorClass('text') }}" value="{{ old('text') }}">
					@invalid('text')
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Option One</label>
							<span class="custom-control custom-radio float-right">
								<input type="radio" name="is_correct" value="1" class="custom-control-input" id="radOptOne">
								<label class="custom-control-label text-default" for="radOptOne">Correct</label>
							</span>
							<input type="text" name="option_one" class="form-control {{ errorClass('option_one') }}" value="{{ old('option_one') }}">
							@invalid('option_one')
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Option Two</label>
							<span class="custom-control custom-radio float-right">
								<input type="radio" name="is_correct" value="2" class="custom-control-input" id="radOptTwo">
								<label class="custom-control-label text-default" for="radOptTwo">Correct</label>
							</span>
							<input type="text" name="option_two" class="form-control {{ errorClass('option_two') }}" value="{{ old('option_two') }}">
							@invalid('option_two')
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Option Three</label>
							<span class="custom-control custom-radio float-right">
								<input type="radio" name="is_correct" value="3" class="custom-control-input" id="radOptThree">
								<label class="custom-control-label text-default" for="radOptThree">Correct</label>
							</span>
							<input type="text" name="option_three" class="form-control {{ errorClass('option_three') }}" value="{{ old('option_three') }}">
							@invalid('option_three')
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Option Four</label>
							<span class="custom-control custom-radio float-right">
								<input type="radio" name="is_correct" value="4" class="custom-control-input" id="radOptFour">
								<label class="custom-control-label text-default" for="radOptFour">Correct</label>
							</span>
							<input type="text" name="option_four" class="form-control {{ errorClass('option_four') }}" value="{{ old('option_four') }}">
							@invalid('option_four')
						</div>
					</div>
				</div>
				{{-- End of form row --}}

				<div class="form-group">
					<button type="submit" class="btn btn-secondary rounded-0 waves-effect float-right">Add Chapter</button>
					<button type="reset" class="btn btn-danger rounded-0 float-right">Clear</button>
				</div>
			</form>
		</div>
	</div>
	{{-- End of New Question Card --}}

	<div class="card">
		<div class="card-body">
			<h3 class="h3-responsive border-bottom border-secondary">Questions</h3>

			<table class="table table-hover table-borderless">
				<tbody>
					@forelse($questions as $question)
					<tr>
						<td>
							<p class="">
								<div class="font-weight-bolder mdb-color-text">
									{{ $loop->iteration }}) {{ $question->text }}
								</div>
								<div class="font-weight-bolder">
									<ol type="a" class="row">
										@foreach($question->options as $option)
										<li class="col-md-6 grey-text">
											<span class="mdb-color-text {{ $option->is_correct ? 'text-success' : ''}}">
												{{ $option->answer }}
											</span>
										</li>
										@endforeach
									</ol>
								</div>
							</p>
						</td>
						<td>
							<a href="{{ route('questions.destroy', $question->id) }}" class="btn btn-link">
								<i class="fa fa-pen text-secondary" data-toggle="tooltip" title="Edit"></i>
							</a> 
							<form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="d-inline">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-link p-0" data-toggle="tooltip" title="Remove">
									<i class="far fa-times-circle text-danger"></i>
								</button>
							</form>
						</td>
					</tr>

					@empty
					No Records
					@endforelse
				</tbody>
			</table>

			<div class="paginate-center">
				{{ $questions->links() }}
			</div>

		</div>
	</div>
</div>

@push('scripts')
<script>
	$(document).ready(function () {

		$('#addQuestionBtn').on('click',function(){
			$('#addQuestionCard').toggle();
		});

	});
</script>
@endpush
@endsection
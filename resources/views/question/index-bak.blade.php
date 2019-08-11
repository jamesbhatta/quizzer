{{-- @extends('layouts.app')

@section('content')
<style>
	.select2-container--default
	.select2-selection--single{
		border: 1px solid #ced4da;
		outline: none;
		border-radius: 0;
		height: auto!important;
		/*height: 68px;*/
		width: 100%;
	}
	.select2-container--default
	.select2-selection--single
	.select2-selection__rendered {
		color: #444;
		line-height: 32px;
	}
	.select2-container .select2-selection--single .select2-selection__rendered {
		display: block;
		/*padding: 3px 10px;*/
		padding: 0.275rem 0.75rem;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
	.select2-container--default
	.select2-selection--single
	.select2-selection__arrow{
		height: 32px;
		position: absolute;
		top: 3px;
		right: 5px;
		width: 20px;
	}
</style>
<div class="container-fluid mt-5">
	
	@include('partials.success')

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header secondary-color waves-effect text-white">
					<h5>Add New Question</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('questions.store') }}" method="POST" class="form">
						@csrf
						<div class="form-group">
							<label>Question:</label>
							<input type="text" name="text" class="form-control rounded-0 {{ errorClass('text') }}" value="{{ old('text') }}">
							@invalid('text')
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Course</label>
									<select name="course_id" id="course" class="form-control rounded-0 {{ errorClass('course_id') }}">
										@forelse ($courses as $course)
										<option value="{{ $course->id }}">{{ $course->name }}</option>
										@empty
										<option disabled selected>No Course Available</option>
										@endforelse
									</select>
									@invalid('course_id')
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Chapter</label>
									<select name="chapter_id" id="chapter" class="form-control rounded-0 {{ errorClass('chapter_id') }}">
									</select>
									@invalid('chapter_id')
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Option One</label>
									<input type="text" name="answer" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Option One</label>
									<input type="text" name="answer" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Option One</label>
									<input type="text" name="answer" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Option One</label>
									<input type="text" name="answer" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-secondary rounded-0 waves-effect float-right">Add Chapter</button>
						</div>
					</form>
				</div>
			</div>
			{{-- End of New Question Card --}}
		</div>
		<div class="col-md-8"></div>
	</div>
</div>

@push('scripts')
<script>
	$(document).ready(function() {
		
		$('#chapter').select2({
			placeholder: 'Select'
		});

		$('#course').click(function (){
			console.log('clicked');
			$('#chapter').select2({
				placeholder: 'Select',
				ajax: {
					url: '/api/get_chapters_by_course/' + $('#course').val(),
					processResults: function (data) {
						return {
							results: data.item.map(function (item) {
								return {
									id: item.id,
									text: item.title
								};
							})
						};
					}
				}
			});
		});
		
	});
</script>
@endpush
@endsection --}}
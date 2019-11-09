@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
	
	@include('partials.success')
	
	<div class="card">
		<div class="card-header bg-secondary white-text">
			Add Content : {{ $chapter->title }}
		</div>
		<div class="card-body">
			<form action="{{ route('content.store') }}" class="form" method="post">
				@csrf
				<input type="hidden" name="chapter_id" value="{{ $chapter->id }}">
				<div class="form-group">
					<label for="">Content</label>
					<textarea name="content" id="content-ckeditor" cols="30" rows="10" class="form-control rounded-0">{{ old('content') }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Excerpt</label>
					<textarea name="excerpt" id="" cols="30" rows="10" class="form-control rounded-0">{{ old('excerpt') }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-secondary rounded-0 waves-effect float-right">Save</button>
					<button type="reset" class="btn btn-danger rounded-0 float-right">Clear</button>
				</div>
			</form>
		</div>
	</div>
</div>
@push('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'content-ckeditor' );
</script>
@endpush
@endsection
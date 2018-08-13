@extends('admin.common.main')
@section('content')
@section('title', 'Add Tag')
@section('content-title', 'Add Tag')


<div class="container">
<div class="columns">
	<div class="column is-8 is-offset-1 is-mobile is-8-mobile is-offset-2-mobile">
		<form action="{{ route('admin.tag.store') }}" id="form-submit" method="POST">
			{{ csrf_field() }}
		
		<div class="field">
			<div class="control">
				<label for="title">Tag Name</label>
				<input type="text" class="input" name="tag_name">
			</div>
		</div>
		<button type="submit" class="button is-primary">Add Tag</button>
	</form>
	</div>

</div>
</div>



@endsection
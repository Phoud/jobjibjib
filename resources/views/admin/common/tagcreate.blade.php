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
	<table class="table is-fullwidth">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tag Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->tag_name }}</td>
				<td>
					<a class="button is-primary" href="{{ route('admin.tag.edit', $tag->id) }}">Edit</a>
					<form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
						{{ csrf_field() }}
					<button class="button is-danger" onclick="return confirmDelete()" type="submit">Delete</button>
					<input type="hidden" name="_method" value="delete" />
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	
</div>
</div>

<script>
	function confirmDelete(){
		var result = confirm('Are you sure you want to delete?');
	if(result){
		return true;
	}else{
		return false;
	}
	}
	
</script>

@endsection
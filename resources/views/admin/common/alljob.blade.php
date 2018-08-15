@extends('admin.common.main')
@section('content')
@section('title', 'All Job')
@section('content-title', 'All Job')

<div class="container">
	<div class="columns">
		<div class="column is-8 is-offset-1 is-mobile is-8-mobile is-offset-2-mobile">
			<table class="table is-fullwidth is-primary">
				<thead>
					<tr>
						<th>ID</th>
						<th>Job Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($jobs as $job)
					<tr>
						<td>{{ $job->id }}</td>
						<td>{{ $job->job_name }}</td>
						<td>
							<a class="button is-primary" href="{{ route('admin.job.edit', $job->id) }}">Edit</a>
							<form action="{{ route('admin.job.delete', $job->id) }}" method="post">
								{{ csrf_field() }}
							<button class="button is-danger" type="submit">Delete</button>
							<input type="hidden" name="_method" value="delete">
						</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
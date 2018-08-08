@extends('common.main')

@section('content')

<div class="container is-mobile">
	<h2 class="title m-t-15">Contact Us</h2>
	<div class="columns">
		<div class="column is-8">
			<div class="field">
				<div class="control">
					<label for="name">Name</label>
					<input type="text" class="input" name="name">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<label for="email">Email</label>
					<input type="email" class="input" name="email">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<label for="subjecct">Subject</label>
					<input type="text" class="input" name="subject">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<label for="subjecct">Message</label>
					<textarea type="text" class="textarea" name="message"></textarea>
				</div>
			</div>
			<a href="" class="button is-primary">Submit</a>
		</div>
		<div class="column is-4">
			<div class="box">
				<article class="media">
				<div class="media-content">
					<div class="content">
						<h2>Contact Information</h2>
						<p class="subtitle"><span class="icon"><i class="fa fa-phone"></i></span> 020 5584875</p>
						<p class="subtitle"><span class="icon"><i class="fa fa-envelope"></i></span> example@example.com</p>
					</div>
					<hr>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJobjibjib.la%2F&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1914454298813450" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				</article>
			</div>
		</div>
	</div>
</div>



@endsection
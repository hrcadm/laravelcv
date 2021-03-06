@extends('layouts.app')

@section('content')

<div class="container-fluid" id="accessResponseContainer">
	{{-- Div for status messages after CRUD operations --}}
	@if (Session::has('message') == 'success')
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="alert alert-info" id="accessResponseAlert">
					<p>
						Thank you for your interest! <br> <br>
						I have e-mailed you with your login details. <br>
						You may now close this window and check your inbox (and spam folder) and follow instructions. <br> <br>
						Regards, <br>
						Hrvoje Zubcic
					</p>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	@elseif (Session::has('message') == 'failure')
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="alert alert-danger" id="accessResponseAlert">
					<p>
						Thank you for you interest! <br> <br>
						Unfortunately, something went wrong on my side, my sincere apologies! <br>
						Please, <a href="mailto:hrcamnlz@gmail.com?subject=Access Request Error">contact me</a> so that I can handle this as soon as possible. <br> <br>
						Regards, <br>
						Hrvoje Zubcic
					</p>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	@endif
</div>

@endsection
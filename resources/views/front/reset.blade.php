@extends('front.template')

@section('content')
<div class="container">
	<div class="panel panel-default col-lg-7">
		<div class="panel-body ">

			@if(session()->has('error'))
			@include('partials/error', ['type' => 'danger', 'message' => session('error')])
			@endif	
			<hr>	
			<h2 class="intro-text text-center">{{ trans('front/password.title-reset') }}</h2>
			<hr>
			<p>{{ trans('front/password.reset-info') }}</p>		

			{!! Form::open(['url' => 'password/reset', 'method' => 'post', 'role' => 'form']) !!}	

			<div class="row">

				{!! Form::hidden('token', $token) !!}
				{!! Form::control('email', 6, 'email', $errors, trans('front/password.email')) !!}
				{!! Form::control('password', 6, 'password', $errors, trans('front/password.password'), null, [trans('front/password.warning'), trans('front/password.warning-password')]) !!}
				{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/password.confirm-password')) !!}
				{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}

			</div>

			{!! Form::close() !!}
		</div>
		
	</div>
	@include('front.sidebarr.team_result')
</div>
@stop
@extends('layout.main')

@section('content')
Create Page.
	<!-- <pre>{{ print_r($errors) }}</pre> -->

	<form action = "{{URL::route('account-create')}}" method = "post">
	
	<div class="field">
	//check if input email is available
	
		Email: <input type = "text" name="email" {{(Input::old('email')) ? 'value="'.e(Input::old('email')).'"': ''}}>
		@if ($errors->has('email'))
			{{$errors->first('email')}}
		@endif
	</div>

	<div class="field">
		Username: <input type = "text" name="username"{{(Input::old('username')) ? 'value="'.e(Input::old('username')).'"': ''}}>
		@if ($errors->has('username'))
			{{$errors->first('username')}}
		@endif
	</div>

	<div class="field">
		Password: <input type = "password" name="password">
		@if ($errors->has('password'))
			{{$errors->first('password')}}
		@endif
	</div>

	<div class="field">
		Password again: <input type = "password" name="password_again">
		@if ($errors->has('password_again'))
			{{$errors->first('password_again')}}
		@endif
	</div>

	<input type="submit" value = "Create account">
	{{Form::token()}}
	</form>
@stop
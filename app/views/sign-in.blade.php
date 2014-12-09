@extends('layout.main')

@section('content')
<form action="{{URL::route('sign-in')}}" method="post">
	<div class="field">
	Username:<input type="text" name="username" {{(Input::old('username')) ? 'value="'.(Input::old('username')).'"': ''}}></div>
	@if ($errors->has('username'))
		{{$errors->first('username')}}
	@endif
	<div class="field">
	Password:<input type="password" name="password"></div>
	@if ($errors->has('password'))
		{{$errors->first('password')}}
	@endif
	<input type="submit" value="Sign In">
	{{Form::token()}}
</form>
@stop
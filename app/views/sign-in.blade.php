@extends('layout.main')

@section('content')

   	<title>Sign in...</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    

    <!-- Custom CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link type="text/css" href="/css/fontface.css?v=20141007" rel="stylesheet" media="screen" />
    <link type="text/css" href="/css/mobile-portrait.css?v=20141007" rel="stylesheet" media="screen" />
    <link type="text/css" href="/css/mobile-landscape.css?v=20141007" rel="stylesheet" media="screen and (min-width: 480px)" />
    <link type="text/css" href="/css/tablet.css?v=20141007" rel="stylesheet" media="screen and (min-width: 700px)" />     
    <link type="text/css" href="/css/desktop.css?v=20141008" rel="stylesheet" media="screen and (min-width: 960px)" /> 
    <link type="text/css" href="/css/all-site-global.css?v=20141007" rel="stylesheet" media="screen" /> 
    <link type="text/css" href="/css/new_snow.css?v=5" rel="stylesheet" media="screen" />  
	<form action="{{URL::route('sign-in')}}" method="post">
		




    <div class="container">
    	<form action="{{URL::route('sign-in')}}" method="post">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <p>Fill in the details below to sign up for your free Thriftswap account!</p>
	                <form name="sentMessage" id="contactForm" action = "{{URL::route('account-create')}}" method = "post">
	                    <div class="row control-group">
	                        <div class="form-group col-xs-12 floating-label-form-group controls">
	                            <label>Username</label>
	                            <input type="text" class="form-control" placeholder="Username" id="Uname" required data-validation-required-message="Please enter your name." name="username"{{(Input::old('username')) ? 'value="'.e(Input::old('username')).'"': ''}}>
	                                @if ($errors->has('username'))
	                                    {{$errors->first('username')}}
	                                @endif
	                            <p class="help-block text-danger"></p>
	                        </div>
	                    </div>



	                    <div class="row control-group">
	                        <div class="form-group col-xs-12 floating-label-form-group controls">
	                            <label>Password</label>
	                            <input type="password" class="form-control" placeholder="Password" id="Password1" required data-validation-required-message="Please enter your phone number.">
	                            @if ($errors->has('password'))
	                                {{$errors->first('password')}}
	                            @endif
	                            <p class="help-block text-danger"></p>
	                        </div>
	                    </div>  
	                    <br>
	                    <div id="success"></div>
	                    <div class="row">
	                        <div class="form-group col-xs-12">
	                            <button type="submit" class="btn btn-default">Login</button>
	                        </div>
	                    </div>
	                    
	                {{Form::token()}}
	                </form>
	            </div>
	        </div>
	   	</form>
    </div>




@stop
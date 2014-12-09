@extends('layout.main')
@section('content')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Clean Blog - Contact</title>

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



</head>
<body>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Fill in the details below to sign up for your free Thriftswap account!</p>
                <form name="sentMessage" id="contactForm" action = "{{URL::route('account-create')}}" method = "post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="Fname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="Lname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
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
                            <label>Email Address</label>
                                <input type = "text" name="email" 
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address."{{(Input::old('email')) ? 'value="'.e(Input::old('email')).'"': ''}}>
                            @if ($errors->has('email'))
                                {{$errors->first('email')}}
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
                     <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Repeat Password</label>
                            <input type="tel" class="form-control" placeholder="Repeat Password" id="Password2" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                     <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Address Line 1</label>
                            <input type="tel" class="form-control" placeholder="Address Line 1" id="Address Line 1" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Address Line 2</label>
                            <input type="tel" class="form-control" placeholder="Address Line 2" id="Address Line 2" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div> <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Town/City</label>
                            <input type="tel" class="form-control" placeholder="Town/City" id="Town/City" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div> <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Country</label>
                            <input type="tel" class="form-control" placeholder="Country" id="Country" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Sign Up!</button>
                        </div>
                    </div>
                    <input type="submit" value = "Create account">
                {{Form::token()}}
                </form>
            </div>
        </div>
    </div>

    
    

    <!-- <pre>{{ print_r($errors) }}</pre> 

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
    </form>-->
@stop
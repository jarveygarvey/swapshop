<!DOCTYPE html>
<html>
	<head>
		
            <!-- jQuery -->
            <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

            <!-- Custom CSS -->
            <link href="css/clean-blog.min.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

            <link type="text/css" href="/_beta/css/fontface.css?v=20141007" rel="stylesheet" media="screen" />
            <link type="text/css" href="/_beta/css/mobile-portrait.css?v=20141007" rel="stylesheet" media="screen" />
            <link type="text/css" href="/_beta/css/mobile-landscape.css?v=20141007" rel="stylesheet" media="screen and (min-width: 480px)" />
            <link type="text/css" href="/_beta/css/tablet.css?v=20141007" rel="stylesheet" media="screen and (min-width: 700px)" />     
            <link type="text/css" href="/_beta/css/desktop.css?v=20141008" rel="stylesheet" media="screen and (min-width: 960px)" /> 
            <link type="text/css" href="/_beta/css/all-site-global.css?v=20141007" rel="stylesheet" media="screen" /> 
            <link type="text/css" href="/_beta/css/new_snow.css?v=5" rel="stylesheet" media="screen" />  
	</head>
	<body>
	@if(Session::has('global'))
	<p>{{Session::get('global')}}</p>
	@endif
	@include('layout.navigation')
	    	<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/BG.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Swap or Shop</h1>
                        <hr class="small">
                        <span class="subheading">Whatever you may choose...</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<head>
	</body>
</html>
@yield('content')
@include ('layout.footer')

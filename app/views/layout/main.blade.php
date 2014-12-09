<!DOCTYPE html>
<html>
	<head>
		<title>home</title>
	</head>
	<body>
	@if(Session::has('global'))
	<p>{{Session::get('global')}}</p>
	@endif
	@include('layout.navigation')
	    	<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/BG.png')">
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

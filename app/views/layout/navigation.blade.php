    <!-- Navigation -->
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::route('home')}}">Thrift Swap</a>
            </div>

            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search" style="width:100%;">
                </div>
               <button type="submit" class="btn btn-default">Submit</button>
            </form> 


<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{URL::route('home')}}">Home</a>
                    </li>
                    <!--
					checks if logged in
					-->
					@if(Auth::check()) 
                        <li><a href="{{URL::route('home')}}">Account</a></li>
                        <li><a href="{{URL::route('sign-out')}}">Sign Out</a></li>
                        <li><a href="{{URL::route('home')}}">My Watch List</a></li>
					@else
                    <li><a href="{{URL::route('sign-in')}}">Sign In</a></li>
					<li><a href="{{URL::route('account-create')}}">Sign up</a> </li>
					@endif
                    <li><a href="{{URL::route('about')}}">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
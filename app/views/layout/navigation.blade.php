<nav> 
	<ul>
		<li><a href="{{URL::route('home')}}">Home</a> </li>
		/*
			checks if logged in
		*/
		@if(Auth::check()) 
		
		@else
		<li><a href="{{URL::route('account-create')}}">Create an Account</a> </li>
		@endif
	</ul>
</nav>
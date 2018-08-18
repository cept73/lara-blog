   <!--<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">-->
   <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
      <div class="container">
	<div>
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <ul class="nav navbar-nav">
<!--          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>-->
@if (Route::has('login')) 
@if (Auth::check())
          <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
@else
          <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
@endif
@endif
        </ul>

      </div><!-- /.container -->
    </nav><!-- /.navbar -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>

	<div id="nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h2>Event Calendar</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Manage Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notification">Notification<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
            </li>
          
            <li class="nav-item">
               <a class="nav-link" href="/contactus">Contact us</a>
          	</li>
            <li class="nav-item">
           <a class="btn btn-primary"href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
          	</ul>
        </div>
      </nav>
    </div>
	<div class="card" style="width: 50rem; margin-left: 100px;">
	    <img src="..." class="card-img-top" alt="helloworld">
	    <div class="card-body">
	    <h5 class="card-title">User Description</h5>
<!-- 	    <h5 class="card-title">email</h5>
	    <h5 class="card-title">phone</h5>
	    <h5 class="card-title">address</h5>
 -->
	    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go somewhere</a> -->
      
	    <div>Name : {{$user->first_name}} {{$user->last_name}}</div>
	    <div>email : {{$user->email}}</div>
	    <div>phone : {{$user->phone}}</div>
	    <div>address : {{$user->address}}</div>
	  </div>
	</div>

</body>
</html>
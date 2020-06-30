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
              <a class="nav-link" href="/">Manage Event<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notification">Notification</a>
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
<div class="container-fluid py-4">
	<p class="h4 mb-4 text-left">Contact us</p>

  <div class="row">
    <div class="col-md-6">
      <!--Google map-->
     	<div>
	      <form class=" border border-light p-5 w-100" action="#!" style="width: 50%; margin:0 auto;">


	          <!-- Name -->
	          <label>Full Name:</label>
	          <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

	          <!-- Email -->
	          <label>Gmail:</label>
	          <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

	          <!-- Subject -->
	          <label>Website:</label>
	          <input type="text" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Website">
	          <div class="form-group">
	            <label>Message:</label>
	              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
	          </div>
	          <button class="btn purple-gradient btn-block" type="submit">Send</button>
	      </form>
    	</div>
    	
      </div>

      <div class = "col-md-6">
      	 <div id="map-container-google-3" class="z-depth-1-half map-container-3 mt-2 w-100">
	        <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
	          style="border:0; min-height:500px; min-width:100%;" allowfullscreen></iframe>
	      </div> 
      </div>
    </div>
  </div>
</body>
</html>
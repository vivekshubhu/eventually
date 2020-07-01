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
          <ul class="navbar-nav mr-auto w-100">
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
            <div>
              <li class="nav-item">
           <a class="btn btn-primary float-left"href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </div>
          	</ul>
        </div>
      </nav>
  </div>
  @foreach($events as $event)
	<div class="card" style="width: 50rem; margin:30px 100px;">
		<div class="card-body">
	    <h5 class="card-title">{{$event->title}}</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Created at : {{$event->created_at}}</h6>
      <h6 class="card-subtitle mb-2 text-muted">Event start date : {{$event->start}}</h6>
      <h6 class="card-subtitle mb-2 text-muted">Event end date : {{$event->end}}</h6>
      <h6 class="card-subtitle mb-2 text-muted">Description : {{$event->description ? $event->description : ''}}</h6>
      <h6 class="card-subtitle mb-2 text-muted">Created By : {{$event->user->first_name}} {{$event->user->last_name}}</h6>
  	</div>
  </div>

  @endforeach

</body>
</html>
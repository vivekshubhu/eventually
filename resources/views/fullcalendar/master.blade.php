<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href="{{asset('assets/fullcalendar/packages/core/main.css')}}" rel='stylesheet' />
<link href="{{asset('assets/fullcalendar/packages/daygrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('assets/fullcalendar/packages/timegrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('assets/fullcalendar/packages/list/main.css')}}" rel='stylesheet' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link href="{{asset('assets/fullcalendar/css/style.css')}}" rel='stylesheet' />

<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
  @include('fullcalendar.modal-calendar')
  <div id="nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h2>Event Calendar</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Manage Events<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notification">Notification</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
            </li>
          
          <li class="nav-item">
              <a class="nav-link" href="">Contact us</a>
          </li>
          </ul>
        </div>
      </nav>
  </div>
  <div id='wrap'>

    <div id='external-events d-none' >
      <!-- <h4>Draggable Events</h4> -->

      <div id='external-events-list'>
       <!--  <div class='fc-event'>My Event 1</div>
        <div class='fc-event'>My Event 2</div>
        <div class='fc-event'>My Event 3</div>
        <div class='fc-event'>My Event 4</div>
        <div class='fc-event'>My Event 5</div> -->
      </div>

     <!--  <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p> -->
  </div>
@csrf
@method('PUT')
    <div id='calendar'
    style="margin-right: 89px;" 
    data-route-load-events="{{ route('routeLoadEvents')}}"
    data-route-event-update="{{ route('routeEventUpdate')}}" 
    data-route-event-store="{{ route('routeEventStore')}}"
    data-route-event-delete="{{ route('routeEventDelete')}}"     
    ></div>

    <div style='...'></div>

  </div>


<script src="{{asset('assets/fullcalendar/packages/core/main.js')}}"></script>
<script src="{{asset('assets/fullcalendar/packages/interaction/main.js')}}"></script>
<script src="{{asset('assets/fullcalendar/packages/daygrid/main.js')}}"></script>
<script src="{{asset('assets/fullcalendar/packages/timegrid/main.js')}}"></script>
<script src="{{asset('assets/fullcalendar/packages/list/main.js')}}"></script>

<script src="{{asset('assets/fullcalendar/packages/core/locales-all.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>

<script src="{{asset('assets/fullcalendar/js/script.js')}}"></script>
 
<script src="{{asset('assets/fullcalendar/js/calendar.js')}}"></script>


</body>
</html>


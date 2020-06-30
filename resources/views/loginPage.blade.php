
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" id = "loginUser" style="color: #757575; width: 500px; margin-left: 375px;" method="post" data-route ="{{route('loginUser')}}">
      {{ csrf_field() }}
 
      <!-- Email -->
      <div class="md-form">
        <label for="materialLoginFormEmail">E-mail</label>
        <input type="email" name = "email" id="materialLoginFormEmail" class="form-control">
      </div>

      <!-- Password -->
      <div class="md-form">
        <label for="materialLoginFormPassword">Password</label>
        <input type="password" name = "password" id="materialLoginFormPassword" class="form-control">
      </div>

      <div class="d-flex justify-content-around">
        <div>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="signup">Register</a>
      </p>
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets/fullcalendar/js/signup.js')}}" type="text/javascript"></script>
</body>
</html>

<!-- Material form login -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="width: 800px; margin-left: 300px;">
	<div id="messages"></div>
	<!-- Default form register -->
<form id="form-data" class="text-center border border-light p-5" method="post" data-route ="{{route('routePostData')}}" >
	{{ csrf_field() }}

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name = "first_name" id="first_name" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" name = "last_name" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name = "email" autocomplete="off" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name = "password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>


    <input type="password" id="defaultRegisterFormPassword" name = "confirmPassword" class="form-control" placeholder="confirmPassword" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        	At least 8 characters and 1 digit.Please be sure to match the password
    	</small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" name = "phone" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- address -->
    <input type="text"  id="" class="form-control" name = "address" placeholder="address" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets/fullcalendar/js/signup.js')}}" type="text/javascript"></script>
</body>
</html>
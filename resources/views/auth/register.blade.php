@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form id = "form-data" method="POST" action="{{ route('register') }}">
                        @csrf

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


    <input type="password" id="password_confirmation" name = "password_confirmation" class="form-control" placeholder="confirmPassword" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit.Please be sure to match the password
        </small>

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" name = "phone" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- address -->
    <input type="text"  id="" class="form-control" name = "address" placeholder="address" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>
    <br><br>
    <hr>
    <br><br>
    <p>Already a member?
        <a href="login">log In</a>
    </p>
    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets/fullcalendar/js/signup.js')}}" type="text/javascript"></script>
@endsection

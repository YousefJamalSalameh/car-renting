<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Garage Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets1/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets1/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets1/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="{{route('register')}}" method="post">
                @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
					<span class="login100-form-title">
                        <span style="color: #f33f3f">YG</span> Register Page
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid username is required: Ahmet">
                    <input class="input100" type="text" name="username" placeholder="username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
                    <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="RepeatPassword" placeholder="ConfirmPassword">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        my Password?
                    </a>
                    <br>
                    <a class="txt2" href="{{route('home')}}">
                        Return to home page
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>


            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="assets1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets1/vendor/bootstrap/js/popper.js"></script>
<script src="assets1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets1/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="assets1/js/main.js"></script>

</body>
</html>

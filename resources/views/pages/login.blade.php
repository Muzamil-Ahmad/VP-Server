<!DOCTYPE html>
<!--
Template Name: Pangong - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/
License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
        <title>Volgo Point</title>
         <!-- <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'> -->
        <link href="{{asset('admin_assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('dan_css_file/css/style.css')}}">
        <link rel="shortcut icon" href="{{asset('admin_assets/favicon.ico')}}">
    <link rel="icon" href="{{asset('admin_assets/favicon.ico')}}" type="image/x-icon">

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{asset('admin_assets/favicon.ico')}}">
    <link rel="icon" href="{{asset('admin_assets/favicon.ico')}}" type="image/x-icon">
    <!-- Custom CSS -->
    

</head>

<body>


<form id="login_form">
<div class="login-form">
<img class="brand-img" src="{{asset('admin_assets/dist/img/volgo.png')}}" alt="brand" />
<p id="message" style="display:none; color:red"> Incorrect 'email' or 'password'</p>
     <!--<h3>Login To Volgo</h3>-->
     <!--<div class="form-group ">
       <input type="text" class="form-control" onfocus="myFunction()" placeholder="Username " id="UserName">
       
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod">
       
     </div>-->
     
     <div class="form-group">
        <input type="text"  onfocus="myFunction()" name="email" id="email" class="form-control" placeholder="Email" required data-parsley-type="email" data-parsley-trigger="keyup" />
        <i class="fa fa-user"></i>
    </div>
    <div class="form-group">
        <!-- <div class="input-group"> -->
        <input class="form-control" onfocus="myFunction()" required data-parsley-length="[8,16]" data-parsley-trigger="keyup" name="password" id="password" placeholder="Password" type="password">
        <i class="fa fa-lock"></i>
     </div>
     <!-- <span class="alert">Invalid Credentials</span> -->
     <div class="form-group">
        <a class="link" href="{{url('/forgot_password')}}">Lost your password?</a>
    </div>
     <!--<button type="button" class="log-btn" value="Login">Log in</button>-->
     
     <div class="form-group">
        <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary btn-block mt-25" />
    </div>
  </form>
     
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin_assets/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin_assets/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{asset('admin_assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('admin_assets/dist/js/feather.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('admin_assets/dist/js/init.js')}}"></script>
    <script src="{{asset('admin_assets/dist/js/login-data.js')}}"></script>
    <script src="{{asset('admin_assets/dist/ejs/parsley.js')}}"></script>
    <!-- <script src="http://parsleyjs.org/dist/parsley.js"></script> -->
    <script>
        $(document).ready(function() {
            $('#login_form').parsley();
            $('#login_form').on('submit', function(event) {
    
                event.preventDefault();
                if ($('#login_form').parsley().isValid()) {
                    let username = $('#email').val();
                    let password = $('#password').val();
                    debugger
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('api/auth/login') }}",
                        dataType: 'JSON',
                        data: {
                            "email": username,
                            "password": password,
                            // "remember_me":true
                        },
                        beforeSend: function() {
                            $('#submit').attr('disabled', 'disabled');
                            $('#submit').val('Login...');
                        },
                        success: function(response) {
                          debugger
                            window.location = "{{ url('dashboard') }}";
                            localStorage.setItem("token", response['access_token']);
                            localStorage.setItem("username", response['user']['name']);
                            localStorage.setItem("email", response['user']['email']);
                            localStorage.setItem("dp", response['user']['dp']);
                            localStorage.setItem("userInfo",JSON.stringify(response));
                            $('#login_form')[0].reset();
                            $('#login_form').parsley().reset();
                            $('#submit').attr('disabled', false);
                            $('#submit').val('Login');
                            
                        },
                        error: function(response) {
                            if (response.status === 401) {
                                $('#message').show();
                            }
                            $('#login_form')[0].reset();
                            $('#login_form').parsley().reset();
                            $('#submit').attr('disabled', false);
                            $('#submit').val('Login');
                            console.log("error", response);
                        }

                    });

                }

            });

        });

        function myFunction() {

            $('#message').hide();
        }
    </script>
</body>

</html>

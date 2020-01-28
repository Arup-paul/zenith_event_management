<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/png" href="/imgs/favicon.png" /> -->
        <title>Login</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/simple-line-icons/css/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/themify-icons/css/themify-icons.css')}}">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="{{asset('public/admin/dist/css/main.css')}}">

        <script src="{{asset('public/admin/assets/js/modernizr-custom.js')}}"></script>
    </head>
    <body>

        <div class="sign-in-wrapper">
            <div class="sign-container">
                <div class="text-center">
                    <h2 class="logo"><img src="{{asset('public/admin/imgs/logo-dark.png')}}" width="130px" alt=""/></h2>
                    <h4>Login to Admin</h4>
                </div>
                 <h2 style="color:red; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('msg');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('msg',' ');
                        }
                       

                     ?>
                 </h2>
                  <h2 style="color:red; font-size: 18px;text-align: center;">
                     <?php
                        
                        $logout = Session::get('logout');
                        if (isset($logout)) {
                            echo $logout;
                            Session::put('logout',' ');
                        }
                       

                     ?>
                 </h2>
                <form class="sign-in-form" role="form" action="{{url('/admin_login')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <input type="email" class="form-control" name="admin_email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                    <div class="form-group text-center">
                        <label class="i-checks">
                            <input type="checkbox">
                            <i></i>
                        </label>
                        Remember me
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Login</button>
                    <div class="text-center help-block">
                        <a href="forgot-password.html"><small>Forgot password?</small></a>
                        <p class="text-muted help-block"><small>Do not have an account?</small></p>
                    </div>
                    <a class="btn btn-md btn-default btn-block" href="registration.html">Create an account</a>
                </form>
                <div class="text-center copyright-txt">
                    <small>MegaDin - Copyright © 2017</small>
                </div>
            </div>
        </div>

        <!-- inject:js -->
        <script src="{{asset('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('public/admin/bower_components/autosize/dist/autosize.min.js')}}"></script>
             <!-- endinject -->

        <!-- Common Script   -->
        <script src="{{asset('public/admin/dist/js/main.js')}}"></script>

    </body>
</html>

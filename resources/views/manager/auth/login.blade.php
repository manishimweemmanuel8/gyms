<!DOCTYPE html>
<html>


<!-- Mirrored from demo.lorvent.com/fitness/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 04:21:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Login | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level css -->
    <link href="{{asset('asset/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{asset('asset/admin/vendors/iCheck/skins/all.css')}}" rel="stylesheet" type="text/css">
    <link type="text/css" href="{{asset('asset/admin/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/admin/css/custom_css/login.css')}}" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="{{asset('asset/admin/img/logo.png')}}" class="logo" alt="image not found">
                <h3 class="text-center">Manager Log In</h3>
                <form class="form" id="log_in" method="POST" action="{{ route('manager.login') }}" aria-label="{{ __('Login') }}">

                     @csrf
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus >
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                          @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Log In">
                </form>
                <p class="text-right">
                     <a class="text-warning forgot_color" href="{{ route('manager.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                </p>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{asset('asset/admin/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="{{asset('asset/admin/vendors/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/vendors/bootstrapvalidator/dist/js/bootstrapValidator.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/custom_js/login1.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 04:21:07 GMT -->
</html>

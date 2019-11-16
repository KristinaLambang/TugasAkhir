<html>
<head>
<title>SMA ALBANNA DENPASAR |     Login    </title>
   <link rel="shortcut icon" href="{{asset('image/House.ico')}}">
   <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/AdminLTE.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/ionicons.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/goggle_font.css')}}"> 
   <link rel="stylesheet" href="{{ asset('css/login/font-awesome.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/adds.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/jquery-ui.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/cmxform.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/pace.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login/select2.css')}}">

   <script src="{{ asset('js/jquery.js')}}"></script>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css')}}">
   <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>

   <script src="{{ asset('js/login/jquery.min.js')}}"></script>
   <script src="{{ asset('js/login/bootstrap.min.js')}}"></script>

</head>
<body class="hold-transition" style="background-image: asset('image/company-profile.jpg')">

<div class="login-box" style="border: 1px solid #ddd;padding: 3px;">
  <p class="login-box-msg"><h3 align="center">SMA ALBANNA DENPASAR</h3></p>
        <div class="login-logo">
            <img src="{{asset('image/logo_sma.jpg')}}" width="220">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">  
            <form method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                <div class="form-group has-feedback ">
                <input id="email" type="email" placeholder="Email/Username" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback ">
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div>
                            <label>
                               <!--  <input type="checkbox" name="remember"> Ingat Saya -->
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{url("/bower_components/bootstrap/dist/css/bootstrap.min.css")}}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{url("/bower_components/font-awesome/css/font-awesome.min.css")}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{url('/bower_components/Ionicons/css/ionicons.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{url("/dist/css/AdminLTE.min.css")}}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{url("/plugins/iCheck/square/blue.css")}}>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

      @if (session()->has("err"))
          <span class="help-block">
            <strong style="color:red">{{ session("err") }}</strong>
        </span>
      @endif
    <form class="form-group" role="form" method="POST" action="{{ url('/admin/login') }}">
        @csrf
        <div class="form-group has-feedback">

        <input id="email" type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" autofocus>


        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong style="color:red">{{ $errors->first('email') }}</strong>
        </span>
    @endif

      </div>
      <div class="form-group has-feedback">

        <input  id="password" type="password" placeholder="Password" class="form-control" name="password">


        @if ($errors->has('password'))
        <span class="help-block">
            <strong style="color:red" >{{ $errors->first('password') }}</strong>
        </span>
    @endif

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <input type="checkbox" name="remember"> 
                     Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- jQuery 3 -->
<script src={{url('/bower_components/jquery/dist/jquery.min.js')}}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{url('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
<!-- iCheck -->
<script src={{url("/plugins/iCheck/icheck.min.js")}}></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

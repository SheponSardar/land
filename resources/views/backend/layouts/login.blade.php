<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Point of Sale system for Sports shop</title>

    <!-- Bootstrap -->
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/css/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('/css/animate.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/css/custom.css')}}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                <form action="{{route('login_user')}}" method="post">
                @csrf
                <h1>Log in your Account</h1>
                <div>

                    @if(session()->has('message'))
                   <div class="row" style="padding: 50px;">
                       <span class="alert alert-warning">{{session()->get('message')}}</span>
                   </div>
                   @endif

                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name"
                        autocomplete="off">
                    <span class="fa fa-user-circle-o form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

              

                <div class="row">
                    <div class="col-xs-4">

                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>

                <p style="color:rgb(255, 0, 0);"> <br>If you forget your password, contact with admin.</p>
            </form>
                </section>
            </div>


        </div>
    </div>
</body>

</html>

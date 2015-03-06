<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
    {{HTML::style("assets/css/style.css")}}
</head>
<body>
<div class="row-fluid">
    <div class="login-box">
        <div class="icons">
            <a href="{{url('/')}}"><i class="halflings-icon home"></i></a>
            <a href="#"><i class="halflings-icon cog"></i></a>
        </div>
        <h2>Autenticación</h2>
        {{ Form::open(['url' => 'login', 'class'=>'form-horizontal ajaxFormLogin', 'method'=>'POST']) }}

        <div class="validacion" style="width: 80%;padding-left: 10%"></div>


        <fieldset>

            <div class="input-prepend" title="Username">
                <span class="add-on"><i class="halflings-icon user"></i></span>
                {{ Form::text('username',"", ['class'=>'input-large span10', 'id'=>'username', 'placeholder'=>'username']) }}

            </div>
            <div class="clearfix"></div>

            <div class="input-prepend" title="Password">
                <span class="add-on"><i class="halflings-icon lock"></i></span>
                {{ Form::password('password',['class'=>'input-large span10', 'id'=>'password', 'placeholder'=>'Password']) }}

            </div>
            <div class="clearfix"></div>

            <label class="remember" for="remember">{{ Form::checkbox('remember', true) }}Recuerdame</label>

            <div class="button-login">
                {{ Form::submit('Acceder', ['class' => 'btn btn-primary']) }}

            </div>
            <div class="clearfix"></div>
        </fieldset>
        {{Form::close()}}
        <hr>

        </p>
    </div><!--/span-->
</div><!--/row-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

{{HTML::script("assets/js/functions.js")}}
</body>
</html>

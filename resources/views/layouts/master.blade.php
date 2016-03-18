<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('title')</title>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->

        
            <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">


        <link href="{{ asset("assets/css/font-awesome.css") }}" rel="stylesheet">
        <link href="{{ asset("assets/css/custom.css") }}" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
    </head>
    <body>
        <!-- HEADER   -->
        @yield('content')
        
        
       

        @yield('js')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset("assets/js/bootstrap.min.js")}}"> </script>
        
        <script src="{{asset("assets/js/validator.js")}}"> </script>
        
    </body>
</html>
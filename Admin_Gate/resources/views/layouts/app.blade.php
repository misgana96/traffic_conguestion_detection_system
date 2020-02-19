<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

     <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        
        @yield('content')
    </div>

    <!-- Scripts -->
     <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
    <script type="/js/app.js"></script>
    <script src="/js/count.js"></script> 
</body>
</html>
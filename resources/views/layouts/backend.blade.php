<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    @yield( 'css' )

</head>
<body>

<div class="wrapper">

    @include ('includes.backend-sidebar')
    <div class="main-panel">
        
        @include ('includes.backend-header')

        @yield( 'content' )


        @include ('includes.backend-footer')

    </div>
</div>


</body>

    <script src="{{ asset('js/app.js') }}"></script>

    @yield( 'js' )

</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">

	@yield('style')
</head>
<body>
	@include('layouts.nav')
	<div id="app">
		@yield('content')
	</div>
<footer class="container">
  <p>© Company 2017-2018</p>
</footer>

@yield('script')

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<script src="{{ asset('js/multiselect.min.js')}}"></script>

<script src="{{ asset('js/highcharts.min.js')}}"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script src="{{ asset('js/myscripts.js')}}"></script>
</body>
</html>
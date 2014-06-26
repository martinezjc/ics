<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>ICS Administration @if( $title ) - {{ $title }} @endif </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  {{ HTML::style('packages/webkit/css/bootstrap.css'); }}
  {{ HTML::style('packages/webkit/css/font-awesome.css'); }}
  {{ HTML::style('packages/webkit/css/style.css'); }}
  {{ HTML::style('packages/webkit/css/bootstrap-responsive.html'); }}

  <!-- If it need some extra styles -->
  @yield("styles")
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  {{ HTML::script('packages/webkit/js/html5shim.js'); }}
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>
<body>

@yield("content")

<!-- JS -->
{{ HTML::script('packages/webkit/js/jquery.js'); }}
{{ HTML::script('packages/webkit/js/bootstrap.js'); }}
@yield("scripts")
</body>
</html>
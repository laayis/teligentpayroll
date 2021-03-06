<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teligent Systems Inc. Payroll System</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->

  {{ HTML::style('resources/libraries/foundation/css/foundation.css') }}
  {{ HTML::style('resources/css/modules/login.css') }}
  

  {{ HTML::script('resources/libraries/foundation/js/vendor/modernizr.js') }}
  
  <link href='http://fonts.googleapis.com/css?family=Roboto:500,300' rel='stylesheet' type='text/css'>

</head>
<body>
  @yield('content')

  {{ HTML::script('bower_components/jquery/dist/jquery.js') }}
  {{ HTML::script('resources/libraries/foundation/js/foundation.min.js') }}
  {{ HTML::script('resources/js/login.js') }}
  <script>
    $(document).foundation();
  </script>
</body>
</html>
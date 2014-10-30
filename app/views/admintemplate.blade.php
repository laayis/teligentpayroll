<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teligent Systems Inc. Payroll System</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  {{ HTML::style('resources/libraries/foundation/css/normalize.css') }}
  {{ HTML::style('resources/libraries/foundation/css/foundation.css') }}
  
  {{ HTML::script('resources/libraries/foundation/js/vendor/modernizr.js') }}
  
  {{ HTML::style('resources/css/style.css') }}

  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/380cb78f450/integration/foundation/dataTables.foundation.css">
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:500,300' rel='stylesheet' type='text/css'>
  
</head>
<body>
   <div id="mainwrapper">
      <div class="large-3 columns left-nav">
        @yield('leftmenu')
      </div>
      
      <div class="main-content large-9 columns right-content">
          @yield('content')
      </div>
    
    <footer>
      <p>Powered by: Patrick James G. Lim &amp; Joshua B. Turingan. All rights reserved 2014.</p>
    </footer>
  </div>
  {{ HTML::script('bower_components/jquery/dist/jquery.js') }}
  {{ HTML::script('resources/libraries/foundation/js/foundation.min.js') }}
  {{ HTML::script('node_modules/moment/min/moment.min.js') }}
  {{ HTML::script('resources/js/login.js') }}
  {{ HTML::script('resources/js/datetime.js') }}
  {{ HTML::script('resources/js/script.js') }}
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/plug-ins/380cb78f450/integration/foundation/dataTables.foundation.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
  

  <script>
  $(document).foundation();

    
  </script>
</body>
</html>
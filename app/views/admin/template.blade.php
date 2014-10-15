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
  {{ HTML::style('resources/css/style.css') }}
  
  {{ HTML::script('resources/libraries/foundation/js/vendor/modernizr.js') }}
  
  @yield('head')
  
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
	
    

      <div class="large-3 columns left-nav">
        
        <div class="info-container">
          <div class="datetime-container">
            <h5 class="date"></h5>
            <h5 class="time"></h5>
          </div>
          
          <div class="img-container">
            {{ HTML::image('resources/img/users/1.jpg') }}  
          </div>

          <h3>Patrick James Lim</h3>
        </div>
        

       
        
        <ul class="side-nav">
          
          <li><a href="/admin/users"><i class="fa fa-user"></i> User Management (Doing) </a></li>
          <li><a href="/admin/employees"><i class="fa fa-briefcase"></i> Employee Management (To Do)</a></li>
          
        </ul>
      </div>

      <div class="large-9 columns right-content">
        
        @yield('content')

      </div>


	@yield('footer')

  {{ HTML::script('bower_components/jquery/dist/jquery.js') }}
  {{ HTML::script('resources/libraries/foundation/js/foundation.min.js') }}
  {{ HTML::script('node_modules/moment/min/moment.min.js') }}
  {{ HTML::script('resources/js/login.js') }}

  <script type="text/javascript" src="http://cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
  
  <script>
  $(document).foundation();

    $(document).ready(function(){
      
      var getDateTime = function getDateTime(){

        var date = moment().format("MMMM DD, YYYY");
        var time = moment().format("hh:mm:ss A");
        $('.date').html('<i class="fa fa-calendar"></i> ' + date);
        $('.time').html('<i class="fa fa-clock-o"></i> ' + time);

      }

      setInterval(getDateTime, 1000);
      
    });
    

    
          
    
  </script>
</body>
</html>
$(document).ready(function(){
      
      var getDateTime = function getDateTime(){

        var date = moment().format("MMMM DD, YYYY");
        var time = moment().format("hh:mm:ss A");
        $('.date').html('<i class="fa fa-calendar"></i> ' + date);
        $('.time').html('<i class="fa fa-clock-o"></i> ' + time);

      }

      setInterval(getDateTime, 1000);
      
    });
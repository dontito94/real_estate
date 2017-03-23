<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>real estate</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/web.css" rel="stylesheet">


  </head>
  <body>
    <!--banner-->
   <div class="row">
    <div class="col-md-3">
     <a href="{{ url('/') }}"><img class="imoj"  src="image/imoj.png"></a> 
</div> 
 <div class="col-md-6 ">
<h1>REAL ESTATE</h1>
 </div>
   
   </div>
 

    <!--navbar-->
    <div class="row">
    <div class="col-md-2">
  <ul class="nav nav-pills nav-stacked">
 <li role="presentation" class="active"><a href="{{ url('/home') }}">Home</a></li>
  <li role="presentation"><a href="{{ url('/aboutus') }}">About us</a></li>
    <li role="presentation"><a href="{{ url('/contactus') }}">contact us</a></li>
<li role="presentation"><a href="{{ url('/register') }}">Register</a></li>
</ul>
      
</div>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
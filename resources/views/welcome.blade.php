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
  <li role="presentation"><a href="{{ url('/login') }}">login</a></li>
  <li role="presentation"><a href="{{ url('/register') }}">Register</a></li>
</ul>
      
</div>
  <!--carousel/slider-->
   <div class="row">
    <div class="col-md-4 .col-md-offset-4">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="image/2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="image/3.jpg" alt="Flower">
    </div>
 </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>

 <div class="col-md-3">
<h3>QUICK LINKS</h3>
<hr>
<ul>
<li><a href="www.nssf.com">HSSF</a></li>
<li><a href="lapf.com">LAPF</a></li>
<li><a href="nyumba.com">NYUMBA</a></li>
</ul>
 </div>
</div>
  <!-- content -->
   <div class="section">
    <h2>WELCOME</h2>
    <hr>
    <div class="row">
  <div class="col-md-5 .col-md-offset-4">
<p>Now days when everything is online, how is it possible that  real estate left web application behind. There are lot of real estate companies who advertise their property online so idea behind developing this application is that their property can also sell,or buy rental property using this. These application are not widely popular but in future,they have large scope of growth</p>
  </div>

    </div>

   </div>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
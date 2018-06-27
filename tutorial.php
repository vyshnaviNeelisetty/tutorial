<?php
session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }
 //echo $_SESSION['mail'];
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tutorial Main page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="tutorialcss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>

	<nav class="navbar navbar-default navbar-fixed-top s">
	<div class="container-fluid ">
	<img src="blueelearn.png">
	<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
		<li><a href="tutorial.php"><span data-hover="Home" id="hov">Home</span></a></li>
		<li><a href="aboutus.php"><span data-hover="About Us" id="hov">About us</span></a></li>
		<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li><a href="btech.php">B.Tech</a></li>
          <li><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li><a href="blog.php"><span data-hover="Blog" id="hov">Blog</span></a></li>
		<li><a href="logout.php?logout"><span data-hover="Logout" id="hov">Logout</span></a></li>
	</ul>

	</div>
	</nav>
	<div class="container-fluid">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="edu3.jpg" style="width:120%;">
      </div>

      <div class="item">
        <img src="edu2.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="edu1.jpg"style="width:100%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container-fluid sp">
	<h1>Welcome to Online Tutorial</h1>
	<p>
	Education began in the earliest prehistory, as adults trained the young in the knowledge and skills deemed necessary in their society. In pre-<br>
	literate societies this was achieved orally and through imitation.</p>
</div>
<div class="container c">
	<img src="color.jpg">
		<div class="centered">
			<h1><b>Testimonials</b></h1>
			<h3>Colors are brighter when the mind is Open</h3>
		</div>
</div>
<div class="container-fluid tab">
	<div class="row">
		
		<div class="col-md-3">
			<h1><b>e-Learn</b></h1>
			<h6>Gain Knowledge with one klick!</h6><br>
			<p>Vasu Heights,plot No.#91,92,93,<br>
			opp.Care Hospitals,Gachibowli,Hyderabad-500032<br>
			<a href="#" id="w">www.h-bots.com</a>&nbsp;|
			7093577617</p>
		</div>
		<div class="col-md-3"><br><br>
		<ul>
			<li><a href="#"><h3>Company</h4></a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		</div>
		<div class="col-md-3"><br><br>
		<ul>
			<li><a href="#"><h3>Learn</h4></a></li>
			<li><a href="#">Languages</a></li>
			<li><a href="#">Management tutorials</a></li>
		</ul>
		</div>
		<div class="col-md-3"><br><br>
		<ul>
			<li><a href="#"><h3>Practise<h4></a></li>
			<li><a href="#">Comapny wise</a></li>
			<li><a href="#">Topic wise</a></li>
		</ul>
		</div>
	
	</div>
	</div>
  
	       <div class="navbar navbar-inverse navbar-bottom niv">
		       <div class="container-fluid">
			   <div class="pull-left pl">
			       
				   <p>All  copyrights  reserved  for  e-Learn | Designed by H-bots</p>
				   
			   </div>
			     <div class="pull-right">
				   <div class="row"><div class="col-md-offset-7">
				  Follow Us:
				   <img src="facebook.jpg" width="9%" height="7%">
				   <img src="link.png" width="9%" height="7%">
				   <img src="twitter.png" width="9%" height="7%">
				   </div></div>
				 </div>
			   </div>
		   </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">		window.location.href="log.php";
</script>
  </body>
</html>
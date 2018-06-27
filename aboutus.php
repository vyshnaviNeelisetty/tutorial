<?php
 session_start();
 if(!isset($_SESSION['mail']))
    {
	 header("location:log.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="aboutuscss.css" rel="stylesheet">
	<link href="navcss.css" rel="stylesheet">

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
		<li id="mar"><a href="tutorial.php"id="nav"><span data-hover="Home">Home</span></a></li>
		<li id="mar"><a href="aboutus.php"id="nav"><span data-hover="About Us">About us</span></a></li>
		<li class="dropdown" id="mar">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li id="mar"><a href="btech.php">B.Tech</a></li>
          <li id="mar"><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li id="mar"><a href="blog.php" id="nav"><span data-hover="Blog">Blog</span></a></li>
		<li id="mar"><a href="logout.php"id="nav"><span data-hover="Login">Logout</span></a></li>
	</ul>

	</div>
	</nav><br>
	<br><br><br>
	<div class="container">
	<h1 align="center" id="color"><b>Welcome to e-Learn</b></h1>
	</div>
 <div class="container-fluid im">
	<img src="online.jpg" width="100%" height="100%">
		<div class="top-left">
		<h1>Our mission is to make education accessible.</h1>
		<h3>with our website,We help students easily master any subject<br> and achieve their educational goals</h3>
		</div>
	</div>
	<div class="p">
	<h2>Our Vision</h2>
	<p >To create an alternate platform for students which help them to clarify their doubts and make their time save in learning various courses inorder to acheive dreams.This is the best platform for the students without any help from others.Also it is available in 24x7 support system. </p>
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
			<li><a href="#" id="w"><h3>Company</h4></a></li>
			<li><a href="aboutus.php"id="w">About Us</a></li>
			<li><a href="#"id="w">Contact Us</a></li>
		</ul>
		</div>
		<div class="col-md-3"><br><br>
		<ul>
			<li><a href="#"id="w"><h3>Learn</h4></a></li>
			<li><a href="#"id="w">Languages</a></li>
			<li><a href="#"id="w">Management tutorials</a></li>
		</ul>
		</div>
		<div class="col-md-3"><br><br>
		<ul>
			<li><a href="#"id="w"><h3>Practise<h4></a></li>
			<li><a href="#"id="w">Comapny wise</a></li>
			<li><a href="#"id="w">Topic wise</a></li>
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
				   </div>
				   </div>
				 </div>
			   </div>
		   </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"> </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="/css/style1.css" />	
	

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
   
  <header>
	  <div id="header-inner">
		  <div id="logo"><b>SPORTS CENTER </b></div>
	      <nav  role=”navigation”>
			  <a href="#" id="menu-icon" >
					
			  </a>
			  <ul>
				  <li><a href="" class="current animated fadeIn"> home</a></li>
				<li><a href="#inner-wrapper"  class="animated fadeIn">Categories </a></li>
				<li><a href="#myModal"  class="animated fadeIn"> About</a></li>

 
				<li><a href="logout.php" class="btn btn-danger">Sign Out</a></li>
                <li><a href="reset-password.php" class="btn btn-warning">Reset Password</a></li>

			  </ul>
		  </nav>
		</div>
		
  </header>
   

<script src="/indexjs/jquery.bxslider.min.js"></script><!--For Image Slider-->

		<div class="slide-wrap">
			<section class="slider">
				<ul class="slider1">
					<li><img src="/sportpics/1.jpg"  width = "100%"></li>
					<li><img src="/sportpics/2.jpg" width = "100%"></li>
					<li><img src="/sportpics/3.jpeg" width = "100%"></li>
					<li><img src="/sportpics/4.jpg" width = "100%"></li>
					<li><img src="/sportpics/5.jpg" width = "100%"></li>
					<li><img src="/sportpics/6.jpeg" width = "100%" ></li>
					<li><img src="/sportpics/7.jpg" width = "100%"></li>
					<li><img src="/sportpics/8.jpg" width = "100%"></li>
				</ul>
			</section>

		</div>

		<script type="text/javascript">
			$('.slider1').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				
			});
			$('.slider2').bxSlider({
				pager:false,
				captions: true,
				maxSlides: 3,
				minSlides: 1,
				slideWidth: 230,
                                slideheight:50,
				slideMargin: 10
			});
			$('.slider3').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				controls:false,
			});
		</script>
<!--- End Slider -->
<div id="inner-wrapper">
	<!-- animations -->
	<section >
		
<section class="one-third">
	<div class="circle">
		<td><i class="fa fa-trophy" aria-hidden="true"></i></td>
	</div>
	<h3>ACHIEVEMENTS
		<br/>
<h5>Enter the Achievements</h5></br>
<a href="/achievements/achievementinsertform.php">	<button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a></br>
 <h5> Show the Achievements</h5></br>
<a href="achievements/achievementdisplay.php">	<button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a></br>
	</h3></br>
   
</section>
</section>
<section class="one-third">
		<div class="circle">
			<td><i class="fa fa-user-secret"></i></td>
		</div>
		<h3>ATHLETES
		<br/>
    <h5>Enter the athletes</h5></br>
	<a href="/athlete/athleteinsert.php"><button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a></br>
 <h5>Show the athletes</h5></br>
<a href="/athlete/athletedisplay.php"><button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a></br>
	</h3></br>
   
	</section>
	<section class="one-third">
			<div class="circle">
				<td><i class="fas fa-chart-line"></i></td>
			</div>
			<h3>STATISTICS 
				<br/>
<h5>Insert per year achievements</h5></br>
			<a href="/peryearachievement/achievementinsert.php"><button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a>
			</h3>
			
<h5>Performance Analysis  </h5></br>
			<a href="/charts/bargraph.html"><button class="btn btn-default" id="button1"><b>CLICK HERE</b></button></a>
			</h3>
			
		</section>
<div class="clearfix"></div>
<article>
	<img src="/sportpics/sports.jpg" class="circle-image">
</article>
<aside>
	<h3><b> other stuffs</b></h3>

	<ul class="gym">
		<p> 
			<h4><a href="gallery/image.html"> Gallery </a></h4>
                       <h4><a href="event/index.html">Passed Events </a></h4>
                        <h4><a href="typesofsport/sports.html">Sports available</a></h4>
			<h5></h5>
		</p>
	</ul>
</aside>
<div class="clearfix"></div>

<!-- yet to add

<section class="one-third">
	<h3> new section</h3>
	<img src="2.jpg"/>
	<p> blah blah blah</p>
</section>
<section class="one-third">
		<h3> new section</h3>
		<img src="2.jpg"/>
		<p> blah blah blah</p>
	</section>
	<section class="one-third">
			<h3> new section</h3>
			<img src="2.jpg"/>
			<p> blah blah blah</p>
		</section>
		<div class="clearfix"></div>
	</div> <!-- inner wrapper ends -->
















</body>
</html>

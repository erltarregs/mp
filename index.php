<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome to myProfiles.com!</title>

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/toggles.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="stylesheet" href="css/tinycarousel.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider1').tinycarousel();
		});
	</script>

</head>
<body>

<div class="navbar navbar-fixed-top navbar-default " id="shadow_nav">
  <div class="container-fluid">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
         <!--<span class="glyphicon glyphicon-home"></span>-->
      </button>
      <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-paperclip" id = " "></i> mP</a>
      		<div id="navbar" class="navbar-collapse collapse pull-right">
			<ul class="nav navbar-nav ">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="photos.php">Photos</a></li>
				<li><a href="connections.php">Connections</a></li>
				<li><a href="settings.php" onmouseover="rotategearf()" onmouseout="rotategearb()"><span><i id="gearset" class = "glyphicon glyphicon-cog rotating-gear"></i></span> Settings</a></li>
				<li><a href="contactus.php">Contact mP</a></li>
				<li>
					<button type="button" class="btn btn-default">
      					<span class="glyphicon glyphicon-search"></span> Search
    				</button>					
				</li>
			</ul>

			</div>
				
		</div>
	</div>
</div>

<div class="main-body">
<div class="container" id="board-main">
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/1.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega (Official)</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/2.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			another random post but longer for testing purposes  %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random% %random%
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> <!-- CLASS NOT DEFINED YET -->
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/3.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega 2</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/4.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Girlie</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/profpicsamp.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/profpicsamp.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/profpicsamp.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
	<div class="post-handler"> 
	<!-- do a loop to populate entries/posts here -->
		<div class="prof-image-handler">
			<img src="img/profpicsamp.jpg">
			<!-- populate php here for a single entry/post -->
		</div>
		<div class="webcaster-name">
			<h4>Erl Tarrega</h4>
		</div>
		<div class="post-caption"> <!-- CLASS NOT DEFINED YET -->
			random post details and options for feedback
		</div>
		<div class="fdbck-container">
			<a class="btn btn-primary" href="#" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a>
			<a class="btn btn-danger" href="#" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a>
		</div>
	</div>
	<hr>
<!-- loop end -->

<!-- while # of post is less than or equal to "<===" 25 ; create a function that records the number of posts shown -->

</div>
<!-- board-main container end -->

<!-- Ads section -->
<div class="container" id="ads-section">
	<div class="ads">
		Advertisement<br>
		Connect with your friends! Register at <a href="https://www.facebook.com" target="_blank">Facebook</a>!
	</div>
	<div class="ads">
		Another sample advertisement<br>
		<a href="www.google.com">Google</a> the best search engine in the world!
	</div>
</div>


<!-- Ads section end -->


</div>
<!-- MAIN BODY end -->
<!-- TINY CAROUSEL HERE -->
<div class=" tinycar-fixed-bottom" id="tc-opacity">
	<div class="tinycar " id="slider1">
		<a class="buttons prev" href="#">&#60;</a>
		<div class="viewport">
			<ul class="overview">
				<li><img src="img/picture6.jpg" /></li>
				<li><img src="img/picture5.jpg" /></li>
				<li><img src="img/picture4.jpg" /></li>
				<li><img src="img/picture3.jpg" /></li>
				<li><img src="img/picture2.jpg" /></li>
				<li><img src="img/picture1.jpg" /></li>
			</ul>
		</div>
		<a class="buttons next" href="#">&#62;</a>
	</div>
</div>




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- <script src="lodash.js"></script> -->
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

<footer>
	
</footer>
</html>
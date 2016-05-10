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
</head>
<body>

<div class="navbar navbar-fixed-top navbar-default  " id="shadow_nav">
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
				<li><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="photos.php">Photos</a></li>
				<li><a href="connections.php">Connections</a></li>
				<li><a href="settings.php" onmouseover="rotategearf()" onmouseout="rotategearb()"><span><i id="gearset" class = "glyphicon glyphicon-cog rotating-gear"></i></span> Settings</a></li>
				<li class="active"><a href="contactus.php">Contact mP</a></li>
			</ul>
			</div>
		</div>
	</div>
</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

<footer></footer>
</html>
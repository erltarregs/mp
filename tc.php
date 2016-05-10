<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiny Carousel v2.1.8: A lightweight jQuery plugin</title>
	<link rel="stylesheet" href="css/tinycarousel.css" type="text/css" media="screen"/>

	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider1').tinycarousel();
		});
	</script>

</head>
<body>
	<div id="slider1">
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
</body>
</html>

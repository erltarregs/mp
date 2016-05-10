$(document).ready(function(){
// THIS WILL MAKE THE CLASSES OPACITY EVERYTIME THE MOUSE ENTERS AND LEAVES THE CLASS
	$('#tc-opacity').mouseenter(function(){
		$(this).animate({
			//height: '+=20px',
			opacity: 1.0,
			//width: '+=10px'
		});
	});
	$('#tc-opacity').mouseleave(function()	{
		$(this).animate({
			//height: '-=20px',
			opacity: 0.37,
			//width: '-=10px'
		});
	});
});
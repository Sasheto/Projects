$(document).ready(function(){
	$('#body').load('content/index.php');

	$('nav ul#nav li a').click(function() {
		var page = $(this).attr('href');
		$('#body').load('content/' + page + '.php');
		return false;
	});
});
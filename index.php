<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Square</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<h2>Нажми на квадрат!</h2>
		<div id="square"></div>
	</div>

</body>
	<script type="text/javascript">		
	var randomcolor;
	function get_random_color() {			
		randomcolor="#"+((1<<24)*Math.random()|0).toString(16);}
		$(document).ready(function(){ 			
			$('#square').click(function(){
				get_random_color();	
				$(this).css('background',randomcolor); 		
			});		
		});	
	</script>
</html>

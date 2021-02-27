<?php  $a= "Rihan" ;
$b= "Nadiya"; 
echo "My name is $a ${b}"; ?><html>
</!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
	<body>
		<h1>Javascript Practice</h1>
		<button onclick="checkdate()">The time is?</button>
		<p id="demo">click here</p>

		<div onmouseover="this.style.backgroundColor='red' ">
			   
		</div>

	</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
	$("#demo").click(function(){
		$(this).toggle();
	});
});

</script>
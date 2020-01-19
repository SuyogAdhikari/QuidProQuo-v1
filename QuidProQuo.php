<!DOCTYPE html>
<html>
<head>
	<title>Quid Pro Quo || Dashboard</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Source/CSS/DashboardSTYLE.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
</head>
<body>

	<header>
		<?php 
		include('navigation.php');
		?>
		<div class="main-content-header">
			<h1> WELCOME TO <span class="colorchange">Quid Pro Quo</span>.<br></h1>
				<h3><i>"Something For Something"</i> </h3>
				<div class="getstrated">
					<a href="Source/SignIn.php"><button type="button" id="GetStarted" class="gettingStarted btn1" style="cursor : pointer">Get Started</button></a>
				</div>
				
	</header>

	<script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}	

	</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link rel="stylesheet" href="../source/css/loginStyle.css" >
    <link rel="stylesheet" href="../source/css/DashboardSTYLE.css" >
    <title>Getting Started</title>
</head>
<body>	
    <body class="body" background="../img/login.jpg">
   <?php 
	include('navbar.php');
   ?>
        
  <form action="board.php" method="post">
    	<div class="box">
			<div class="container">
        <span class="login"> 
          <a href="#" class="L"><span class="SI" style="color: orange; font-weight: bold;">
          Login</span></a>/<a href="signup.php" class="L"><span class="SU" style="color:blue;">Sign up</span></a>
        </span>
        <div class="input" style="display:flex;margin-left:330px; padding:left:20px;">
        <div class="txtb"  style="margin-right:20px;">
            <input type="text" placeholder="Username" name="user" id="user" autocomplete="off" required="required">
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
                <input type="password" placeholder="Password" name="pass" id="pass" autocomplete="off" required="required">
                <span data-placeholder="Password"></span>
        </div>
</div>
        <div class="buttonss">
        <input type="submit" name="log_in" class="logbtn" value="Login" id="btn">
        <a href="signup.php"><input type="button" name="log_in" class="logbtn" value="Register?" id="btn" ></a>
</div>
			</div>
		</div>
  </form>







</body>
</html>




 


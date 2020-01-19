<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link rel="stylesheet" href="../source/css/SignupStyle.css" >
    <link rel="stylesheet" href="../source/css/DashboardSTYLE.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Getting Started</title>
</head>

<body  scroll="no" style="overflow:hidden;">	
  <body background="../img/signup.jpg">
  <?php 
	include('navbar.php');
   ?>
     <div class="signupbody">
            <div class="signupmain">

              
              <!-- TEST -->
              <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
              <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

              <div class="wrapper">
            
  
      <form class="form" method="post" action="signup.php">
                <div class="name-section">
                  <input type="text" class="name" placeholder="First Name" name="first_name" autocomplete="off"
                                aria-required="true"
                                pattern="[A-Za-z]{1,32}"
                                required = "required"
                                title="Text Only accepted">
                  <input type="text" class="name" placeholder="Last Name" name="last_name" autocomplete="off"
                                aria-required="true"
                                pattern="[A-Za-z]{1,32}"
                                required = "required"
                                title="Text Only accepted">
                </div>
                <div>
                    <p class="name-help">Please enter your first and last name.</p>
                </div>

                <div class="email-section">
                  <input type="text" class="email" placeholder="Username" name="user_name" autocomplete="off"
                                    aria-required="true"
                                    pattern="[A-Za-z0-9_]{1,32}"
                                    required = "required"
                                    title="Use Numbers, Text and underscores">
                  <input type="email" class="email" placeholder="Email" name="email" autocomplete="off"
                                    pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" 
                                    required="required"
                                    title="email address">
                </div>
    
                <div>
                  <p class="email-help">Please enter your current email address. And unique username</p>
                </div>
  
                <div class="email-section">
                  <input type="password" class="name" placeholder="Password" name="password" autocomplete="off"
                                    required="required"
                                    title="Password (UpperCase, LowerCase, Number required)"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                </div>
<div class="password-section">
                                    <input type="text" class="email" placeholder="Phone Number" name="phone" autocomplete="off"
                                    title="Phone Number"
                                    required="required"
                                    pattern="[789][0-9]{9}">
                </div>
                
                <div>
                  <p class="email-help">Please enter your current password and phone number</p>
                </div>

                <input type="submit" class="submit" value="Register">
    
    </form>

</div>              
                            <div class="bottom-text2">
                                    By creating an account you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
                            </div>
                                
                    </form> 
        
                    
                </div>
            </div>
      </div>
      <script>
      $(".name").focus(function(){
  $(".name-help").slideDown(500);
}).blur(function(){
  $(".name-help").slideUp(500);
});

$(".email").focus(function(){
  $(".email-help").slideDown(500);
}).blur(function(){
  $(".email-help").slideUp(500);
});

      </script>  
  <style>
    body{
  background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png);
}

/*sass variables used*/
$full:100%;
$auto:0 auto;
$align:center;

@mixin disable{
  outline:none;
  border:none;
}

@mixin easeme{
  -webkit-transition:1s ease;
  -moz-transition:1s ease;
  -o-transition:1s ease;
  -ms-transition:1s ease;
  transition:1s ease;
}

/*site container*/
.wrapper{
  width:420px;
  margin:$auto;
}

h1{
  text-align:$align;
  padding:30px 0px 0px 0px;
  font:25px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  margin:0px;
}

p{
  font:13px Open Sans;
  color:#6E6E6E;
  text-shadow:#000 0px 1px 5px;
  margin-bottom:30px;
}

.form{
  width:$full;
}

input[type="text"],input[type="email"],input[type="password"]{
  width:98%;
  padding:15px 0px 15px 8px;
  border-radius:5px;
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
	background:rgba(0,0,0,0.2);
  @include disable;
  border:1px solid rgba(0,0,0,1);
  margin-bottom:10px;
  color:#6E6E6E;
  text-shadow:#000 0px 1px 5px;
}

input[type="submit"]{
  width:100%;
  padding:15px;
  border-radius:5px;
  @include disable;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font:14px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  border:1px solid #000;
  opacity:0.7;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
}

input:focus{
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.7), 0 1px 1px -1px rgba(255,255,255,0.3);
  background:rgba(0,0,0,0.3);
  @include easeme;
}

input[type="submit"]:hover{
  opacity:1;
  cursor:pointer;
}

.name-help,.email-help{
  display:none;
  padding:0px;
  margin:0px 0px 15px 0px;
}


    </style>

<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "quidproquo";
                //echo md5("asdasd");
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error)
                    die("Connection failed: " . $conn->connect_error);

                if (isset($_POST['Insert_todb']))
                {
                  if(isset($_GET['variable'])){
                $variable = $_GET['variable'];
                } else{
                $variable = "";
                }
                                    $first_name=$_POST['first_name'];
                                    // $customer_id=$_POST['customer_id'];
                                     $last_name=$_POST['last_name'];
                                     $password=md5($_POST['password']);
                                     //$password=md5('$password');
                                     $user_name =$_POST['user_name'];
                                     $email=$_POST['email'];
                                     $phone=$_POST['phone'];
                                  $add_statement="INSERT INTO user_login VALUES('','$user_name','$password','$email','$phone','$first_name','$last_name');";
$check="SELECT * FROM user_login WHERE username = '$_POST[user_name]'";
//echo $user_name;
$rs = mysqli_query($conn,$check);
//$data = mysqli_fetch_array($rs, MYSQLI_NUM);
echo "<div id='username_pannel'>";
if (mysqli_num_rows($rs) > 0) {
  echo "<script>alert('Username already exists');</script>";
}

else
{
  if ($conn->query($add_statement) === TRUE)
                                  {
                                  //  echo md5($password);
                                    echo "<h3 id='record_success'>New record added successfully</h3>";
                                  }
                                  else
                                  {
                                      echo "Error: " . $add_statement . "<br>" . $conn->error;
                                  }
}
                echo "</div>";
                }
        elseif (isset($_POST['log_in'])) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $check = "select user_name from customer where user_name='$user' and password='$pass'";

          $result = $conn->query($check);
          if ($result->num_rows > 0) {
            while ($row =  $result->fetch_assoc())//mysql_fetch_array ($result))
                              {
                    echo "<h3 id='record_success'> welcome  ".$row['user_name'] . "</h3>";
                  echo "<style type='text/css'>.un_logged{
                          display:none;
                      }
                      .btn_add{
                        display:block;
                      }
                      .logged{
                        display:block;
                      }
                      </style>"
                      ;
                                }
                                    }
                                    else {
                                      echo "<h3 id='user_error'>Incorrect username or password</h3>";
                                    }
                                                    }
                  else {
                    echo "<div></div>";
                  }


                $conn->close();
                ?>






  <script>
                $(".txtb2 input").on("focus",function()
                {
                    $(this).addClass("focus");
                });
        
                $(".txtb2 input").on("blur",function()
                {
                    if($(this).val() == "")
                    $(this).removeClass("focus");
                });
            
    </script>

        </body>
        </html>
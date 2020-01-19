<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- jquery ko lagi -->
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- external stylesheet -->
    <link rel="stylesheet" href="CSS/sidebar.css">
    <title>Document</title>
</head>
<body>
<div id="container">
        <div id="header">
            <!-- <a href=""><h1>QPQ</h1></a> -->
            <div class="menu-bar">
                <span class="fas fa-bars"></span>
            </div>
            
        </div>

            <div class="col-2">
                <ul class="menu">
                <a href="../QuidProQuo.php" style="text-decoration:none;color:red;"><img src="../img/logo.png" class="logo" height="100px" width="180px"></a>
                    <li><a href="../QuidProQuo.php"><i class="fas fa-indent"></i><span class="text"> Index</span></a></li>
                    <li><a href="board.php"><i class="fas fa-home"></i><span class="text" > Home</span></a></li>
                    <li><a href="listeditems.php"><i class="fas fa-list"></i><span class="text"> Listed Items</span></a></li>
                    <li style="background-color: #da8ff8;margin-left: -39px;"><a href="additems.php"><i class="fas fa-plus"></i><span class="text"> Add Items</span></a></li>
                    <li><a href="tradeoffers.php"><i class="fas fa-sign-in-alt"></i><span class="text"> Trade Offers</span></a></li>
                    <li><a href="aboutus.php"><i class="fas fa-address-card"></i><span class="text"> About Us</span></a></li>
                    <li><span class="logged_in"> <a href="../QuidProQuo.php"><i class="fas fa-power-off"></i> Logout</a></span></li>
               
                </ul>
            </div>


            <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
              <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

              <div class="wrapper">
            
  
            <form class="form" method="post" action="additems.php">
                <div class="name-section">
                  <input type="text" class="name" placeholder="Product Name" name="first_name" autocomplete="off" required="required">
                  <input type="text" class="name" placeholder="Product Description" name="last_name" autocomplete="off" required="required">
                </div>
                <div>
                    <p class="name-help">Please enter product name and description.</p>
                </div>

                <div class="email-section">
                  <input type="text" class="email" placeholder="Worth" name="user_name" autocomplete="off" required="required">
                </div>
    
                <div>
                  <p class="email-help">Please enter your product's worth value</p>
                </div>
  <br><Br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <span data-placeholder="Image:"></span>
                <br><Br>
                <input type="submit" class="submit" value="Confirm Upload">
    
    </form>


<?php

if(isset($_POST["submit"]))
{
        $target_random = random_string(10);
        $target_file = $target_random . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $image_name = basename( $_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                //echo "File is not an image.";
                $uploadOk = 0;
            }

// Check if file already exists
                if (file_exists($target_file)) {
                  //  echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
  //  echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "successful";
	echo $image_name;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// connecting to database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "quidproquo";
                //echo md5("asdasd");
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error)
                    die("Connection failed: " . $conn->connect_error);
               // $p_id=$_POST['product_id'];
                $p_name=$_POST['first_name']; //product name
                $p_price=$_POST['user_name'];//product worth
                
                $p_imgsrc = $target_file;
                $p_description = $_POST['last_name']; // product description

                $add_pro="INSERT INTO product VALUES('','$p_name','$p_description','$p_imgsrc','$p_price','13');";
                if ($conn->query($add_pro) === TRUE)
{
  //echo md5($password);
    echo "New product created successfully";
}
else
{
    echo "Error: " . $add_pro . "<br>" . $conn->error;
}

}






function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

//echo random_string(50);
?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
  margin-left:700px;
  margin-top : 200px;
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
</body>
</HTML>
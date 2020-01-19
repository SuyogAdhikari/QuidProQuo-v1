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
    <link rel="stylesheet" href="CSS/boardStyle.css">
    <title>Document</title>
</head>
<body style="overflow-x:hidden;">

    <script>
        $(function () {
            $('.menu-bar').on('click', function () {
                $(".menu").slideToggle();
            });
        });
    </script>

    <div id="container">
        <div id="header">
            <!-- <a href=""><h1>QPQ</h1></a> -->
            <div class="menu-bar">
                <span class="fas fa-bars"></span>
            </div>
            <form>
                <input type="text" placeholder="Search" class="search"></span></input>
            </form>
        </div>
<div id="content">
            <div class="col-2">
                <ul class="menu">
                <a href="../QuidProQuo.php" style="text-decoration:none;color:red;"><img src="../img/logo.png" class="logo" height="100px" width="180px"></a>
                    <li><a href="../QuidProQuo.php"><i class="fas fa-indent"></i><span class="text"> Index</span></a></li>
                    <li><a href="board.php"><i class="fas fa-home"></i><span class="text" > Home</span></a></li>
                    <li><a href="listeditems.php"><i class="fas fa-list"></i><span class="text"> Listed Items</span></a></li>
                    <li><a href="additems.php"><i class="fas fa-plus"></i><span class="text"> Add Items</span></a></li>
                    <li style="background-color: #da8ff8;margin-left: -39px;"><a href="tradeoffers.php"><i class="fas fa-sign-in-alt"></i><span class="text"> Trade Offers</span></a></li>
                    <li><a href="aboutus.php"><i class="fas fa-address-card"></i><span class="text"> About Us</span></a></li>
                    <li><span class="logged_in"> <a href="../QuidProQuo.php"><i class="fas fa-power-off"></i> Logout</a></span></li>
               
                </ul>
            </div>


            <div class="col-5">
                <div class="item_container">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quidproquo";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error)
                          die("Connection failed: " . $conn->connect_error);

                    $check = "select * from product";

                    $result = $conn->query($check);

                    while($row = $result->fetch_assoc())
                    {
                        //THIS IS FOR CARD DISPLAY
                        $product_name = $row['product_name'];
                        $image = $row['dbimage'];
                        $product_description = $row['product_description'];
                        $worth = $row['worth'];

                        
                        if($image==NULL)
                          {
                            $image = "temp.png";
                          }

                          if($product_description == NULL)
                          {
                            $product_description = "No description available";
                          }

                          echo "<div class='row special-list' style='width:340px;height:100%;display:inline-block;margin-right:30px;'>
                          <div class='col-lg-3 col-md-6 special-grid best-seller'>
                              <div class='products-single fix image'>
                                  <div class='box-img-hover'>
                                      <img src=".$image." class='img-fluid' alt='Image'>
                                      <div class='mask-icon'>
                                            <span class='logged_in'>    <a class='cart' href='#' style='text-decoration:none;'>Ready To Trade</a></span>
                                        
                                           <span class='logged_out'> <a class='cart' href='Signin.php' style='text-decoration:none;'>Login First</a></span>
                                       </div>
                                  </div>
                                <a href='ItemDescriptionAccept.php' style='text-decoration:none;'>
                                  <div class='why-text'>
                                  
                                      <h2>".$product_name."</h2>
                                      <h4>".$product_description."</h4>
                                      <h5>".$worth. " NPR</h5>
                                  </div>
                                  </a>
                              
                                </div>
                          </div>
                      </div>";
                      }
                    ?>
</body>
</HTML>
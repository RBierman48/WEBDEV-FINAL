
<?php 

include('registerProcess.php'); 


//start session
session_start();



require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\component.php');
require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\CreateDb.php');

//create instance of Create db class

$database = new CreateDb();
$database->_constuct("Productdb", "Producttb");


?>




<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8" />-->
    <title>Eclipse Games - Account</title>
    <link rel="stylesheet" type="text/css" href="UserHomePageStyle.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->
    <div class="body">
       
     

            <div class="form-container">
          
              <h3>Welcome USER!</h3>
              <br><br>
              <a href='../2 Shopping Cart Page/ShoppingCart.php'>
              <button class="user-directory"><strong>My Cart</strong>
              <?php
                  if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<h5>( $count items )</h5>";
                  }else{
                    echo "<h5>( 0 items )</h5>";
                  }
                  
                  ?>

              </button>
              </a>
              <a href='../2 Shopping Cart Page/WishList.php'>
              <button class="user-directory"><strong>Wish List</strong>
              <?php
                  if(isset($_SESSION['wishlist'])){
                    $count = count($_SESSION['wishlist']);
                    echo "<h5>( $count items )</h5>";
                  }else{
                    echo "<h5>( 0 items )</h5>";
                  }
                  
                  ?>
              </button>
              </a>

              <button class="user-directory">Orders</button>
             
              

            </div>

    </div>

    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>
    <br /><br />

    <!------------JS FOR TOGGLE FORM------------------------------->
    <script>

        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var indicator = document.getElementById("indicator");

        function register() {
            regform.style.transform = " translateX(0px)";
            loginform.style.transform = " translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login() {
            regform.style.transform = " translateX(500px)";
            loginform.style.transform = " translateX(500px)";
            indicator.style.transform = "translateX(-10px)";
        }


    </script>

</body>
</html>
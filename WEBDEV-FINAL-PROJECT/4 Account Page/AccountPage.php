
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
    <link rel="stylesheet" type="text/css" href="AccountPageStyle.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->
    <div class="body">
        <div class="container">
     

            <div class="form-container">
                <div class="form-btn">
                    <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                    <hr id="indicator" />
                </div>
                <form action="loginProcess.php" method="POST" id="loginform">
                    <input type="text" name="uname" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" name="btnLogin" class="Logbtn">Login</button>
                    <a href="">Forgot Password</a>
                </form>

                <form action="registerProcess.php" method="POST" id="regform">
          
                    <input type="text" name ="uname" placeholder="Username" />
                    <input type="text" name="email" placeholder="Email" />

                    <input type="text" name="password" placeholder="Password" />
                    <button type="submit" name ="btnRegister" class="Regbtn">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>

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
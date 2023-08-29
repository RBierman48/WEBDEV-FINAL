







<?php

//start session
session_start();



require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\component.php');
require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\CreateDb.php');

//create instance of Create db class

$database = new CreateDb();
$database->_constuct("Productdb", "Producttb");

if(isset($_POST['add'])){
    //print_r($_POST['product_id']);
   if(isset($_SESSION['cart'])){


    $item_array_id = array_column($_SESSION['cart'], "product_id");
 

if(in_array($_POST['product_id'], $item_array_id)){
    echo "<script>alert('Product is already added in the cart..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage3.php'</script>";
}else{
    echo "<script>alert('Product added to the cart..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage3.php'</script>";
    $count = count($_SESSION['cart']);
    $item_array = array(
        'product_id' => $_POST['product_id']
    );

    $_SESSION['cart'][$count] = $item_array;
}


    }else{

    $item_array = array(
        'product_id' => $_POST['product_id']
    );

    //new session variable
    $_SESSION['cart'][0] = $item_array;
   //print_r($_SESSION['cart']);
   }
}


if(isset($_POST['save'])){
    //print_r($_POST['product_id']);
   if(isset($_SESSION['wishlist'])){


    $item_array_id = array_column($_SESSION['wishlist'], "product_id");
 

if(in_array($_POST['product_id'], $item_array_id)){
    echo "<script>alert('Product is already added to wishlist..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage3.php'</script>";
}else{
    echo "<script>alert('Product added to your Wish List..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage3.php'</script>";
    $count = count($_SESSION['wishlist']);
    $item_array = array(
        'product_id' => $_POST['product_id']
    );

    $_SESSION['wishlist'][$count] = $item_array;
}


    }else{

    $item_array = array(
        'product_id' => $_POST['product_id']
    );

    //new session variable
    $_SESSION['wishlist'][0] = $item_array;
   //print_r($_SESSION['wishlist']);
   }
}




?>






<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8" />-->
    <title>Eclipse Games - Sonic Frontiers</title>
    <link rel="stylesheet" type="text/css" href="GameDescriptionPage3Style.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>


    <!------------------------BODY------------------------------->
    <div class="body">
        
        <div class="small-container-single-product">
       
        <?php 
           $result = $database->getData();
           $loop = 0;
           do{
            $row = mysqli_fetch_assoc($result);
            if($row['id'] > 2){
            component_DescriptionPage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page'], $row['screenshot_1'], $row['screenshot_2'], $row['screenshot_3'], $row['screenshot_4']);
            }
            $loop++;
           }
           while ($loop < 3);

           

        ?> 
            <br /><br />

            <h3>Product Details<i class="fa fa indent"></i></h3>
            <p>
                        Join Sonic on his latest adventure in Sonic Frontiers. Sprint through a vast open zone using Sonic’s super speed, attack enemies head on, and gain new skills to boost Sonic’s range of moves. An epic adventure awaits you in this action-adventure game.
                        <br /><br />
                        Experience Sonic like never before! Worlds are colliding in Sonic the Hedgehog’s newest high-speed adventure! Accelerate to new heights, battle hordes of powerful enemies, and experience the thrill of high velocity, open-zone acrobatic action and platforming freedom, across the FIVE MASSIVE Starfall Islands. Welcome to the evolution of Sonic games!

                    </p>



                    <br /><br />
        </div>
            
        
    </div>

    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>

    <!----------JS FOR PICTURE SWAP------------------------------->
    <script>
        var productimg = document.getElementById("product-img");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function ()
        {
            productimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            productimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            productimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            productimg.src = smallimg[3].src;
        }
        smallimg[4].onclick = function () {
            productimg.src = smallimg[4].src;
        }
        smallimg[5].onclick = function () {
            productimg.src = smallimg[5].src;
        }


    </script>




</body>
</html>
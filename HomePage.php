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
    echo "<script>window.location = 'HomePage.php'</script>";
}else{
    echo "<script>alert('Product added to the cart..!')</script>";
    echo "<script>window.location = 'HomePage.php'</script>";
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
    echo "<script>window.location = 'HomePage.php'</script>";
}else{
    echo "<script>alert('Product added to your Wish List..!')</script>";
    echo "<script>window.location = 'HomePage.php'</script>";
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
    <title>Eclipse Games</title>
    <link rel="stylesheet" type="text/css"  href="HomePage-Style.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

   <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->
    <div class="body">
        
        <h1 class="title">NEW RELEASES</h1>
        <div class="row">
            <?php 
           $result = $database->getData();
           $loop = 0;
           do{
            $row = mysqli_fetch_assoc($result);
            component($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
            $loop++;
           }
           while ($loop < 3);

           
            

        ?> 
        </div>  

        <br>

        <h1 class="title">PRE-ORDER NOW</h1>
        <div class="row">
        <?php 
           $result = $database->getData();
           $loop = 0;
           do{
            $row = mysqli_fetch_assoc($result);

            if($row['id'] > 3){
                component($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
            }
   
            $loop++;
           }
           while ($loop < 6)
        ?>  
        </div>

        <br>

        <h1 class="title">DEALS</h1>
        <div class="row">
        <?php 
           $result = $database->getData();
           $loop = 0;
           do{
            $row = mysqli_fetch_assoc($result);

            if($row['id'] > 6){
                component($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
            }
           
            
            $loop++;
           }
           while ($loop < 9)
            
        
        ?>
        </div>

        <br /><br /><br /><br />
    </div>

    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>
</body>
</html>
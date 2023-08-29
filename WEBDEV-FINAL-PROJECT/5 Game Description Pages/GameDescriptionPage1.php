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
    echo "<script>window.location = 'GameDescriptionPage1.php'</script>";
}else{
    echo "<script>alert('Product added to the cart..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage1.php'</script>";
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
    echo "<script>window.location = 'GameDescriptionPage1.php'</script>";
}else{
    echo "<script>alert('Product added to your Wish List..!')</script>";
    echo "<script>window.location = 'GameDescriptionPage1.php'</script>";
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
    <title>Eclipse Games - God of War: Ragnarok</title>
    <link rel="stylesheet" type="text/css" href="GameDescriptionPage1Style.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->
    <div class="body">
        
        <div class="small-container-single-product">
       
        <?php 
           $result = $database->getData();
           $loop = 0;
           do{
            $row = mysqli_fetch_assoc($result);
            component_DescriptionPage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page'], $row['screenshot_1'], $row['screenshot_2'], $row['screenshot_3'], $row['screenshot_4']);
            $loop++;
           }
           while ($loop < 1);

           

        ?> 
            <br /><br />

            <h3>Product Details<i class="fa fa indent"></i></h3>
                    <p>
                        Embark on a mythic journey for answers and allies before Ragnarök arrives. Embark on an epic and heartfelt journey as Kratos and Atreus struggle with holding on and letting go.
                        <br /><br />

                        God of War Ragnarök Launch Edition includes:
                        <br />
                        Voucher code to redeem all God of War Ragnarök pre-order digital bonuses. Unlock in-game items via story progression.
                        Account for PlayStation™Network, and internet connection required for code redemption.
                        Against a backdrop of Norse Realms torn asunder by the fury of the Aesir, they’ve been trying their utmost to undo the end times. But despite their best efforts, Fimbulwinter presses onward.

                        Witness the changing dynamic of the father-son relationship as they fight for survival; Atreus thirsts for knowledge to help him understand the prophecy of “Loki”, as Kratos struggles to break free of his past and be the father his son needs.
                        <br /><br />
                        See for yourself how fate will force a choice upon them: between their own safety or the safety of the realms. All the while, hostile Asgardian forces assemble…


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


    </script>




</body>
</html>
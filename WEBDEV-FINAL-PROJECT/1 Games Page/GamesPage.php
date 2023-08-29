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
    echo "<script>window.location = 'GamesPage.php'</script>";
}else{
    echo "<script>alert('Product added to cart..!')</script>";
    echo "<script>window.location = 'GamesPage.php'</script>";
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
   print_r($_SESSION['cart']);
   }
}

if(isset($_POST['save'])){
    //print_r($_POST['product_id']);
   if(isset($_SESSION['wishlist'])){


    $item_array_id = array_column($_SESSION['wishlist'], "product_id");
 

if(in_array($_POST['product_id'], $item_array_id)){
    echo "<script>alert('Product is already added to wishlist..!')</script>";
    echo "<script>window.location = 'GamesPage.php'</script>";
}else{
    echo "<script>alert('Product added to your Wish List..!')</script>";
    echo "<script>window.location = 'GamesPage.php'</script>";
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
   print_r($_SESSION['wishlist']);
   }
}


?>


<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8" />-->
    <title>Eclipse Games - Games</title>
    <link rel="stylesheet" type="text/css" href="GamesPage-Style.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->
          <div class="body">

              <div class="small-container">
                 <h1 class="title">PS4 / PS5</h1>
                  <br />
                  <select>
                      <option>Sort by Price</option>
                      <option>Sort by Popularity</option>
                      <option>Sort by Rating</option>
                      <option>Sort by Genre</option>
                  </select>
                  <div class="row">
                  <?php 
        $result = $database->getData();
        $loop = 0;
        do{
         $row = mysqli_fetch_assoc($result);

         if($row['id'] > 9){
             component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
         }

         $loop++;
        }
        while ($loop < 12)
        ?> 

        </div>
<hr>
        <div class="row">
        <?php 
        $result = $database->getData();
        $loop = 0;
        do{
         $row = mysqli_fetch_assoc($result);

         if($row['id'] > 13){
            component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
         }

         $loop++;
        }
        while ($loop < 15)
        ?> 
        </div>

<hr>
        <div class="row">
        <?php 
        $result = $database->getData();
        $loop = 0;
        do{
         $row = mysqli_fetch_assoc($result);

         if($row['id'] > 16){
            component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
         }

         $loop++;
        }
        while ($loop < 17)
        ?> 
        </div>

<hr class="hr-line">
<br><br>
                          <div class="small-container">
                              <h1 class="title">XBOX SERIES X / XBOX ONE</h1>
                              <br />
                              <select>
                                  <option>Sort by Price</option>
                                  <option>Sort by Popularity</option>
                                  <option>Sort by Rating</option>
                                  <option>Sort by Genre</option>
                              </select>
                              <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 19){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 21)
                                    ?> 
                                </div>
<hr>

                                <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 22){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 24)
                                    ?> 
                                </div>
<hr>
                                <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 24){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 25)
                                    ?> 
                                </div>
              <br /><br />

              <hr class="hr-line">
              <br><br>
              <div class="small-container">
                  <h1 class="title">NINTENDO</h1>
                  <br />
                  <select>
                      <option>Sort by Price</option>
                      <option>Sort by Popularity</option>
                      <option>Sort by Rating</option>
                      <option>Sort by Genre</option>
                  </select>
    
                  <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 26){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 28)
                                    ?> 
                                </div>
               
              </div>


              <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 29){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 31)
                                    ?> 
                                </div>
               
              </div>

<hr>
              <div class="row">
                                    <?php 
                                    $result = $database->getData();
                                    $loop = 0;
                                    do{
                                    $row = mysqli_fetch_assoc($result);

                                    if($row['id'] > 32){
                                        component_gamePage($row['product_name'], $row['product_price'], $row['product_console'], $row['product_image'], $row['id'],$row['description_page']);
                                    }

                                    $loop++;
                                    }
                                    while ($loop < 33)
                                    ?> 
                                </div>
               
              </div>
         
          </div>

    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>
</body>
</html>
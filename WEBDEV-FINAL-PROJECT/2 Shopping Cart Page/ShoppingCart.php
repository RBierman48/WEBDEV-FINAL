
<?php

session_start();

require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\component.php');
require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\CreateDb.php');

$database = new CreateDb();
$database->_constuct("Productdb", "Producttb");

if(isset($_POST['remove'])){
 if($_GET['action'] == 'remove'){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['product_id'] == $_GET['id']){
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('Product has been Removed...!')</script>";
            echo "<script>window.location='ShoppingCart.php</script>";

        }
    }
 }
}

if(isset($_POST['save'])){
    //print_r($_POST['product_id']);
   if(isset($_SESSION['wishlist'])){


    $item_array_id = array_column($_SESSION['wishlist'], "product_id");
 

if(in_array($_POST['product_id'], $item_array_id)){
    echo "<script>alert('Product is already added to wishlist..!')</script>";
    echo "<script>window.location = 'ShoppingCart.php'</script>";
}else{


    if($_GET['action'] == 'save'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_id'] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product added your WishList..!')</script>";
                echo "<script>window.location = 'ShoppingCart.php'</script>";
    
            }
        }
     }









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
    <title>Eclipse Games - Cart</title>
    <link rel="stylesheet" type="text/css" href="Shopping Cart - Style.css" />
</head>
<body>

    <!------------------------HEADER------------------------------->

    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\header.php')?>
    <br /><br />

    <!------------------------BODY------------------------------->

    <div class="body">
        <div class="small-container cart page">
            <h1 class="cart-title">My CART: </h1>
            <br>
            <table>
                <tr>
                    <th>Product:
                        &nbsp;
                    <?php
                  if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<h5>($count items)</h5>";
                  }else{
                    echo "<h5>(0 items)</h5>";
                  }
                  
                  ?>


                    </th>
                    <th>Quantity:</th>
                    <th>Subtotal:</th>
                </tr>
       <?php
       $total = 0;
    if(isset($_SESSION['cart'])){
        $product_id=array_column($_SESSION['cart'], 'product_id');

        $result = $database->getData();
        while($row=mysqli_fetch_assoc($result)){
         foreach($product_id as $id){
             if($row['id'] == $id){
                 cart_Element($row['product_image'], $row['product_name'], $row['product_console'], $row['product_price'], $row['id']);
            $total = $total + (double) $row['product_price'];
                }
         }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }
    
       ?>
          
            </table>
        
           
            
               
       

       
          <div class="total-price">
              <table>
                  <tr>
                      <td>Subtotal:<?php
                  if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<h5>($count items)</h5>";
                  }else{
                    echo "<h5>(0 items)</h5>";
                  }
                  
                  ?></td>
                      <td>$<?php echo $total ?></td>
                  </tr>
                  <tr>
                      <td>Deliver:</td>
                      <td><strong>FREE</strong></td>
                  </tr>
                  <tr>
                      <td>Total:</td>
                      <td>$<?php echo $total ?></td>
                  </tr>
              </table>

          </div>

        </div>
      
    </div>

 
    <!------------------------FOOTER------------------------------->
    <?php require_once('C:\xampp\htdocs\2023 Projects\WEBDEV-FINAL-PROJECT\footer.php')?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>

    /*------Header-------------*/
    .header {
    max-width: 1500px;
    margin: auto;
    padding-left: 0px;
    padding-right: 0px;
}

.header .row {
    margin-top: 70px;
}

.row {
    display: flex;
    padding: 40px;
    column-gap: 100px;
    border: thin;
}

/*------Nav Bar-------------*/
a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: #000000;
    background-color: #fff;
}




.navbar {
    display: flex;
    align-items: center;
    padding: 20px;
    background-color: #000000;
}

    .navbar img:hover {
        border-block: thick;
        border-block-color: #ffffff;
    }

nav {
    flex: 1;
    text-align: right;
}
.search {
    width: 500px;
    display: flex;
    margin-top: 20px;
    margin-left: 40px;
}

.search-box {
    width: 250%;
    height: 40px;
    align-content: center;
    padding: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 1px solid #d1d1d1;
    text-transform: capitalize;
    background: white;
    color: #a9a9a9;
    outline: none;
}

.search-btn {
    justify-content: flex-end;
    width: 20%;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
    background: grey;
    color: black;
    text-transform: capitalize;
    font-size: 10px;
    font-weight: bold;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

nav ul {
    display: inline block;
    list-style-type: none;
    }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

#cart_count{
    font-size:x-large;
    font-weight: bolder;
     text-align: center;
     padding: 0 0.9rem 0.1rem 0.9rem;
     border-radius:3rem;
}

.text-warning{
    background-color: white;
    color:black;
}
            
.text-warning:hover{
    font-size:xx-large;
}



</style>

 
</head>
<body>


<div class="header">
        <div class="navbar">
            <!----NAVBAR---->
            <div class="logo">
                <a href="../0 HomePage/HomePage.php">
                    <img src="../Images/LOGO.png" width="300" height="100" />
                </a>
            </div>
            <div class="search">
                <input type="search\" class="search-box" placeholder="search by title, console or accessories">
                <button class="search-btn">search</button>
                &nbsp;&nbsp;&nbsp;
            </div>
            <nav>
                <ul>
                    <li><a href="../0 HomePage/HomePage.php">HOME</a></li>
                    <li><a href="../1 Games Page/GamesPage.php">GAMES</a></li>
                    <li><a href="../3 Accessories Page/AccessoriesPage.php">ACCESSORIES</a></li>
                    <li><a href="../4 Account Page/AccountPage.php">ACCOUNT</a></li>
                </ul>
            </nav>
            <a class="cart" href="../2 Shopping Cart Page/ShoppingCart.php">
                <!----CART---->
                 <img src="../Images/Shopping Cart Icon.jpg" width="30" height="30" />
                 &nbsp   
                 <?php
                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning\">$count</span>";
                    }else{
                        echo "<span id=\"cart_count\" class=\"text-warning\">0</span>";
                    }
                 ?>
                

            </a>
         
            <br />
        </div>
    </div>
    </body>
    </html>
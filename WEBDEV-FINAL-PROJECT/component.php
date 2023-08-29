<?php


//ADD to CART from HOME

function component($productname, $productprice, $productconsole, $productimg, $id, $description_page){
    $element = "
    
    <div class=\"col-1\">
    <form action=\"homepage.php\" method=\"POST\">
        <div class =\"card-body\">
        <a href= '$description_page'>
            <img src='$productimg' width=\"290\" height=\"270\" />
        </a>
            <h4 class =\"card-title\">$productname</h4>
            <small class=\"card-console\">$productconsole</small>
            <h4>
                <span class=\"price\">$$productprice</span>
            </h4>
    
            <br>
            <button type=\"submit\" name=\"add\" class=\"btnAdd\">Add to Cart</button>
            <button type=\"submit\" name=\"save\" class=\"btnSave\">Save to WishList</button>
            <input type=\"hidden\" name=\"product_id\" value= $id>
        </div>
    </form>
    <br>
</div>
<br>
    ";
    echo $element;
}



//ADD to WishList from HOME

function component_wishHOME($productname, $productprice, $productconsole, $productimg, $id, $description_page){
    $element = "
    
    <div class=\"col-1\">
    <form action=\"homepage.php\" method=\"POST\">
        <div class =\"card-body\">
        <a href= '$description_page'>
            <img src='$productimg' width=\"290\" height=\"270\" />
        </a>
            <h4 class =\"card-title\">$productname</h4>
            <small class=\"card-console\">$productconsole</small>
            <h4>
                <span class=\"price\">$$productprice</span>
            </h4>
    
            <br>
            <button type=\"submit\" name=\"add\" class=\"btnAdd\">Add to Cart</button>
            <button type=\"submit\" name=\"save\" class=\"btnSave\">Save to WishList</button>
            <input type=\"hidden\" name=\"product_id\" value= $id>
        </div>
    </form>
    <br>
</div>
<br>
    ";
    echo $element;
}















//ADD to CART from GAMEPAGE
function component_gamePage($productname, $productprice, $productconsole, $productimg, $id, $description_page){
    $element = "
    
    <div class=\"col-1\">
    <form action=\"GamesPage.php\" method=\"POST\">
        <div class =\"card-body\">
        <a href= '$description_page'>
            <img src='$productimg' width=\"290\" height=\"270\" />
        </a>
            <h4 class =\"card-title\">$productname</h4>
            <small class=\"card-console\">$productconsole</small>
            <h4>
                <span class=\"price\">$$productprice</span>
            </h4>
    
            <br>
            <button type=\"submit\" name=\"add\" class=\"btnAdd\">Add to Cart</button>
            <button type=\"submit\" name=\"save\" class=\"btnSave\">Save to WishList</button>
            <input type=\"hidden\" name=\"product_id\" value= $id>
        </div>
    </form>
    <br>
</div>
<br>
    ";
    echo $element;
}


//ADD to CART from GAMEPAGE
function component_accessoriesPage($productname, $productprice, $productconsole, $productimg, $id, $description_page){
    $element = "
    
    <div class=\"col-1\">
    <form action=\"AccessoriesPage.php\" method=\"POST\">
        <div class =\"card-body\">
        <a href= '$description_page'>
            <img src='$productimg' width=\"290\" height=\"270\" />
        </a>
            <h4 class =\"card-title\">$productname</h4>
            <small class=\"card-console\">$productconsole</small>
            <h4>
                <span class=\"price\">$$productprice</span>
            </h4>
    
            <br>
            <button type=\"submit\" name=\"add\" class=\"btnAdd\">Add to Cart</button>
            <button type=\"submit\" name=\"save\" class=\"btnSave\">Save to WishList</button>
            <input type=\"hidden\" name=\"product_id\" value= $id>
        </div>
    </form>
    <br>
</div>
<br>
    ";
    echo $element;
}


//ADD to CART from GAMEPAGE
function component_DescriptionPage($productname, $productprice, $productconsole, $productimg, $id, $description_page, $screenshot_1, $screenshot_2, $screenshot_3, $screenshot_4){
    $element = "
    
    <form action=\"$description_page\" method=\"POST\">
    <div class=\"row\">
        <div class=\"col-2\">
            <img src=\"$productimg\" class=\"main-photo\" width=\"600\" id=\"product-img\" />
            <div class=\"small-img-row\">
                <div class=\"small-img-col\">
                    <div class=\"small-img-col\">
                        <img src=\"$productimg\" width=\"600\" class=\"small-img\" />
                    </div>
                    <img src='$screenshot_1' width=\"600\" class=\"small-img\" />
                </div>
                <div class=\"small-img-col\">
                    <img src='$screenshot_2' width=\"600\" class=\"small-img\" />
                </div>
                <div class=\"small-img-col\">
                    <img src='$screenshot_3' width=\"600\" class=\"small-img\" />
                </div>
                <div class=\"small-img-col\">
                    <img src='$screenshot_4' width=\"600\" class=\"small-img\" />
                </div>
            </div>
        </div>
        <div class=\"col-2\">
            <p>Home / New Releases / $productname</p>
            <h1>$productname</h1>
            <h4>$$productprice</h4>
            <select>
                <option>PS5</option>
                <option>PS4</option>
                <option>Xbox Series X</option>
                <option>Xbox One</option>
            </select>
            <input type=\"number\" value=\"1\" />
            <button type=\"submit\" name=\"add\" class=\"btnAdd\">Add to Cart</button>
            <button type=\"submit\" name=\"save\" class=\"btnSave\">Save to WishList</button>
            <input type=\"hidden\" name=\"product_id\" value= $id>
</form>

<script>
        var productimg = document.getElementById(\"product-img\");
        var smallimg = document.getElementsByClassName(\"small-img\");

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



    ";
    echo $element;
}










function cart_Element($productimg, $productname, $productconsole, $productprice, $product_id){

$element = "


<tr>
<td>
    <div class=\"cart-info\">
<form action=\"ShoppingCart.php?action=remove&id=$product_id\"  method=\"POST\" class=\"cart-item\">
<img src='$productimg' width=\"290\" height=\"270\" />

    <p>
        $productname
        <br />
        $productconsole
    </p>
    <br /><br>
    <button class=\"btnRemove\" name=\"remove\">Remove</button>
    &nbsp;
    <button class=\"btnSave\">Save for Later</button>
    <input type=\"hidden\" name=\"product_id\" value= $product_id>

</form>
</div>
</td>
<td><input type=\"number\" value=\"1\" /></td>
<td>$$productprice</td>
</tr>


    ";
echo $element;


}

    
function wishlist_Element($productimg, $productname, $productconsole, $productprice, $product_id, ){

    $element = "
    
    
    <tr>
    <td>
        <div class=\"cart-info\">
    <form action=\"WishList.php?action=remove&id=$product_id\"  method=\"POST\" class=\"wishlist-item\">
    <img src='$productimg' width=\"290\" height=\"270\" />
    
        <p>
            $productname
            <br />
            $productconsole
        </p>
        <br /><br>
        <button class=\"btnRemove\" name=\"remove\">Remove</button>
        &nbsp;
        <button class=\"btnAdd\" name=\"add\">Add to Cart</button>
        <input type=\"hidden\" name=\"product_id\" value= $product_id>
    
    </form>
    </div>
    </td>
    <td><input type=\"number\" value=\"1\" /></td>
    <td>$$productprice</td>
    </tr>
    
    
        ";
    echo $element;
    
    
    }
   





?>
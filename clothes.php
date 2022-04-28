<?php 

include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Ok we got a POST, probably from a FORM, read from $_POST.
        var_dump($_POST); //Use this to see what info we got!
    }

?>

<!--<!DOCTYPE html>-->
<html>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="clothes.css">
    <script src = "index.js"></script>
    <header>
        <h1>Edgy Engineers</h1>
    </header>
    <body>
        <div class="navbar">
            <li><a class="" href="EdgyEngineers.html">HOME</a></li>
            <li><a class="" href="contact.html">CONTACT</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">SHOP</button>
                        <div class="dropdown-content">
                            <a  class = "active" href="clothes.html">Clothes</a>
                            <a href="acessories.html">Acessories</a>
                            <a href="poster.html">Posters</a>
                        </div>
                </div>
            </li>
            <li class = "right"><a class="" href="login.html">LOGIN</a></li>
            <li class = "right"><a class="" href="cart.html">CART</a></li>
        </div>
        <?php
            if(array_key_exists('greyHoodieBtn', $_POST)) {
                callPHP();
            }

            function callPHP() {
                include 'addtocart.php';
            }
        ?>
        <div>
            <h1 class="pagetitle">Clothes</h1>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <h4 class = "title">Grey Hoodie</h4>
                <h6>$40</h6>
                <div class="images"><img src="clothingImages/greyHoodie.jpeg"></div>
                <div><button id ="greyHoodieBtn">ADD TO CART</button></div>
            </div>
            <div class="grid-item">
                    <h4 class = "title">KU Engineering Shirt</h4>
                    <h6>$60</h6>
                    <div class="images"><img src="clothingImages/KUEngineerShirt.jpeg"></div>
                    <div><button id = "KUshirtbtn">ADD TO CART</button></div>
            </div>
            <div class="grid-item">
                <h4 class = "title">Orange Workwear</h4>
                    <h6>$100</h6>
                    <div class="images"><img src="clothingImages/orange2Piece.jpeg"></div>
                    <div><button id = "orangeWorkwearBtn">ADD TO CART</button></div>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Computer Science Shirt</h4>
                    <h6>$30</h6>
                    <div class="images"><img src="clothingImages/quirkyShirt.jpeg"></div>
                    <div><button id = "funnyShirtBtn">ADD TO CART</button></div>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Sweatshirt</h4>
                    <h6>$50</h6>
                    <div class="images"><img src="clothingImages/sweatshirt2.jpg"></div>
                    <div><button id = "funnysweatshirtBtn">ADD TO CART</button></div>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Shirt</h4>
                    <h6>$10,000</h6>
                    <div class="images"><img src="clothingImages/trustMesShirt.jpg"></div>
                    <div><button id = "trustMeBtn">ADD TO CART</button></div>
            </div>
          </div>


        
    </body>
</html>

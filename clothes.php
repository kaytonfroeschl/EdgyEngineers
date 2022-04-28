<!--<!DOCTYPE html>-->
<?php
    include('config.php');
?>

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
                            <a  class = "active" href="clothes.php">Clothes</a>
                            <a href="acessories.html">Acessories</a>
                            <a href="poster.html">Posters</a>
                        </div>
                </div>
            </li>
            <li class = "right"><a class="" href="index.html">LOGIN</a></li>
            <li class = "right"><a class="" href="cart.php">CART</a></li>
        </div>
        <div>
            <h1 class="pagetitle">Clothes</h1>
        </div>

      <?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
        /* check connection */
        if ($mysqli->connect_errno)
        {
          printf("Connect failed: %s\n", $mysqli->connect_error);
          exit();
        }

            if(isset($_POST['greyHoodieBtn'])){
                //$current_cost = "SELECT total_cost FROM Cart WHERE MAX(cart_id)";
                //$total_cost = $current_cost + 40;

                //$sql = "SELECT quantity FROM Cart WHERE
                //cart_id = SELECT MAX(cart_id) FROM Cart";
                //$result = $mysqli->query($sql);

                //echo $result

                //$sql = "UPDATE Cart SET quantity='1' total_cost='40' WHERE
                //cart_id = SELECT MAX(cart_id) FROM Cart";
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 40)";
                if ($mysqli->query($sql) === TRUE) {
                    //echo "New record created successfully";
                } else {
                      //echo "Something went wrong";
                }
            }

            if(isset($_POST['KUshirtbtn'])){
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 60)";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                      echo "Something went wrong";
                }
            }

            if(isset($_POST['orangeWorkwearBtn'])){
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 100)";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                      echo "Something went wrong";
                }
            }

            if(isset($_POST['funnyShirtBtn'])){
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 30)";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                      echo "Something went wrong";
                }
            }

            if(isset($_POST['funnysweatshirtBtn'])){
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 50)";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                      echo "Something went wrong";
                }
            }

            if(isset($_POST['trustMeBtn'])){
                $sql = "INSERT INTO Cart (quantity, total_cost) VALUES (1, 10000)";
                if ($mysqli->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                      echo "Something went wrong";
                }
            }
            $mysqli->close();
        ?>

        <div class="grid-container">
            <div class="grid-item">
                <h4 class = "title">Grey Hoodie</h4>
                <h6>$40</h6>
                <div class="images"><img src="clothingImages/greyHoodie.jpeg"></div>
                <form method="post"><input type="submit" name="greyHoodieBtn" class="button" value="ADD TO CART" /></form>
            </div>
            <div class="grid-item">
                    <h4 class = "title">KU Engineering Shirt</h4>
                    <h6>$60</h6>
                    <div class="images"><img src="clothingImages/KUEngineerShirt.jpeg"></div>
                    <form method="post"><input type="submit" name="KUshirtbtn" class="button" value="ADD TO CART" /></form>
            </div>
            <div class="grid-item">
                <h4 class = "title">Orange Workwear</h4>
                    <h6>$100</h6>
                    <div class="images"><img src="clothingImages/orange2Piece.jpeg"></div>
                    <form method="post"><input type="submit" name="orangeWorkwearBtn" class="button" value="ADD TO CART" /></form>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Computer Science Shirt</h4>
                    <h6>$30</h6>
                    <div class="images"><img src="clothingImages/quirkyShirt.jpeg"></div>
                    <form method="post"><input type="submit" name="funnyShirtBtn" class="button" value="ADD TO CART" /></form>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Sweatshirt</h4>
                    <h6>$50</h6>
                    <div class="images"><img src="clothingImages/sweatshirt2.jpg"></div>
                    <form method="post"><input type="submit" name="funnysweatshirtBtn" class="button" value="ADD TO CART" /></form>
            </div>
            <div class="grid-item">
                <h4 class = "title">Funny Shirt</h4>
                    <h6>$10,000</h6>
                    <div class="images"><img src="clothingImages/trustMesShirt.jpg"></div>
                    <form method="post"><input type="submit" name="trustMeBtn" class="button" value="ADD TO CART" /></form>
            </div>
          </div>



    </body>
</html>

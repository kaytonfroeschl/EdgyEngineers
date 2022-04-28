<!--<!DOCTYPE html>-->
<html>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>
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
                        <a href="clothes.php">Clothes</a>
                        <a href="acessories.html">Acessories</a>
                        <a href="poster.html">Posters</a>
                    </div>
            </div>
        </li>
        <li class = "right"><a class="" href="index.html">LOGIN</a></li>
        <li class = "right"><a class="" href="checkSession.php">CART</a></li>
    </div>

    <h2>Shopping Cart</h2>
    <h4>Sub-Total: $40</h4>
    <h4>1 Item</h4>
    <form method="post"><input type="submit" name="CheckoutBtn" class="button" value="Checkout" /></form>

    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
    /* check connection */
    if ($mysqli->connect_errno)
    {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }

        if(isset($_POST['CheckoutBtn'])){
          $sql = "UPDATE Products SET stock_quantity='99' WHERE product_id='1'";
          if ($mysqli->query($sql) === TRUE) {
              //echo "New record created successfully";
          } else {
                //echo "Something went wrong";
          }
        }
    ?>

    <!--<hr>
    <div class=”checkout”>
    <div class=”total”>
    <div>
    <div class=”Subtotal”>Sub-Total</div>
    <div class=”items”>1 item</div>
    </div>
    <div class=”total-amount”>$40</div>
    </div>
    <form method="post"><input type="submit" name="CheckoutBtn" class="button" value="Checkout" /></form>
  </div>-->


</body>
</html>

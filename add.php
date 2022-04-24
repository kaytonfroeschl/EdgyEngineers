<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
    <header>
        <h1>Edgy Engineers</h1>
    </header>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Add Product</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>ID</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="ID" 
                    name="pid" />
            </div>
  
            <div class="form-group">
                <label>Price</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Price" 
                    name="pprice" />
            </div>

            <div class="form-group">
                <label>Color</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Color" 
                    name="pcolor" />
            </div>

            <div class="form-group">
                <label>Size</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Size" 
                    name="psize" />
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Name" 
                    name="pname" />
            </div>

            <div class="form-group">
                <label>Stock Quantity</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Quantity" 
                    name="s_qty" />
            </div>

            <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $product_id=$_POST['pid'];
            $p_price=$_POST['pprice'];
            $p_color=$_POST['pcolor'];
            $p_size=$_POST['psize'];
            $p_name=$_POST['pname'];
            $stock_quantity=$_POST['s_qty'];
      
  
            $q="insert into c756b631(product_id,
            p_price, p_color, p_size, p_name, stock_quantity)
            values('$product_id','$p_price', '$p_color', '$p_size',
            '$p_name','$stock_quantity')";
  
            mysqli_query($con,$q);
            header("location:index.php");
        }
          
        // if(!mysqli_query($con,$q))
        // {
            // echo "Value Not Inserted";
        // }
        // else
        // {
            // echo "Value Inserted";
        // }
    ?>
</body>
  
</html>
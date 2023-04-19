<!-- HTML code for the product listing page -->
<?php
require_once("config.php");

// Perform query
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Listing Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
    <?php    
    while($row = $result->fetch_assoc()){
    ?>
    <!-- Product card component -->
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="C:\Users\NEWTON\Pictures\Screenshots\Screenshot 2023-04-09 090521.png" class="card-img-top" alt="<?php echo $row['product_name']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                <p class="card-text"><?php echo $row['description']; ?></p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
    </div>
    <?php    
     }
    ?>



    </div>
    <div class="product-card" id="product-1">
    <h3>Cabbage</h3>
    <p>Price: ksh10</p>
    <button class="edit-btn" id="edit-1">Edit</button>
    <button class="delete-btn" id="delete-1">Delete</button>
    </div>


</div>

<!-- Include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>

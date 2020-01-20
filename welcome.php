<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
     
    } 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/shopping-cart-style.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
   
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
 <div class="container">
 </div>
 <?php include 'imageslider.php';?>
 <?php include 'shoppingcart.php';?>
 <div id="product-grid">
	<div class="txt-heading">Products</div>
	
		<div class="product-item">
        <a href="accessories.php">
			<div class="product-image"><img src="images/product-images/accessories.jpg" style="width:250px;height:155px;"></div>
			<div class="product-tile-footer">
			<div class="product-title">Accessories</div> 
			</div>
        </a>
		</div>
        <div class="product-item">
        <a href="laptop.php">
			<div class="product-image"><img src="images/product-images/laptop.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">Laptop</div> 
			</div>
        </a>
		</div>
        <div class="product-item">
        <a href="mobilephones.php">
			<div class="product-image"><img src="images/product-images/mobile phones.jpg" style="width:250px;height:155px;"></div>
			<div class="product-tile-footer">
			<div class="product-title">Mobile Phones</div> 
			</div>
        </a>
		</div>
        
	
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
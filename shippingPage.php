<?php 
	include('./includes/DAOs.php');
	require_once('./includes/DTOs.php');
    session_start();
?>	

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Wham-Bham-Azon</title>
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href="css/shop-homepage.css" rel="stylesheet">
		
        
      
   </head>

<body>
<?php
include("./includes/navLoggedIn.php");
?>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">User Account</p>
                <div class="list-group">
                    <a href="/330OnlineStore/shippingController.php" class="list-group-item active">Edit Shipping</a>
                    <a href="/330OnlineStore/billingController.php" class="list-group-item">Edit Billing</a>
                    <a href="#" class="list-group-item">Update Password</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <div class="caption-full">
                   
                        <h2>Shipping Information</h4>

                            <form role = "update form" autocomplete = "off" action = "./ship.php" method="post">
                            <div class = "form-group">
                             
                             <input type = "text" name = "shipAdd" class = "form-control" placeholder = "Address"></div>
            
                            <div class = "form-group">
                             <input type = "text" name = "shippingCity" class = "form-control" placeholder = "City" required></div>
            
                             <div class = "form-group">
                             <input type = "text" name = "shippingState" class = "form-control" placeholder = "State" required></div>
            
                               <div class = "form-group">
                             <input type = "text" name = "shippingZipcode" class = "form-control" placeholder = "Zipe Code" required></div>
            
                        
            <input type = "submit" class = "form-control btn btn-primary" name = "submit" value = "Update"></div>
        </form>

                        		<?php
            
                                $shippingI = $_SESSION['shippingI']; 
                                
                                for($i = 0; $i<count($shippingI); $i++){
                                     $shipping = $shippingI[$i];
                                    
                                        echo "<br>";
                                        echo "<h5> Address: " .$shipping->shipAdd. "</h4 <br>"; 
                                        echo "<h5> City: " .$shipping->shippingCity. "</h4>"; 
                                       echo "<h5> State: "  .$shipping->shippingState. "</h4>";
                                       echo "<h5> Zip Code: "  .$shipping->shippingZipcode. "</h4>";
                                 }

                        		?>



                       <!-- <ul style="list-style-type:none">
  							<li>Name:</li>
 							<li>Username:</li>
  							<li>Email:</li>
						</ul>
                       -->
                     	
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <!--<div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>-->
                </div>

                

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
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
        <script src="passjs.js"></script>
		
        
      
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
                    <a href="./shippingController.php" class="list-group-item ">Edit Shipping</a>
                    <a href="./billingController.php" class="list-group-item">Edit Billing</a>
                    <a href="./updatePassController.php" class="list-group-item active">Update Password</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <div class="caption-full">
                   
                        <h2>Update Password</h4>

                            <form role = "update form" autocomplete = "off" action = "./pass.php" method="post">
                          <!--  <div class = "form-group">
                             
                             <input type = "text" name = "password" class = "form-control" placeholder = "Enter Password"></div> -->
            
                            <div class = "form-group">
                             <input type = "password" name = "newPassword" class = "form-control" placeholder = "Enter New Password" required></div>
            
                             <div class = "form-group">
                             <input type = "password" name = "newPassword2" class = "form-control" placeholder = "Confirm New Password" required></div>
            
                             
    
                        
            <input type = "submit" class = "form-control btn btn-primary" name = "submit" value = "Update"></div>
        </form>

                        	
                     	
                        
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
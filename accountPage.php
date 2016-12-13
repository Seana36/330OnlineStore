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
                    <a href="#" class="list-group-item">Edit Billing</a>
                    <a href="#" class="list-group-item">Update Password</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                  <!--  <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                    <div class="caption-full">
                        <!--<h4 class="pull-right">$24.99</h4>-->
                        <h2>Account Information</h4>

                        		<?php
                                 //   echo "Hello";
                                $customers = $_SESSION['customer']; 
                                // $customerID = 1;
                                for($i = 0; $i<count($customers); $i++){
                                     $customer = $customers[$i];
                                    
                                   // if($customers[$i]->customerID == $customerID){ 
                                    
                                        echo "<br>";
                                        echo "<h5> First Name: " .$customer->fName. "</li>"; 
                                        echo "<h5> Last Name: " .$customer->lName. "</h4>"; 
                                        echo "<h5> Email: "  .$customer->email. "</h4>";
                                        echo "<h5> User Name: "  .$customer->userName. "</h4>";
                                        echo "<h5> Phone Number: "  .$customer->phoneNo. "</h4>";

                                    

                                      
                                   // }
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

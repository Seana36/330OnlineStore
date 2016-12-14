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
		<script src="billingjs.js"></script>
        
      
   </head>

<body>
    <?php
        include("./includes/navLoggedIn.php");
    ?>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php
                include("./includes/accountOptions.php")
            ?>

            <div class="col-md-9">

                <div class="thumbnail">
                    <div class="caption-full">
                   
                        <h2>Billing Information</h4>
                            <!--Form where user enters shipping info to be added to the database-->
                            <form role = "update form" autocomplete = "off" action = "./bill.php" method="post">
                            <div class = "form-group">
                             
                             <input type = "text" name = "billingAddress" class = "form-control" placeholder = "Address"></div>
            
                            <div class = "form-group">
                             <input type = "text" name = "billingCity" class = "form-control" placeholder = "City" required></div>
            
                             <div class = "form-group">
                             <input type = "text" name = "billingState" class = "form-control" placeholder = "State" required></div>
            
                               <div class = "form-group">
                             <input type = "text" name = "billingZipcode" class = "form-control" placeholder = "Zip Code" required></div>

                             <div class = "form-group">
                             <input type = "text" name = "creditCardNo" class = "form-control" placeholder = "Credit Card Number" required></div>

                             <div class = "form-group">
                             <input type = "text" name = "creditCardType" class = "form-control" placeholder = "Card Type: VISA, MasterCard, AMEX" required></div>

                             <div class = "form-group">
                             <input type = "text" name = "creditCardCVC" class = "form-control" placeholder = "CVC" required></div>
            
                        
            <input type = "submit" class = "form-control btn btn-primary" name = "submit" value = "Update"></div>
        </form>

                             <!-- Code that displays current billing info --> 
                        		<?php
            
                                $billing = $_SESSION['billing']; 
                                
                                for($i = 0; $i<count($billing); $i++){
                                     $billingI = $billing[$i];
                                    
                                        echo "<br>";
                                        echo "<h3>Current Billing Address</h3>";
                                        echo "<h5> Address: " .$billingI->billingAddress. "</h4 <br>"; 
                                        echo "<h5> City: " .$billingI->billingCity. "</h4>"; 
                                       echo "<h5> State: "  .$billingI->billingState. "</h4>";
                                       echo "<h5> Zip Code: "  .$billingI->billingZipcode. "</h4>";

                                        echo "<br>";
                                        echo "<h3>Current Card Information</h3>";
                                        echo "<h5> Card Number: ".$billingI->creditCardNo. "</h4 <br>";
                                        echo "<h5> Card Type: "  .$billingI->creditCardType. "</h4>";
                                        echo "<h5> CVC: "  .$billingI->creditCardCVC. "</h4>";


                                 }

                        		?>

<br>

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
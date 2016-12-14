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
        include("./includes/nav.php");
    ?>

   

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php
                include("./includes/accountOptions.php")
            ?>

            <div class="col-md-9">

                <div class="thumbnail">
                  <!--  <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                    <div class="caption-full">
                        <!--<h4 class="pull-right">$24.99</h4>-->
                        <h2>Account Information</h4>

                        		<?php
                                 //   echo "Hello";
                                    $customer = $_SESSION['customerDTO']; 
                                // $customerID = 1;
                                //for($i = 0; $i<count($customers); $i++){
                                    
                                   // if($customers[$i]->customerID == $customerID){ 
                                    try
                                    {
                                        if($customer)
                                        {
                                            echo "<br>";
                                            echo "<h5> First Name: " .$customer->fName. "</li>"; 
                                            echo "<h5> Last Name: " .$customer->lName. "</h4>"; 
                                            echo "<h5> Email: "  .$customer->email. "</h4>";
                                            echo "<h5> User Name: "  .$customer->userName. "</h4>";
                                            echo "<h5> Phone Number: "  .$customer->phoneNo. "</h4>";
                                            $_SESSION['customerDTO'] = null;
                                        }
                                        else
                                        {
                                            throw new Exception("You must be logged in to review your account information");
                                        }
                                    }
                                    catch(Exception $e)
                                    {
                                        echo $e->getMessage();
                                    }
                                    

                                      
                                   // }
                                 //}

                        		?>


                       <!-- <ul style="list-style-type:none">
  							<li>Name:</li>
 							<li>Username:</li>
  							<li>Email:</li>
						</ul>
                       -->
                     	
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

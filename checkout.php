<?php 
include('./includes/DTOs.php');
session_start();
    
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wham-Bam-Azon</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <script> 
        

        function toggleChevron(e) {
        $(e.target)
                .prev('.panel-heading')
                .find("i.indicator")
                .toggleClass('fa-caret-down fa-caret-right');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);


    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
        include("includes/nav.php");
    ?>


    <!-- Page Content -->
    <div class="container">
    <p class="lead">Wam-Bam-Azon</p>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php 
                        include("includes/filterBar.php");
                    ?>
                </div>
            </div>

     
    <div class="row">
   

<!-- //add body here  -->

 
   <div class = "col-md-8">
     <div style = "clear: both"> </div>
        <br/>
          <h3> Order Details </h3>
            <div class = "table-responsive">
              <table class = "table table-bordered">
                <tr>
                  <th width = "40%"> Item Name </th>
                  <th width = "10%"> Quantity </th>
                  <th width = "20%"> Price </th>
                  <th width = "15%"> Total </th>
                  <th width = "5%"> Action </th>
                </tr>
      <?php
        if (!empty($_SESSION["shopping_cart"]))  
          {  
               $total = 0;  
               foreach($_SESSION["shopping_cart"] as $keys => $values)  
               # var_dump($values);
               # var_dump($keys);
               # var_dump($_SESSION["shopping_cart"]);
               {  
          ?>  
          <tr>  
               <td><?php echo $values["itemName"]; ?></td>  
               <td><?php echo $values["quantity"]; ?></td>  
               <td>$ <?php echo $values["regularPrice"]; ?></td>  
               <td>$ <?php echo number_format($values["quantity"] * $values["regularPrice"], 2); ?></td>  
               <td><a href="cart.php?action=delete&id=<?php echo $values["itemID"]; ?>"><span class="text-danger">Remove</span></a></td>  
          </tr>  
          <?php  
                    $total = $total + ($values["quantity"] * $values["regularPrice"]);  
               }  
          ?>  
          <tr>  
               <td colspan="3" align="right">Total</td>  
               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
               <td></td>  
          </tr>  
          <?php  
          }  
      ?>  
 </table>  
</div>  
   <div style = "clear: both"> </div>
        <br/>
          <h3> Shipping Details </h3>
            <div class = "table-responsive">
              <table class = "table table-bordered">
                <tr>
                  <th width = "20%"> Name </th>
                  <th width = "20%"> Shipping Address </th>
                  <th width = "20%"> City </th>
                  <th width = "20%"> State </th>
                  <th width = "20%"> Zip </th>
                </tr>
      <?php
        if (!empty($_SESSION["shippingInfo"]))  
          {  
               
              # foreach($_SESSION["shippingInfo"] as $keys => $values)
        $cust = $_SESSION['shippingInfo']; 
        for($i = 0; $i<count($cust); $i++){
            $customer = $cust[$i];                 
          ?>  
          <tr>  
               <td><?php echo $customer->fName ." " . $customer->lName ?></td>  
               <td><?php echo $customer->shipAdd ?></td>  
               <td><?php echo $customer->shippingCity;?></td>  
               <td><?php echo $customer->shippingState?></td>  
               <td><?php echo $customer->shippingZipcode?></td>  
          </tr>  

          <?php  
          }
          } 
      ?>  
 </table>  
</div>  
   <div style = "clear: both"> </div>
        <br/>
          <h3> Billing Details </h3>
            <div class = "table-responsive">
              <table class = "table table-bordered">
                <tr>
                  <th width = "20%"> Name </th>
                  <th width = "20%"> Shipping Address </th>
                  <th width = "20%"> City </th>
                  <th width = "10%"> State </th>
                  <th width = "10%"> Zip </th>
                  <th width = "10%"> Credit Card No </th>
                  <th width = "10%"> Credit Card Type </th>
                </tr>
      <?php
        if (!empty($_SESSION["billingInfo"])){  
        $cust = $_SESSION['billingInfo']; 
        for($i = 0; $i<count($cust); $i++){
            $customer = $cust[$i];                 
      ?>  
          <tr>  
               <td><?php echo $customer->fName ." " . $customer->lName ?></td>  
               <td><?php echo $customer->billingAddress ?></td>  
               <td><?php echo $customer->billingCity;?></td>  
               <td><?php echo $customer->billingState?></td>  
               <td><?php echo $customer->billingZipcode?></td> <td><?php echo $customer->creditCardNo?></td>
               <td><?php echo $customer->creditCardType?></td>
          </tr>  

          <?php  
          }
          } 
      ?>  
 </table>  
</div> 

<?php 
var_dump($_SESSION['billingInfo']);
var_dump($_SESSION['shippingInfo']);
?>
<form action="submitController.php" method="get">
	<button type="submit" class="btn btn-info" >Submit Order </button>
</form>














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

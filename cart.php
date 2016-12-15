<!-- create function add and remove to cart, if logged in check-->
<!-- SELECT i.itemName, i.image FROM item i, cart c where i.itemID = c.itemID AND c.customerID = $_SESSION['customerID']-->

<?php
echo '<br> <br> <br> <br>';
session_start(); 
include("includes/nav.php");

$connect = mysqli_connect("localhost", "root", "", "storedatabase");

  if (isset($_GET["action"])){
      if ($_GET["action"] == "delete"){
          foreach ($_SESSION["shopping_cart"] as $keys => $values){
              if ($values["itemID"] == $_GET["id"]){
                  unset($_SESSION["shopping_cart"][$keys]);
                  echo '<script> alert("Item Removed") </script>';
                  echo '<script> window.location="cart.php?itemID=null" </script>';
                }
            }
        }
    }
    if (isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["itemID"], $item_array_id))
          {
            $itemID = $_GET['itemID'];
            $item_count = count($_SESSION["shopping_cart"]);
            $item_count++;
            $sql = "SELECT * FROM item WHERE itemID = ". $_GET["itemID"] . ";";
            $result = $connect->query($sql); 
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $item_array = array('itemID' => $_GET["itemID"], 
                              'itemName' => $row['itemName'], 
                              'regularPrice' => $row['regularPrice'],
                              'quantity' => 1
                              );

            $_SESSION["shopping_cart"][$item_count] = $item_array;
            $item_count++;
              }
            }
          }
          else{
              echo '<script> alert("Item Already Added") </script>';
              echo '<script> window.location="index.php" </script>';
            }
      }
      else
        {
          $item_array = array('itemID' => $_GET["itemID"], 
                              'itemName' => $_POST["hidden_name"], 
                              'regularPrice' => $_POST["hidden_price"],
                              'quantity' => $_POST["quantity"]
                              );
          $_SESSION["shopping_cart"][0] = $item_array;
          $item_count++; 
        }


?>
<!DOCTYPE html>
<html>
  <head>
  <title> Cart </title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> </script>
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
  </head>
    <body>
      <br/>
        <div class = "container" style = "width: 700px;">
          <h3 align = "center"> Cart </h3>
      <br/>
      <?php
        $query = "SELECT * FROM item ORDER BY itemID ASC";
        $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0)
            {
              while ($row = mysqli_fetch_array($result))
                {
      ?>
       <div class = "col-md-4">

      </div>
      <?php
                }
            }
      ?>
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
           </div>  
           <br />  

           <form action="checkoutController.php" method="get">
  <button type="submit" class="btn btn-info" >Checkout </button>
</form>
      </body>  
 </html>
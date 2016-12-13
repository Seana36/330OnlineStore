<?php 
include('./includes/DAOs.php');
require_once('./includes/DTOs.php');
session_start();
$itemDAO = new itemDAO(); 
$categories = $itemDAO->getAllCategories();
$_SESSION['categories'] = $categories; 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
 <?php
//connect to database 
#$servername = "localhost";
#$username = "root";
#$password = "";
#$dbname = "StoreDatabase";

// Create connection
#$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
#if ($conn->connect_error) {
 #   die("Connection failed: " . $conn->connect_error);}
#else{   
 #   echo "";} 
?> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
include("./includes/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Wam-Bam-Azon</p>
                <div class="list-group">
                        <?php
                            $categories = $_SESSION['categories'];
                            for($i = 0; $i < count($categories); $i++)
                            {
                                $category = $categories[$i];
                                echo "<a href='#' class='list-group-item'>".$category->categoryName."</a>";
                            }
                        ?>
                </div>
            </div>
<!-- CART -->
<?php
$connect = mysqli_connect("localhost", "root", "", "storedatabase");
$query = "SELECT * FROM item ORDER BY itemID ASC";
$result = mysqli_query($connect, $query);
$items = $_SESSION['items']; 
$itemID = $_GET['itemID'];
echo "<a href = 'cart.php?itemID=". $itemID. "' > Add to Cart </a>";
?>
            

                <!-- <div class="row"> -->

<?php 


$items = $_SESSION['items']; 
$itemID = $_GET['itemID'];
    for($i = 0; $i<count($items); $i++){
        $item = $items[$i];
        if($items[$i]->itemID == $itemID){
                    echo "<div class='col-sm-8 col-lg-8 col-md-8'>";
                        echo "<img src='". $item->image . "' alt='Item Picture' style='width:600px;height:400px;'/>"; 
                        echo "<div class='caption'> ";
                            echo "<h4 class='pull-right'> Price: $" . $item->regularPrice. "</h4>"; 
                            echo "<h4><a href='itempage.php?itemID=" .$item->itemID. "' >".  $item->itemName. "</a> </h4> "; 
                            echo "<p>" . $item->itemDescription ;
                        echo "</div> ";
                        echo "<div class='ratings'> "; 
                            echo "<p class='pull-right'>5 reviews</p>
                                    <p>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star-empty'></span> 
                                    </p>
                        </div>
                    </div>"; 
        }
    }

?>


               

                  <!--   <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div> -->

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

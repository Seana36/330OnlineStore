<?php 
include('./includes/DAOs.php');
require_once('./includes/DTOs.php');
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

        
    <div class="container">
<!-- Providing response to item -->
    <?php
        $itemName = $_GET['itemName'];
        $itemDesc = $_GET['itemDesc'];
        $regPrice = $_GET['regPrice'];
        $sql = "INSERT INTO item( itemName, itemDescription, regularPrice) VALUES('$itemName', '$itemDesc', $regPrice)";
        $sqlCheck = "SELECT * FROM item WHERE itemName = '$itemName'";
        $done = addToDB($sql, $sqlCheck);
        if($done)
        {
            echo "$itemName </br>";
            echo "$itemDesc</br>";
            echo "$regPrice</br>";
            echo "Done";
        }
        else
        {
            echo "Nothing was added</br>";
        }
    ?>
<!-- Providing the feedback -->


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

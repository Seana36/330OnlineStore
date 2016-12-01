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

        <?php
            include("includes/adBar.php");
        ?>    
    <div class="row">
    <?php 
        $items = $_SESSION['items']; 
        for($i = 0; $i<count($items); $i++){
            $item = $items[$i];
            echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
                echo "<div class='thumbnail'>";
                    echo "<img src='".$item->image."' alt='Item Picture' style='width:320px;height:150px;'/>"; 
                    echo "<div class='caption'> ";
                        echo "<h4><a href='itempage.php?itemID=" .$item->itemID. "' >".  $item->itemName. "</a></h4> "; 
                        echo "<h4> Price: $" . $item->regularPrice. "</h4>"; 
                        echo "<p>" . $item->itemDescription. "</p>";
                    echo "</div>";
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
                </div>
            </div>"; 
        }
    ?>  
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

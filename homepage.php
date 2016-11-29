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

            <div id="accordion" class="panel panel-primary behclick-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Search Filter</h3>
                </div>
                <div class="panel-body" >
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse0">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i> Price
                            </a>
                        </h4>
                    </div>
                    <form action ="filterController.php" method ="post">
                    <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name='filterControl' checked>
                                        0 - $100
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio" >
                                    <label>
                                        <input type="radio" value="2" name='filterControl'>
                                        $101 - $200
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio"  >
                                    <label>
                                        <input type="radio" value="3" name='filterControl'>
                                        $201 - $600
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="radio"  >
                                    <label>
                                        <input type="radio" value="4" name='filterControl'>
                                        More Than 601$
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
        
            <input type="submit" value="Filter" class="btn btn-default">
              </form>
</div>
</div>

            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style='width:800px; height:300px;'>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" >
                                <div class="item active">
                                    <img class="slide-image" src="Pictures/ad1.jpg" alt="" style='width:800px; height:300px;'>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="Pictures/ad2.gif" alt="" style='width:800px; height:300px;'>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="Pictures/ad3.jpg" alt="" style='width:800px; height:300px;'>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

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

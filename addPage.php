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

        
    <div class="container">
<!-- Adding Item -->

    <form class="form-horizontal" action="addPageComplete.php" method="get"> <!-- Form Style -->
        <!-- Item Name Field -->
        <div class="form-group">
            <label class="control-label col-sm-2" for="itemName">Item Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter Item Name">
            </div>
        </div>

        <!-- Item Desc Field -->
        <div class="form-group">
            <label class="control-label col-sm-2" for="itemDesc">Description:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="itemDesc" name="itemDesc" placeholder="Item Description"></textarea>
            </div>
        </div>

        <!-- Price Field -->
        <div class="form-group">
            <label class="control-label col-sm-2" for="regPrice">Price: $</label>
            <div class="col-sm-2">
                <!-- Pattern = Numbers 0-9 + .Numbers 0.9 where decimals step from anynumbers.twodecimals-->
                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="form-control" id="regPrice" name="regPrice" placeholder="Price">
            </div>
        </div>
        
        <!-- Category Field -->
        <div class="form-group">
            <label class="control-label col-sm-2" for="category">Select Category:</label>
            <div class="col-sm-2">
                <select class="form-control" id="category" name="category">
                    <?php
                    $categories = $_SESSION['categories'];
                    for($i = 0; $i < count($categories); $i++)
                    {
                        $category = $categories[$i];
                        echo "<option>" .$category->categoryName. "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <!-- Broken Image
        <!-- Image Field
        <div class"form-group">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <span class="btn btn-primary btn-file">
                    <span class="fileupload-new">Select file</span>
                    <span class="fileupload-exists">Change</span>
                    <input type="file" />
                </span>
                <span class="fileupload-preview"></span>
                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>
        </div>
        -->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

<!-- End Adding Item -->


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

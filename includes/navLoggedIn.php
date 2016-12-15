<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./index.php">Wam-Bam-Azon</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="./homeController.php">Home</a></li>
      <li><a href="./accountPage.php">Account </a></li>
      <li><a href="./logout.php">Logout</a></li>
    
 
    </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action = "./searchResultsController.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="searchBar">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>
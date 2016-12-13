<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./homeController.php">Wam-Bam-Azon</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="./homeController.php">Home</a></li>
	  <?php
		if($_SESSION['loggedIn']) {
			if($_SESSION['employeeAccount'])
			{
				echo"<li><a href=''>Employee Settings</a></li>";
			}
			
			else{
				echo "<li class='dropdown'>
			<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Account Settings
			<span class='caret'></span></a>
			<ul class='dropdown-menu'>
				<li><a href='editProfilePage.php'>Edit Profile</a></li>
				<li><a href='#'>Edit Billing</a></li>
			</ul>
			</li>";
			}
			
			echo "<li><a href='./logout.php'>Logout</a></li>";
		}
		else{
			echo "<li><a href='./loginPage.php'>Login/Signup</a></li>";
		}
		?>
      <li><a href="./loginPage.php">Login/Signup</a></li>
      <li><a href="./addItemController.php">Add item</a></li>
      <li><a href="./removeItemController.php">Remove item</a></li>
      <li><a href="./addCategoryController.php">Add Category</a></li>
      <li><a href="./removeCategoryController.php">Remove Category</a></li>
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
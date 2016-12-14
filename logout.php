<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   $_SESSION['loggedIn'] = FALSE;
   $_SESSION['employeeAccount'] = FALSE;
   $_SESSION['customer'] = null;
   echo 'You have cleaned session';
   header('Refresh: 2; URL = homeController.php');
?>
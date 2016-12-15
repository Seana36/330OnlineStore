    <?php
        include('./includes/DAOs.php');
        require_once('./includes/DTOs.php');

        session_start();

      //  $password = $_POST["password"];
        $newPassword = $_POST["newPassword"];
        $newPassword2 = $_POST["newPassword2"];

      
      
       
        
        $itemDAO = new itemDAO();
        $check= $itemDAO->updatePassword($_SESSION['customer'],  $newPassword, $newPassword2);

        if($check)
        {
           
            echo "password updated.</br>";
            echo "Done";
           header('location:updatePassController.php'); 
        }
        else
        {
            echo "Nothing was added</br>";
        }
    ?>
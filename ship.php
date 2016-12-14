    <?php
        include('./includes/DAOs.php');
        require_once('./includes/DTOs.php');

        session_start();

        $shipAdd = $_POST["shipAdd"];
        $shippingCity = $_POST["shippingCity"];
        $shippingState = $_POST["shippingState"];
        $shippingZipcode = $_POST["shippingZipcode"];
       
        
        $itemDAO = new itemDAO();
        $check= $itemDAO->updateShipping($_SESSION['customer'], $shipAdd, $shippingCity, $shippingState, $shippingZipcode );

        if($check)
        {
           
            echo "$shipAdd</br>";
            echo "Done";
            header('location:shippingController.php'); 
        }
        else
        {
            echo "Nothing was added</br>";
        }
    ?>
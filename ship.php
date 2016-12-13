    <?php
        include('./includes/DAOs.php');
        include('./shippingPage.php');
        require_once('./includes/DTOs.php');

        session_start();

        $shipAdd = $_GET"shipAdd"];
        $shippingCity = $_GET["shippingCity"];
        $shippingState = $_GET["shippingState"];
        $shippingZipcode = $_GET["shippingZipcode"];
       
        
        //The number 6 is customerID. Not sure whats going on with the sessions page. Will eventually have to be changed to whatever user is logged in
        $check = updateShipping(6, $shipAdd, $shippingCity, $shippingState, $shippingZipcode );
        if($check)
        {
           
            echo "$shipAdd</br>";
            echo "Done";
        }
        else
        {
            echo "Nothing was added</br>";
        }
    ?>
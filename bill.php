    <?php
        include('./includes/DAOs.php');
        require_once('./includes/DTOs.php');

        session_start();

        $billingAddress = $_POST["billingAddress"];
        $billingCity = $_POST["billingCity"];
        $billingState = $_POST["billingState"];
        $billingZipcode = $_POST["billingZipcode"];
        $creditCardNo = $_POST["creditCardNo"];
        $creditCardType = $_POST["creditCardType"];
        $creditCardCVC = $_POST["creditCardCVC"];       
        
        $itemDAO = new itemDAO();
        $check= $itemDAO->updateBilling(6, $billingAddress, $billingCity, $billingState, $billingZipcode, 
            $creditCardNo, $creditCardType, $creditCardCVC);

        if($check)
        {
           
            echo "$shipAdd</br>";
            echo "Done";
            header('location:billingController.php'); 
        }
        else
        {
            echo "Nothing was added</br>";
        }
    ?>
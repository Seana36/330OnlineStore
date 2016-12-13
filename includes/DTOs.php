<?php

class itemDTO{
	public $itemID;
	public $itemName;
	public $itemDescription;
	public $regularPrice; 
	public $salePrice;
	public $sale; 
	public $qunatity; 
	public $categoryID; 
	public $clearance;
	public $image; 
}
class categoryDTO{
	public $categoryID;
	public $details;
	public $categoryName; 
}

class customerDTO{
	public $customerID; 
	public $fName;
	public $lName;
	public $userName;
	public $password;
	public $email;
	public $phoneNo;
	public $securityQuestion;
	public $securityQuestionAns; 
}

class shippingDTO{
	public $shippingID;
	public $customerID;
	public $shippingAdd;
	public $shippingCity;
	public $shippingState;
	public $shippingZipcode;
}
//order
//shipping info 
//billing info

?> 
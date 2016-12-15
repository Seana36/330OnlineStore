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
	public $fName; 
	public $lName; 
}

class billingDTO{
	public $billingID;
	public $customerID;
	public $billingAddress;
	public $billingCity;
	public $billingState;
	public $billingZipcode;
	public $creditCardNo;
	public $creditCardType;
	public $creditCardCVC;
	public $fName; 
	public $lName; 
}
//order


?> 
<?php

/**
 * PhoneNumber class 
 *
 * @author Chintan Karia
 */

class PhoneNumber {

	/**
	 * Takes phone number as input and converts it to usa phone number format i.e. 123-456-7890.
	 *
	 * @param String phoneNumber as input
	 * @return  preg_replace() returns an array if the subject parameter is an array, or a string otherwise. If the phoneNumber is not equal to * 10 digits then it will 
	 */

	public function convertPhoneNumber($phoneNumber) {
		
    	$phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
    	$strMessage =  'Please enter a valid 10 digit phone number.';
     
    	if(strlen($phoneNumber) == 10)
    		return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phoneNumber);
    	else
    		return $strMessage;
    }
}
?>
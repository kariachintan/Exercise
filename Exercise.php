<?php

/**
 * A basic Exercise class with couple of methods  *  
 *
 * @author Chintan Karia
 */

class Exercise {

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


    /**
	 * Takes Couple of string urls as input, reads the query parameters of the URLs, merges them and returns the merged
	 * array.
	 *
	 * @param String strURL1 as URL 1 and strURL2 as second URL
	 * @return  returns the merged array. 
	 */


    public function mergeQueryStrings($strURL1,$strURL2){
    	
    	$parts = parse_url($strURL1);
    	$parts2 = parse_url($strURL2);   

		parse_str($parts['query'], $output1);
		parse_str($parts2['query'], $output2);

		return array_merge($output1,$output2);
    }
}
?>
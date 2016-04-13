<?php

/**
 * QueryString class
 *
 * @author Chintan Karia
 */

class QueryString {

	
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
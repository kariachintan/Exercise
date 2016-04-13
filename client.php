<body bgcolor="grey">
<?php

/**
 * Creating object of PhoneNumber class & QueryString class and calling the methods.
 * 
 * @author Chintan Karia
 */

require_once('PhoneNumber.php');
require_once('QueryString.php');

	// Create Object of PhoneNumber class
	$objPhoneNumber = new PhoneNumber();
	$inputPhoneNumber = "2191235332";

	$inputURL1 = "google.com?first_name=Chintan&last_name=Karia";
	$inputURL2 = "yahoo.com?skill=PHP&page=Client";


	echo "Input = ". $inputPhoneNumber;
	echo "<br>";
	// Calling the convertPhoneNumber method.
	echo "Output - ".$objPhoneNumber->convertPhoneNumber($inputPhoneNumber);

	echo "<br><br>";

	// Create Object of QueryString class
	$objQueryString = new QueryString();

	echo "Input = ". $inputURL1 . " <br> URL 2 = ". $inputURL2;
	echo "<br><br> Output ";
	
	// Calling the mergeQueryStrings method.
	print_r( $objQueryString->mergeQueryStrings($inputURL1,$inputURL2));
?>

</body>
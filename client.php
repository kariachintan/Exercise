<body bgcolor="grey">
<?php

/**
 * Creating object of Exercise class and calling the methods.
 * 
 * @author Chintan Karia
 */

require_once('Exercise.php');

	// Create Object of Exercise class
	$objExercise = new Exercise();
	$inputPhoneNumber = "8018640759";

	$inputURL1 = "google.com?first_name=Chintan&last_name=Karia";
	$inputURL2 = "yahoo.com?skill=PHP&page=Client";


	echo "Input - 8018640759";
	echo "<br>";
	// Calling the convertPhoneNumber method.
	echo "Output - ".$objExercise->convertPhoneNumber($inputPhoneNumber);

	echo "<br><br>";

	echo "Input - URL 1 = google.com?first_name=Chintan&last_name=Karia <br> URL 2 = yahoo.com?skill=PHP&page=Client";
	echo "<br><br> Output ";
	
	// Calling the mergeQueryStrings method.
	print_r( $objExercise->merge_query_strings($inputURL1,$inputURL2));
?>

</body>
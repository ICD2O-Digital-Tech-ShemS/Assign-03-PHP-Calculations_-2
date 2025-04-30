<?php
	// get the indexes of refraction from the textfields
	$indRef = $_POST['indexRefDiamond'];
    $indRef2 = $_POST['indexRefWater'];

	// calculate the speed of light in different mediums
	$c = 3.00 * 10**8;
    $speedA = $c/$indRef;
    $speedA = round($speedA,2);
    $speedB = $c/$indRef2;
    $speedB = round($speedB,2);
    
    // display results to user
?>
	<h3>Results:</h3>
	The speed of light in diamond is <?php echo "$speedA" ?>m/s.
    The speed of light in water is <?php echo "$speedB" ?>m/s.
<?php
	// get the indexes of refraction from the textfields
	$indRef = $_POST['indexRefDiamond'];
    $indRef2 = $_POST['indexRefWater'];

	// calculate the speed of light in different mediums
	$c = 3.00 * 10**8;
    $speed = $c/$indRef;
    $speed = round($speed,2);
    $speed2 = $c/$indRef2;
    $speed2 = round($speed2,2);
    
    // display results to user
?>
	<h3>Results:</h3>
	The speed of light in diamond is <?php echo "$speed" ?>m/s.
    The speed of light in water is <?php echo "$speed2" ?>m/s.
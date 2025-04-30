<?php
	// get the indexes of refraction from the textfields
	$speed1 = $_POST['indexRefDiamond'];
    $speed2 = $_POST['indexRefWater'];

	// calculate the speed of light in diamond and water
	$c = 300000000;
    $speedDiamond = $c / $speed1;
    $speedDiamond = round($speedDiamond,2);
    $speedWater = $c / $speed2;
    $speedWater = round($speedWater,2);
?>
	<h3>Results:</h3>
	The speed of light in diamond is <?php echo "$speedDiamond" ?>m/s.
    The speed of light in water is <?php echo "$speedWater" ?>m/s.
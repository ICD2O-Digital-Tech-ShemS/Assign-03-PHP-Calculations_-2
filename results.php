<?php
	// get the indexes of refraction from the textfields
	$speed1 = $_POST['indexRefDiamond'];
    $speed2 = $_POST['indexRefWater'];

	// calculate the speed of light in diamond and water
	const $c = 300000000;
    $speedDiamond = $c / $speed1;
    $speedWater = $c / $speed2;
?>
	<h3>Results:</h3>
	The speed of light in diamond is <?php echo "$speedDiamond" ?>m/s.
    The speed of light in water is <?php echo "$speedWater" ?>m/s.
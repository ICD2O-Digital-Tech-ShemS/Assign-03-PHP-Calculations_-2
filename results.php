<?php
	// get the radius from the textfields
	$radius = $_POST['radius'];

	// calculate the volume of the sphere
	$PI = 3.14;
    $volume = (4/3) * $PI * pow($radius,3);
    $volume = round($volume,2);
?>
	<h3>Results:</h3>
	The volume of the Sphere is <?php echo "$volume" ?>cm<sup>3</sup>.
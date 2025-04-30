<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Speed of Light">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Speed of Light</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Speed of Light</h1>";
			echo "<h3>This program will calculate the Speed of Light in different mediums.</h3>";
		?>
		<!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="speedLightDiamond">Speed of Light in Diamond (m/s):</label>
      <input type="float" id="indexRefDiamond" placeholder="Index of refraction(n)..." name="speedLightDiamond"><br><br>
      <label for="speedLightWater">Speed of Light in Water (m/s):</label>
      <input type="float" id="indexRefWater" placeholder="Index of refraction(n)..." name="speedLightWater"><br><br>
      <input type="submit" value="Calculate Speed">
    </form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">
        <div id="user-info">
        <div id="$speedDiamond"></div>
        <div id="$speedWater"></div>
        </div>
      </iframe>
	</body>
</html>
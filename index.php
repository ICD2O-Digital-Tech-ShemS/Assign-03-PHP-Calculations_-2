<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere">
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
    <title>Volume of a Sphere</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Sphere</h1>";
			echo "<h3>This program will calculate the volume of a Sphere.</h3>";
		?>
		<!-- form to get the bases and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="radius">Radius (cm):</label>
      <input type="float" id="radius" placeholder="Enter value..." name="radius"><br><br>
      <input type="submit" value="Calculate Volume">
    </form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">
        <div id="user-info">
        <div id="$volume"></div>
        </div>
      </iframe>
	</body>
</html>
<?php
	// if already logged in, go to Home page
	if(isset($_SESSION["email"])){
		header("location: Home.php");
	}

	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Index_Page | Ctrl Budget</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
	<?php
            require './includes/header.php';
	?>
	<div id="banner-image">
            <div class="container">
		<div id="banner_content">
                    <h4>We help you control your budget</h4>
                    <a href="Login.php"><button class="btn btn-info"> Start Today</button></a>
		</div>
            </div>
	</div>
	<?php
            require './includes/footer.php';
	?>
	</body>
</html>

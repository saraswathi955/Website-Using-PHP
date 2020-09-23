<?php
    if(isset($_SESSION["email_id"])){
	header("location: Home.php");
    }
    require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to Control Budget</title>
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
                require "./includes/header.php";
            ?>
            <div class="container" >
                <h4> You don't have any active plans</h4>
                <center>
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2)">
                    <div class="card-body" style="background-color: lightgray; width: 100%; height: 1000%">
                        <a href="Create_New_Plan.php" class="card-link"><span class="glyphicon glyphicon-plus-sign"></span> Create New plan</a>
                    </div>
                </div>
                    </center>
            </div>
		<?php
                    require "./includes/footer.php";
		?>
	</body>
</html>



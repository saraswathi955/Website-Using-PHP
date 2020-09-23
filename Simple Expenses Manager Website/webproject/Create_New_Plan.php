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
		<div class="container panel-margin">
                    <div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Create New plan</h3>
				</div>
				<div class="panel-body">
                                    <?php
                                            if (!isset($_post['initialbudget'])) {
                                                header("Location: Plan_Details.php");
                                                exit();
                                            }
                                            $initialbudget = $_POST['initialbudget'];
                                                
                                            ?>
                                                
                                             <?php
                                                if (!isset($_POST['noofpeople'])) {
                                                    header("Location: Plan_Details.php");
                                                    exit();
                                                }
                                                $noofpeople = $_post['noofpeople'];
                                                
                                            ?>
                                                
                                    <form  method="post">
					<div class="form-group">
                                            <p>Initial Budget</p>
                                            <input type="budget" class="form-control" name="initialbudget" <?php echo $initialbudget['initialbudget'] ?>placeholder="Initial Budget (Ex.4000)" required>
                                        </div>
                                        <div class="form-group">
                                            <p>How many peoples you want to add in your group?</p>
                                            <input type="noofpeople" class="form-control" name="noofpeople" placeholder="No. of people" required>
                                        </div>
					</form>
                                    <a href="Plan_Details.php"><button type="submit" class="btn btn-default">Next</button></a>
				</div>
				
			</div>
                    </div>
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>



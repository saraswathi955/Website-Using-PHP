<?php
	// if already logged in, go to index page
	if(isset($_SESSION["email_id"])){
		header("location: index.php");
	}

	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Change_Password | Ctrl Budget</title>
        
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
       
	<div class="container panel-margin" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <div class="panel panel-primary">
                            <div class="panel-heading">
				<h3 class="panel-title">Change Password</h3>
                            </div>
                            <div class="panel-body">
                    
                                <form action="Change_Password_Script.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputName">Old Password</label>
                                        <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">New Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="New Password(Min 6 character)" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Confirm New Password</label>
                                        <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn- btn-block">Change</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php
            require './includes/footer.php';
	?>
    </body>
</html>




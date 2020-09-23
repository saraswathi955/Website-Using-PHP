<?php
	
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign up | Ctrl Budget</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require "./includes/header.php";
		?>
		<div class="container panel-margin">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
                            <div class="panel-heading">
				<h3 class="panel-title">Sign Up</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="signup_script.php">
                                    <div class="form-group">
                                        <label for="exampleInputName">Name:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                        <input type="email" class="form-control" name="email"  oninvalid="alert('Invalid Email');" placeholder="Enter Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                      
                                        <?php
                                            if(isset($_GET["m1"])){
                                              echo $_GET['m1'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpassword">Password:</label>
                                        <input type="password" class="form-control" name="password"  oninvalid="alert('Not a Valid password');" placeholder="Password (Min 6 characters)" pattern=".{6,}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputphonenumber">Phone Number:</label>
                                        <input type="text" class="form-control" name="phonenumber" oninvalid="alert('Not a Valid number');" placeholder="Enter Valid Phone Number (Ex: 9444455555) " required>
                                        <?php
                                            if(isset($_GET["m2"])){
                                              echo $_GET['m2'];
                                            }
                                        ?>
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
				</form>
                            </div>
                            <div class="panel-footer">
				Already have an account?Click <a href="Login.php">here</a> to create one.
                            </div>
                                
                        </div>
                    </div>
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>

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
                    <div class="col-md-5 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form  method="post">
                                            <div class="form-group">
                                                <label for="title" >Title</label>
						<input type="title" class="form-control" id="tilte" name="place" placeholder="Enter Title(Ex. Trip to Goa)" required>
                                            </div>

                                            <div>
                                                <label for="date" style="color:#000000;">From</label>
                                                <input type="date" class="form-control" name="from" required>
                                            </div>

                                            <div>
                                                <label for="date" style="color:#000000;">To</label>
                                                <input type="date" class="form-control" name="to" required>
                                            </div>
                                            <div>
                                                
                                             <?php
                                                if (!isset($_GET['initialbudget'])) {
                                                    header("Location: Create_New_Plan.php");
                                                    exit();
                                                }
                                                $initialbudget = $_GET['initialbudget'];
                                                
                                            ?>
                                                
                                             <?php
                                                if (!isset($_GET['noofpeople'])) {
                                                    header("Location: Create_New_Plan.php");
                                                    exit();
                                                }
                                                $noofpeople = $_GET['noofpeople'];
                                                
                                            ?>
                                       
                                            <div class="form-group col-md-6" >
                                                <label for="number" style="color:#000000;">Initial Budget</label><br>
                                                 
                                                <input type="quantity" class="form-control" id="quantity" name="initialbudget" <?php echo "$initialbudget" ?> Placeholder="Initial Budget" >
                                               
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="number" style="color:#000000;">No. of people</label><br>
                                                    <input type="quantity" class="form-control" id="quantity" name="noofpeople" <?php echo "$initialbudget" ?>placeholder="Number of Persons">
                                                </div>
                                            </div>
                                            
   
                                            <div class="form-group">
                                                <label for="name" style="color:#000000;">Person 1</label>
                                                <input type="name" class="form-control" id="name1" name="name" placeholder="Person 1 Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="name" style="color:#000000;">Person 2</label>
                                                <input type="name" class="form-control" id="name2" name="name" placeholder="Person 2 Name" required>
                                            </div>

                                            <a href="New_Plan_Created.php"><button type="submit" class="btn btn-primary btn-block">Submit</button></a>
                                            
					</form>
                                    
				</div>
				
			</div>
                    </div>
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>



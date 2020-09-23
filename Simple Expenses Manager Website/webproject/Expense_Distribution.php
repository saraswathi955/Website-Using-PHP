<?php
    include './includes/common.php';
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
		<link rel="stylesheet" type="text/css" href="./style/index.css">
	</head>
	<body>
            <div class="container panel-margin">
                <div class="col-md-4 col-md-offset-0">
                    <h4>Your Plans</h4>
                    <center>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align: center;">My first Plan<span class="glyphicon glyphicon-user" style="float: right;"></span></h3>
                        </div>
                        <div class="panel-body">
                            
                            <form method="Get">

                                <table class="table table-hover">
                                    <tr>
                                        <th>Initial Budget</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>First</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Second</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Total amount spent</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Remaining Amount</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Individual Shares</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>First</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Second</th>
                                        <th></th>
                                    </tr>
                                   
                                </table>
                                <a href="New_Plan_Created.php"><button type="submit" class="glyphicon glyphicon-arrow-left"> GoBack</button></a>
                            </form>
                        </div>
       
                    </div>
                    </center>
                </div>
            </div>

            <?php
		        require "./includes/footer.php";
            ?>
		
	</body>
</html>

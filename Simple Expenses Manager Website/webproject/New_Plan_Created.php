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
            <div class="col-md-6 col-md-offset-0">
                <h4>Your Plans</h4>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center;">Trip to Delhi<span class="glyphicon glyphicon-user" style="float: right;"></span></h3>
                </div>
                <div class="panel-body">
                    <form method="post">

                            <table class="table table-hover">
                                <tr>
                                    <th>Budget</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Remaining Amount</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </table>
                    </form>
                </div>
               
            </div>

           
        </div>

        <button type="button" class="btn btn-outline-info" style="float: center; bottom: 50%; margin-left:auto;margin-right:auto;display:block;margin-top:15%;margin-bottom:0%;">Expense Distribution</button> <br><br>
        <div id="banner_image" style="margin-bottom: 0px;">
            <div class="inner-banner-image">
                <center>
                    <div class="row row_style">
                        <div class="col-xs-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Add New Expense</h4>
                                </div>
                                <div class="panel-body">
                                    <form method='post' action='New_Plan_Created_Script.php'>
                                        <div class="form-group">
                                            <label for="title" style="float:left;">Title</label>
                                            <input type="title" class="form-control" id="tilte" name="name" placeholder="Expense Name" required>
                                        </div>
                
                                        <div>
                                            <label for="date" style="float:left;">Date</label>
                                            <input type="date" class="form-control" name="date"  placeholder="dd/mm/yyyy" required>
                                        </div><br>
                
                                        <div>
                                            <label for="amount" style="float:left;">Amount Spent</label>
                                            <input type="amount" class="form-control" name="amount"  placeholder="Amount Spent" required>
                                        </div><br>

                                        <div class="form-group">
                                            <select class="form-control" id="exampleFormControlSelect1" placeholder="Choose">
                                            <option>Choose</option>
                                            <option>First</option>
                                            <option>Second</option>
                                            </select>
                                        </div>

                                        <div class="custom-file">
                                            <label  for="inputGroupFile" style="float:left;"> Upload file</label>
                                            <input type="file" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon01">
                                            
                                        </div>
                                    </form>

                                        <button type="submit" class="btn btn-primary btn- btn-block">Add</button>

                                        <div class="modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Modal title</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th>Amount</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Paid by</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Paid on</th>
                                                            <th></th>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                  
                                                  <button type="button" class="btn btn-primary">You Don't bill</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            
	</body>
</html>
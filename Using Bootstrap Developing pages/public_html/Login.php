<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="./style/index.css">
    </head>
    <body>
        
        <nav class="nav navbar-fixed-top navbar-inverse">
            <div class="container">
		<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
			<span class="icon-bar"></span>
                        <span class="icon-bar"></span>
			<span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">LifeStyle Stores</a>
		</div>
                <div class="collapse navbar-collapse" id="mynavBar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="SignUp.html"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav> <br><br><br>

        
        <div class="container panel-margin">
            <div class="panel panel-primary">
		<div class="panel-heading">
                    <h3 class="panel-title">Login to make purchase</h3>
		</div>
		<div class="panel-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			</div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="panel-footer">
                    Don't have an account?<a href="signup.html">Register</a>
		</div>
            </div>
		</div>
         <footer>
            <div class='container'>
               'Copyright <span class='glyphicon glyphicon-copyright-mark'></span>Lifestyle Stores. All Rights Reserved'
                    | 'Contact Us: +91 90000 00000'
            </div>
        </footer>

    </body>
</html>

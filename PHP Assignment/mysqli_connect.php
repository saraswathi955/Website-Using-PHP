<?php
//die is the function is used to stop the execution of the function if connection is not estalished
//or means mysqli_connect is not executed it will execute die function
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
?>
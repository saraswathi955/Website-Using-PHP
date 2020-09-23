<?php
 function sum($parameter1, $parameter2 = 0) {
            $addition = $parameter1 + $parameter2;
            echo "sum of the variables is" .$addition . ".";
//            return $addition;
            return;
        }

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variable, Data types and Operators</title>
    </head>
    <body>
        <?php
        // put your code here
        
        $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
        echo"I am Ummadishetty Saraswathi";
        echo 45 + 56;
        
        $var1 = 18;
        $var2 = 13;
        
        $var3 = "My favouriate color is red";
        $var4 = "But I dont have that color dress.";
        
        $sum = sum($var1, $var2);
        
        echo gettype($var2);
        echo gettype($var1);
        Echo "$sum". ".";
        
        Echo $var3 . $var4;
//        Echo "My lucky number is " . $sum; 
        ?>
    </body>
</html>


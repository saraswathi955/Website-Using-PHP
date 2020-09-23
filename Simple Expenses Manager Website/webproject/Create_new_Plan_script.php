<?php
    require "./includes/common.php";
    
    $initialbudget=filter_input(INPUT_POST,'initialbudget');
    $noofpeople=filter_input(INPUT_POST,'noofpeople');
    
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $initial_budget = $_GET['id'];
        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO plans (initialbudget, noofpeople) VALUES ('$initialbudget','$noofpeople','create new plan')";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));

    }
    $budget_query = "SELECT * FROM  plans WHERE initialbudger = '$initialbudget'";
    $oeople_query = "SELECT * FROM plans WHERE noofpeople = '$noofpeople'";
    
    $query_result_budget =  mysqli_query($con, $budget_query);
    $query_result_people =  mysqli_query($con, $budget_query);
    
    

    if(mysqli_num_rows($query_result_budget) >= 50){
        die("Value must be greater than or equal to 50");
        
    } else if (mysqli_num_rows($query_result_people) >= 1){
         die( "Value must be greater than or equal to 1");
    }else{
        $row = mysqli_fetch_array($query_result__budget);
        $row = mysqli_fetch_array($query_result__people);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row["id"];

       
        
    }
    
    // redirect to Plan page
    header("location: Plan_Details.php");
?>


        
      
   

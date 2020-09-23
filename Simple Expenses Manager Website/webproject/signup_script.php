<?php
    require "./includes/common.php";
    // get details
    
    $name=filter_input(INPUT_POST,'name');
    $email=filter_input(INPUT_POST,'email');
    $password=filter_input(INPUT_POST,'password');
    $phonenumber=filter_input(INPUT_POST,'phonenumber');
    
    
    $regex_email = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    $regex_num = "/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/";
    $regex_pass = '[a-zA-Z0-9+&@#/%?=~_|!:,.;]{6,}+$/';
    
    // hash password
    $hashed_password = md5($password);

    $duplicate_email_query="select * from users where email='$email'  AND password = '$hashed_password' AND phonenumber='$phonenumber'";
    $duplicate_email_result=mysqli_query($con,$duplicate_email_query);
    $num = mysqli_num_rows($duplicate_email_result);
    

    if($name > 3) {
        alert('Invalid Name');
    }
    
    if ($num > 0) {
    $m = "<span><strong>Email Already Exists</strong></span>";
    header('location: signup.php?m1=' . $m);
    } else if (!preg_match($regex_email, $email)) {
        $m = "<span class='red'><strong>'Not a valid Email Id'</strong></span>";
        header('location: signup.php?m1=' . $m);
    } else if (!preg_match($regex_num, $phonenumber)) {
        $m = "<span>Not a valid phone number</span>";
        header('location: signup.php?m2=' . $m);
    }
    else if ((strlen($password) < 6) && (!preg_filter($regex_pass, $password))){
        $m = "<span class='red'><strong>Password should have at-least 6 characters long</strong></span>";
        header('location: signup.php?m2=' . $m);
        
    } else if (empty($name) || empty($email) || empty($password) || empty($phonenumber)) {
         alert('Please fill all required fields!');
        
    }
    
    
//    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $user_registration_query = "INSERT INTO users (name, email, password, phonenumber) VALUES ('$name', '$email', '$hashed_password', '$phonenumber')";
    $user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

 
    
    $_SESSION["email_id"] = $email;
    $_SESSION["id"] = mysqli_insert_id($con);

    // redirect to index page
    header("location: Home.php");
    
?>


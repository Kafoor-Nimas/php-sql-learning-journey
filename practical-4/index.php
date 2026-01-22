<?php
$correct_username ="admin";
$correct_password ="pass123";

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    //Get user input from form
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    //validate using logical operator
    if($entered_username === $correct_username && $entered_password === $correct_password){
        echo "Login Successfully!";
    }else{
        echo "Invalid credentials.";
    }
}

?>
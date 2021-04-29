<?php
// Include config file
// require_once "config.php";
if(!isset($_SESSION)) {
    session_start();
}
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
      if($_POST["username"] == 'admin' && $_POST["password"] == '1234567') {
        $_SESSION['LOGGED_IN_ADMIN'];
        header('Location: /admin');
      }
    }
    
}
?>
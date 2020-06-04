<?php
session_start();

$username = "";
$email = "";
$errors = array();

include "db_connect.inc.php";

//if the register button is clicked

 if(isset($_POST['register'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    
    //ensure that form field are properly filled
    
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    
    if($password_1 != $password_2){
        array_push($errors,"Password do not match");
    }
    
    //if no errors, save user to database
    
    if(count($errors) == 0){
        $password = md5($password_1); //encrypt pword before //storing to db(security)
        $sql = "INSERT INTO login(username, password, email) VALUES('$username', '$password', '$email')";
        mysqli_query($db, $sql);
          $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php'); //redirect to home page
    }
 }
// log user in from login page
if(isset($_POST['login.php'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    //ensure that form field are properly filled
    
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    if(count($errors) == 0) {
        $password = md5($password); //encrypt password before comparing with that from db
        $query = "SELECT * FROM users WHERE username= '$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            // log user in
             $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php'); //redirect to home page
        }else{
            array_push($errors, "wrong username/password combination");
            
        }
    }
}

//logout

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>

<!DOCTYPE html>
<html>

<head>

    <title>User Registration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
}

body {
    font-size: 120%;
    background: #f8f8ff;
}

.header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5f9ea0;
    text-align: center;
    border: 1px solid #b0c4de;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}


form,
.content {

    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: url(esta.jpg);
    border-radius: 0px 0px 10px 10px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}

input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;

}

.btn {
    padding: 10px;
    font-size: 15px;
    color: azure;
    background: #5f9ea0;
    border: none;
    border-radius: 5px;
}


#error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
    
}

.success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}

    </style>
</head>

<body>

    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">

        <!-- Display validation errors here-->
        <?php //include('errors.php'); ?>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>

        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>

</body>

</html>

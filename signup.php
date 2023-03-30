<?php
session_start();
    include("connection.php");
    include("functions.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        //SOMETHING WAS POSTER
        $user_name=$_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ( '$user_id' ,'$user_name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }
        else
        {
            echo "Please enter some valid imformation";
        } 
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title> 
</head>
<body> 
    <div class="bg">
        <div class="box"> 
            <form method="post">
                <div id="login">Signup</div>
                <img src="bg.png"></img>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" name="Sign up"> <br><br>
                <a href="login.php">Click to Login</a><br><br>
            </form>
        </div>
    </div>
</body>
</html>
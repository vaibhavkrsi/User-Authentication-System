<?php 
session_start();
    include("connection.php");
    include("functions.php"); 
    $user_data = check_login($con);
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>
<body>
    <div class="bg-image">
        <div class="container">
            <a href="logout.php"> login.php</a>
            <h1>This is my website</h1>
            <br> 
            Hello, <?php echo $user_data['user_name']; ?>
        </div>
    </div>

</body>
</html>
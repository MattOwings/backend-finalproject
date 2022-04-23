<?php 

// Database connection
    $dsn = 'mysql:host=localhost;dbname=instructor';
    $username = 'mowings';
    $password = 'root';

    // Verify Database Connection
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
    }

    $loggedIn = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/style.css"/>

    <title>Backend Final</title>
</head>
<body>
    <div class="navbar">
        <h1>Login Page</h1>
    </div>

    <form class="register-form" name="form" action="" method="get">
        <h1>Login Page</h1>
        <label>Username or Email: </label>
        <input name="username" placeholder="Username/Email" required autofocus></input>
        <br>
        <label>Password: </label>
        <input name="password" placeholder="Password" required></input>
        <br>
        <button style="margin-top: 2rem;" type="post">Login</button>
</form>

    <div class="footer">
        <h1><?php 
            $username = $_GET['username'];
            $email = $username.'@aum.edu'; // String concatenation
        ?></h1>
        <h1>Web Application by Matthew Owings</h1>
        <br>
        <h2>Dr. Gao's Back End Web Development Class Final Project</h2>
    </div>
    
</body>
</html>
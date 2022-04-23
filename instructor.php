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

    // Students SQL Query
    $query = "SELECT firstname, lastname FROM students;";
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();

    // My Courses SQL Query
    $query = "SELECT courseName FROM mycourses;";
    $statement = $db->prepare($query);
    $statement->execute();
    $myCourses = $statement->fetchAll();
    $statement->closeCursor();

    // Create Account
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
        <h1>Logged in as:</h1>
    </div>

    


    <h1 class="header">Courses I Teach</h1>
    <div class="my-courses">
        <?php
            foreach($myCourses as $courses) {
            print_r('<div class="flex-item"><p>'.$courses[0].'</p></div>');
        }
        ?>
    </div>

    <h1 class="header">My Students</h1>
    <div class="my-students">
        <?php
            foreach($students as $student) {
            print_r('<p>'.$student[1].', '.$student[0].'</p>');
        }
        ?>
    </div>

    <div class="footer">
        <h1>Web Application by Matthew Owings</h1>
        <br>
        <h2>Dr. Gao's Back End Web Development Class Final Project</h2>
    </div>
    
</body>
</html>
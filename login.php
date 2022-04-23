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
    $query = "SELECT * FROM instregister;";
    $statement = $db->prepare($query);
    $statement->execute();
    $instructor = $statement->fetchAll();
    $statement->closeCursor();

    // Students SQL Query
    $query = "SELECT * FROM students;";
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();

    // My Courses SQL Query
    $query = "SELECT * FROM mycourses;";
    $statement = $db->prepare($query);
    $statement->execute();
    $myCourses = $statement->fetchAll();
    $statement->closeCursor();
    
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
    <h1 style="background: none; text-align: center;"><a style="font-size: 5rem; color: cyan; text-align: center;" href="index.php">Go to Home Page</a></h1>


    <form class="register-form" name="form" action="" method="get">
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
            $pass = $_GET['password'];
            
            $query = "SELECT * FROM instregister;";
            $statement = $db->prepare($query);
            $statement->execute();
            $regUsers = $statement->fetchAll();
            $statement->closeCursor();

            foreach($regUsers as $Users) { // USING USERNAME
                if (strtolower($Users[0]) == strtolower($username)) { // Username exists
                    //echo "<h1>Username exists</h1>";
                    if ($Users[5] == $pass) { // Password is correct for username
                        //echo "<h1>Correct Password</h1>";
                        $loggedIn = true;
                    }
                }
            }
            foreach($regUsers as $Users) { // USING EMAIL
                if (strtolower($Users[4]) == strtolower($username)) { // Username exists
                    //echo "<h1>Username exists</h1>";
                    if ($Users[5] == $pass) { // Password is correct for username
                        //echo "<h1>Correct Password</h1>";
                        $loggedIn = true;
                    }
                }
            }

        ?>
        
        <div class="footer">
            <?php 
                if ($loggedIn == true) {
                    $username = $_GET['username'];
                    echo '<h1 style="color: #90EE90">Logged in as: '.$username.'</h1>';
                } else {
                    $username = $_GET['username'];
                    if (strlen($username) > 1) {
                        echo '<h1 style="color: orange">Invalid Username or Password</h1>';
                    }
                }
            ?>
        </div>
        
    
    <h1 class="header">Instructor Profile</h1>
    <div class="my-courses">
        <?php
            if ($loggedIn == true) {
                foreach($instructor as $inst) {
                if ($inst[0] == $_GET['username']) {
                    print_r('<div class="flex-item"><p>'.$inst[0].'<br>Name: 
                '.$inst[1].' '.$inst[2].'<br> 
                '.$inst[3].'<br>
                '.$inst[4].'
                </p></div>');
                }
                
            }
        }
        ?>
    </div>


    <h1 class="header">Courses I Teach</h1>
    <div class="my-courses">
        <?php
            if ($loggedIn == true) {
                foreach($myCourses as $courses) {
                print_r('<div class="flex-item"><p>'.$courses[0].'<br>
                '.$courses[2].'<br>Room: 
                '.$courses[3].'<br>
                '.$courses[4].'<br>
                </p></div>');
            }
            
        }
        ?>
    </div>

    <h1 class="header">My Students</h1>
    <div class="my-students">
        <?php
            if ($loggedIn == true) {
                foreach($students as $student) {
                print_r('<p>'.$student[1].', '.$student[0].'
                <br>Grade: '.$student[3].'
                <br>ID: '.$student[2].'
                </p>');
            }
        }
        ?>
    </div>




    
    
    
    </h1>
        <h1>Web Application by Matthew Owings</h1>
        <br>
        <h2>Dr. Gao's Back End Web Development Class Final Project</h2>
    </div>
    
</body>
</html>
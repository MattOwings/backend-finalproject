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
        <h1>Register Page</h1>
    </div>
        <h1 style="background: none; text-align: center;"><a style="font-size: 5rem; color: cyan; text-align: center;" href="index.php">Go to Home Page</a></h1>


    <div class="footer">
        <h1>
            <?php 
                $username = $_GET['username'];
                
            $password = $_GET['password'];
            $confirmpassword = $_GET['confirmpassword'];
            if ($password == $confirmpassword) {
                if (strlen($username) > 1) {
                    echo "<h1 style='color: #90EE90'>Your Email Is: $username@aum.edu</h1>";
                    echo "<h1><a style='
                                font-size: 5rem; 
                                color: #90EE90' 
                                class='homeicon' 
                                href='http://localhost/backend-finalproject/login.php?username=&password='>Go to Login Page</a></h1>";
                }
            } else {
                echo "<h1 style='color: orange;'>Passwords do NOT match</h1>";

            }
                
                
            ?>

        </h1>
    </div>

    <form class="register-form" name="form" action="" method="get">
        <h1>Register Instructor Account</h1>
        <h1>Email is created after creating account</h1>
        <label>Username: </label>
        <input name="username" placeholder="Username" required autofocus></input>
        <br>
        <!--<label>Email: </label>
        <input name="email" placeholder="Email Address" autofocus></input>
        <br>-->
        <label>First Name: </label>
        <input name="fname" placeholder="First Name" required autofocus></input>
        <br>
        <label>Last Name: </label>
        <input name="lname" placeholder="Last Name" required></input>
        <br>
        <label>Gender: </label>
        <input name="gender" placeholder="Gender" required></input>
        <br>
        <label>Password: </label>
        <input name="password" placeholder="Password" required></input>
        <br>
        <label>Confirm Password: </label>
        <input name="confirmpassword" placeholder="Confirm Password" required></input>
        <br>
        <button style="margin-top: 2rem;" type="post">Create Account</button>
</form>

    <div class="footer">
        <h1><?php 
            $username = $_GET['username'];
            $email = $username.'@aum.edu'; // String concatenation
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            $gender = $_GET['gender'];
            $password = $_GET['password'];
            $confirmpassword = $_GET['confirmpassword'];

            // Only run if data has been inputted
            
            if ($password == $confirmpassword) {
                if (strlen($username) > 0 
                                && strlen($fname) > 0
                                && strlen($lname) > 0
                                && strlen($gender) > 0
                                && strlen($email) > 0
                                && strlen($password) > 0
                                ) { 
                                $query = "INSERT INTO instregister (username, firstname, lastname, gender, email, pass) VALUES 
                                ('".$username."', '".$fname."', '".$lname."', '".$gender."', '".$email."', '".$password."');";
                                $statement = $db->prepare($query);
                                $statement->execute();
                                $students = $statement->fetchAll();
                                $statement->closeCursor();
                            }
            } else {
                echo '<h1>Passwords do NOT match</h1>';
            }

        ?></h1>
        <h1>Web Application by Matthew Owings</h1>
        <br>
        <h2>Dr. Gao's Back End Web Development Class Final Project</h2>
    </div>
    
</body>
</html>
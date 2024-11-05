<?php
session_start();
include  "database/connect1.php";

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = date("y-m-d h:i:s");

    if(empty($email)){
        echo "email field cannot be empty";
    }
    elseif(empty($password)){
        echo "password cannot be empty";
    }
    else{
        $eqry = mysqli_query($conn, "SELECT * FROM `user` WHERE `email`='$email'");

        if(mysqli_num_rowa($eqry)>0){
            echo 'Email has been registered with, kindly  register with another email';
        }

            else{
                $insert = mysqli_query($conn, "INSERT INTO `users` (`email`, `password`, `sub_at`)
                VALUE ('$fullname', '$password', '$date')");

                if(empty($insert)){
                    echo "Something went wrong while trying to process your form, please try again or contact support.";
                }
                else{
                    echo "Your form has been submited.";
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="corriculum.php">Corriculum</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <!-- hero section -->
    <section id="hero_admission">
        <div class="ovaylay"></div>
        <div class="content">
            <h1>This iis the admission page</h1>
        </div>
    </section>

    <!-- hero section end here -->




    <form action="" method=post>
        <label for="email">Email:</label>
        <br>
        <input type="Email" name="email" id="">
        <br>

        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" id="">
        <br><br>
        <button type="login" name="login">Login</button>
    </form>



    
</body>
</html>
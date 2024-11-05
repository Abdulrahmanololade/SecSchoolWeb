<?php 
session_start();
include  "database/connect.php";

if(isset($_POST["login"])){
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $date = date("y-m-d h:i:s");

    if(empty($fullname)){
        echo "fullname field cannot be empty";
    }
    elseif(empty($password)){
        echo "password cannot be empty";
    }

            else{
                $insert = mysqli_query($conn, "INSERT INTO `users` (`fullname`, `password`, `sub_at`)
                VALUE ('$fullname', '$password', '$date')");

                if(empty($insert)){
                    echo "Something went wrong while trying to process your form, please try again or contact support.";
                }
                else{
                    echo "Your form has been submited.";
                }

                           
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="fullname">Fullname</label>
        <br>
        <input type="text" name="fullname" id="">
        <br>

        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="">
        <br><br>
        <button type="Login" name="login">Login</button>
    </form>
    
</body>
</html>
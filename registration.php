<?php


if (isset($_POST["registration"])) {


    echo "you clicked a button";

    include "connection.php";

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, ' $first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}




?>





<h1>Registration</h1>



<form action="registration.php" method="post">

    <p>Enter your first name </p>
    <input type="text" name="first_name"></p>

    <p>Enter your last name</p>
    <input type="text" name="last_name"></p>

    <p>Enter your email address</p>
    <input type="text" name="email"></p>

    <p>Enter your password</p>
    <input type="text" name="password"></p>

    <p><input type="submit" name="registration"></p>
<?php
    include('connection.php'); 

    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $email = $_REQUEST["email"];
    $username = $_REQUEST["username"];
    $pass1 = $_REQUEST["password"];
    
    $sql = "INSERT INTO login(username, password) VALUES('$username', '$pass1')";
    if(mysqli_query($con, $sql)) {
        {
            header("Location: signup.php?success");
            exit();
        } 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
?>
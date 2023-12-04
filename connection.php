
<?php      
    $servername = "localhost";
    $username = "root";
    $password = "pass";
    $database = "accounts"; 
      
    $con = mysqli_connect($servername, $username, $password, $database);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

//     $sql = "DELETE FROM login WHERE username=124124";
//     if (mysqli_query($con, $sql)) {
//         echo "New record created successfully";
//    } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($con);
//    }

?>
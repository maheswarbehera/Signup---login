<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";

    //create connection 
    $conn = mysqli_connect($servername, $username, $password, $db);

    //check connection
    if(!$conn){
        die("Unable to connect".mysqli_connect_error());
    }
    // else{
    //     echo "Connected";        
    // }
?>
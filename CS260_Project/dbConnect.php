<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "faculty";

    $conn = mysqli_connect($severname , $username , $password , $database ) ;

    if( !$conn ) {
        die("Failed to Connect : " . mysqli_connect_error());
    }
    else {
        echo "Connection was successfull<br>";
    }


?>
<?php

try {
    //HOST
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "wooxtravel");

    //username
    define("USER", "root");

    //pass
    define("PASS", "");

    // Database connection
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . "", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // if($conn == true) {
    //     echo "DB Connection Successfull";
    // } else {
    //     echo"Connection Failed";
    // }
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
?>
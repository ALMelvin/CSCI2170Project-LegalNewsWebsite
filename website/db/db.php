<?php
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "GroupProject";
$dbconn = new mysqli($host, $username, $password, $dbname);

//Check for DB connection:
    if($dbconn->connect_error){
        die();
    }
    else{
        //echo "<p>Connected</p>";
    }
?>
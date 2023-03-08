<?php
$servername = "localhost";
$dbname='smdb';
$suername = "root";
$password = "root";

// Create conncetion
$db = new mysqli($servername, $suername, $password, $dbname);

// Check connection 
if ($db-> connect_error) {
    die("Connection failed:".$db->connect_error);
}
echo "success";
?>
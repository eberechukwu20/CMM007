<?php
$servername = "localhost";
$dbname='cmm007';
$suername = "root";
$password = "";

// Create conncetion
$db = new mysqli($servername, $suername, $password, $dbname);

// Check connection 
if ($db-> connect_error) {
    die("Connection failed:".$db->connect_error);
}
echo "success";
?>
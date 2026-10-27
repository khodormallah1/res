<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='frojwotum';

$con = new mysqli($host, $username, $password, $dbname);
if(!$con){
    die("Cannot connect to the database.". $conn->error);
}
else
    echo "yes";
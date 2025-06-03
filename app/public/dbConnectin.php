<?php 

$servername = "localhost";
$username = "tristan";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername:3306;dbname=druzinaceri", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}











/*class dbConnectin {

}*/







?>
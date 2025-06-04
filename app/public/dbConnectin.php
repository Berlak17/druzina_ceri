<?php 

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=mysql;dbname=druzinaceri", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}











/*class dbConnectin {

}*/







?>
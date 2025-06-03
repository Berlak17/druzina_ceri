<?php
include 'dbConnectin.php';

$queryAll = "SELECT * FROM narocniki";

$stmt = $conn->prepare($queryAll);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vzorec.php';
}

$conn=null;
?>
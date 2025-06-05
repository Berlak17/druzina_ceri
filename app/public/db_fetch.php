<?php
include 'dbConnectin.php';

$queryAll = "SELECT ime, priimek, telefon, naslov, mesto, naslov_podjetja, se_strinja, st_posta FROM narocniki, posta WHERE fk_posta = id_posta";

$stmt = $conn->prepare($queryAll);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vzorec.php';
}

$conn=null;
?>

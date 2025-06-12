<?php
include 'dbConnectin.php';

$queryAll = "SELECT ime, priimek, telefon, naslov, mesto, st_posta, naslov_podjetja, se_strinja FROM narocniki, posta WHERE id_posta=fk_posta;";

$stmt = $conn->prepare($queryAll);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vzorec.php';
}

$conn=null;
?>
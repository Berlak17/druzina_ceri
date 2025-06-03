<?php
require 'dbConnectin.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['narocilo'])){
        $ime = $_POST['ime_priimek'];
        $priimek = $_POST['ime_priimek'];
        $telefon = $_POST['telefon'];
        $naslov = $_POST['naslov'];
        $mesto = $_POST['mesto'];
        $posta = $_POST['postna_stevilka'];
        $naslov_podjetja = $_POST['naslov_podjetja'];
        $se_strinja = $_POST['pogoji_poslovanja'];        

        $queryPosta = "SELECT id_posta FROM posta WHERE st_posta='$posta';";
        $conn->exec($queryPosta);

        $queryNarocnik = "INSERT INTO narocniki(ime, priimek, telefon, naslov, mesto, fk_posta, naslov_podjetja, se_strinja)
        VALUES('$ime', '$priimek','$telefon','$naslov','$mesto','$queryPosta','$naslov_podjetja','$se_strinja')";


        $conn=null;

    }
    

}
?>
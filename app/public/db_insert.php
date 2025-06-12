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

        $queryPosta = $conn->prepare("SELECT id_posta FROM posta WHERE st_posta='$posta';");
        $queryPosta->execute();
        $queryPosta = $queryPosta->fetch(PDO::FETCH_ASSOC);
        $queryPosta = $queryPosta['id_posta'];

        if($se_strinja == 'on'){
            $se_strinja = 1;
        }


        $queryNarocnik = "INSERT INTO narocniki(ime, priimek, telefon, naslov, mesto, fk_posta, naslov_podjetja, se_strinja)
        VALUES('$ime', '$priimek','$telefon','$naslov','$mesto','$queryPosta','$naslov_podjetja','$se_strinja');";
        $conn->exec($queryNarocnik);

        $conn=null;

    }
    

}
?>
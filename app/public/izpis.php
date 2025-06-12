<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Družina Čeri</title>

    <link href="main.css" rel="stylesheet">
    

    <script src=../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js></script>
    <script src="costum.js" defer></script>
</head>
<body>
    <?php 
        $ime_priimek = $_REQUEST["ime_priimek"];
        $telefon = $_REQUEST["telefon"];
        $naslov = $_REQUEST["naslov"];
        $mesto = $_REQUEST["mesto"];
        $postna_stevilka = $_REQUEST["postna_stevilka"];
        $naslov_podjetja = $_REQUEST["naslov_podjetja"];
        $se_strinja = $_REQUEST["pogoji_poslovanja"];
    ?>
    <table>
        <tr>
            <td>Ime in priimek: </td>
            <td><?= $ime_priimek ?></td> 
        </tr>
        <tr>
            <td>Telefon: </td>
            <td><?= $telefon ?></td> 
        </tr>
        <tr>
            <td>Naslov: </td>
            <td><?= $naslov ?></td> 
        </tr>
        <tr>
            <td>Mesto: </td>
            <td><?= $mesto ?></td> 
        </tr>
        <tr>
            <td>Poštna številka: </td>
            <td><?= $postna_stevilka ?></td> 
        </tr>
        <tr>
            <td>Naslov podjetja: </td>
            <td><?= $naslov_podjetja ?></td> 
        </tr>
        <tr>
            <td>Se strinja?: </td>
            <td><?= $se_strinja ?></td> 
        </tr>
    </table>
    <br />


<?php if($_SERVER['REQUEST_METHOD']==='POST'){
        include 'db_insert.php';
    }
    ?>
<table class="table">
<tr>
<td>Ime in priimek</td>
<td>Telefon</td>
<td>Naslov</td>
<td>Pošta</td>
<td>Naslov podjetja</td>
<td>Se strinja</td>
</tr>
<?php include 'db_fetch.php' ?>                                                        

</table>

<!-- bolsi acordian-->
<?php include ("footer_nav.php"); ?>
</body>
</html>

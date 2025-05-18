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
        $st_kartice = $_REQUEST["st_kartice"];
        $MMLL = $_REQUEST["MMLL"];
        $CVV = $_REQUEST["CVV"];
        $cardName = $_REQUEST["cardName"];
    ?>
    <table>
        <tr>
            <td>Številka kartice (😈): </td>
            <td><?= $st_kartice ?></td> 
        </tr>
        <tr>
            <td>MMLL: </td>
            <td><?= $MMLL ?></td> 
        </tr>
        <tr>
            <td>CVV: </td>
            <td><?= $CVV ?></td> 
        </tr>
        <tr>
            <td>Ime na kartici: </td>
            <td><?= $cardName ?></td> 
        </tr>
    </table>
    <br />

<!-- bolsi acordian-->
<?php include ("footer_nav.php"); ?>
</body>
</html>

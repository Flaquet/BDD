<?php require("NewUser.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <h1>Exercice 1</h1>

    <?php

    $User = new User();
    $User->setNomPrenom("Flaquet", "Edouard");
    $User->AfficheUser();

    ?>

    <table>
        <tr>
            <td> Les User </td> 
            
        </tr>
        <tr>
            <td>Propriétés</td>
            <td><span id="ligne">-Nom</span> -Premon</td>
        </tr>
        <tr><td>Void</td><td>AfficheUser()</td></tr>
    </table>

</body>

</html>
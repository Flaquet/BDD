<?php require("user.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
        $User1 = new User();
        $User1->setNom("Edouard");
        $User1->setMdp("123");
        $User1->AfficherNom();
        $User1->AfficherMdp();

    ?>    

    <form method="POST">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >

    </form>

    <?php

        if (isset($_POST['username'])) {
            $isConnect = $User1->verifMdp($_POST['username'],$_POST['password']);
            if($isConnect){
                echo "connecté";
            }else{
                echo "erreur";
            }
        }

    ?>

</body>
</html>
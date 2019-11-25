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

        $User2 = new User();
        $User2->setNom("Cyril");
        $User2->setMdp("123");
        $User2->AfficherNom();
        $User2->AfficherMdp();

        $User3 = new User();
        $User3->setNom("Romain");
        $User3->setMdp("123");
        $User3->AfficherNom();
        $User2->AfficherMdp();

    ?>    

    <form action=""
    ></form>
</body>
</html>
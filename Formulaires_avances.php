<?php require("user.php");
try {

    $db = new PDO("mysql:host=192.168.65.204; dbname=personnage; charset=utf8", "ed", "ed");

    $DonneeBruteUser = $db->query("select * from personnage");
    $TabUserIndex = 0;
    while ($tab = $DonneeBruteUser->fetch()) {
        //ici on creer nos objets User pour chaque tuple de notre requête
        //et on les places dans un tableau de User
        $TabUser[$TabUserIndex++] = new User($tab['id_personnage'], $tab['Pseudo']);
    }
} catch (Exception $e) {
    echo "ereur : " . $e->getMessage();
}
?>
<FORM action="" methode="POST">
    <select name="pets" id="pet-select">
        <?php
        //parcours du tableau de User pour afficher les options de la liste déroulante
        foreach ($TabUser as $objetUser) {
            echo '<option value="' . $objetUser->getId() . '"selected>' . $objetUser->getNom() . '</option>';
        }

        ?>
    </select>
    <button type="submit" name="pseudo">Envoyer</button>
</FORM>
<?php 
            //traitement du formulaire
            if (isset($_POST["pseudo"])) {
                //recherche de l'id dans le tableau de user
                foreach ($TabUser as $objetUser) {
                    if ($objetUser->getId() == $_POST["pseudo"]) {
                        $objetUser->getNom();
                    }
                }
            } else {
                echo "Aucun user selectionné";
            }
            ?>
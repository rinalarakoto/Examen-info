<?php
$serveur="localhost";
$login="root";
$pass="";
try{
$connexion=new PDO("mysql:host=$serveur;dbname=mathématique",$login,$pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$requete=$connexion->prepare("SELECT * FROM informatique");
$requete->execute();
$resultat=$requete->fetchall();
}
catch(PDOException $e){
    echo "echec".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>bibliothèque scientifique</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form method="POST" action="Tinformatique.php">
    <fieldset id="s1">
        <legend>Information personnelles :</legend>
        <label for="prenom">Entrer votre prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="nom">Entrer votre nom :</label>
        <input type="text" id="nom" name="nom"><br>
</fieldset>

    <fieldset id="s2">
        <legend>Information sur vos livre :</legend>
        <label for="titre ">Entrer le titre de votre choix.</label>
        <input type="text" id="titre" name="titre"><br>
    </fieldset>
        <input type="submit" value="Envoyer">
    </body>
</html>

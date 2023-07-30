<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
try{
   $connexion=new PDO("mysql:host=localhost;dbname=mathématique","root",""); 
   $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Bonjour ";
echo $_POST["prenom"]."."."<br>";
}
catch(Exception $e){
    echo "erreur " .$e->getMessage();
}
$titre=$connexion->prepare('SELECT * FROM algèbre WHERE titre=?');
$titre->execute(array($_POST['titre']));
if ($titre->rowCount()==0){
  echo "on a pas encore cette livre";
}
  else {
  while ($ligne=$titre->fetch()){
    echo "Titre: " .$ligne["Titre"]. "  "."<br>"."écrit(e)(s) par: ".$ligne["Auteurs"]."  "."<br>"."Nombre de page: ".$ligne["Page"]."  "."<br>"."Langue: ".$ligne["Langue"]."  "."<br>"."Niveau: ".$ligne["Niveau"]."  "."<br>"."Prix en Euro: ".$ligne["Prix"]."  "."<br>";
  
  }
}
}
?>
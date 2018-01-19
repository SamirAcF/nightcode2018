<?php
try{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=theater;charset=utf8', 'root', '');
}
catch(Exception $e){
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}
$requete=$bdd->prepare('SELECT * from showtimes');
$requete->execute();
while ($data = $requete->fetch()) {
 echo "Choisissez la seance que vous voulez voir : ";
 echo "<select name='selectSeance' id='selectSeance'>";
 while ($data = $requete->fetch()) {
 echo "<option value=".$data['id'].">".$data['name']."</option>";
 }
 echo "</select>";
 ?>

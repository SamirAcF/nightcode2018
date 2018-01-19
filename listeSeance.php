<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="style.css"/>
 <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
 <title>NightCode2018</title>
 </head>
 <body>
   <header>
     <h1>Liste des Séances</h1>
     <div class="btnPlace">
       <table>
         <tr>
           <td>
             <a href="index.php">
               <div class="btn">
                 <p>Retour</p>
               </div>
             </a>
           </td>
           <td>
             <a href="addSeance.php">
               <div class="btn">
                 <p>Ajouter séance</p>
               </div>
             </a>
           </td>
         </tr>
       </table>
     </div>
   </header>
   <div class="global">
     <div class="box">

       <!-- J'attends la BDD -->
       <table>
          <tr>
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

				$requete=$bdd->prepare('SELECT id,name from showtimes;');
				$requete->execute();
				echo "Choisissez la seance que vous voulez voir : ";
				echo "<select name='selectSeance' id='selectSeance'>";
				while ($data = $requete->fetch()) {
		    echo "<option value=".$data['id'].">".$data['name']."</option>";
				}
				echo "</select>";
				?>
        <input type = "submit" name="btn" value = "Envoyer">
       <?php } ?>
     </tr>
   </table>


     </div>
   </div>
   <footer>
   </footer>
 </body>
</html>

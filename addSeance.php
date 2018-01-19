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
     <form method="post" action="addSeance.php">
       <div class="box">
       <label for="Seance">Nom de la Seance</label>
       <input type="text" id="addSeance" name="addSeance" />
       <br><br>
       <!--if ($requete==1) {
         header('location:addSeance.php?ajout_seance=reussi');
       }
       else
       {
         header('location:addSeance.php?ajout_seance=rate');
       }

       ?>
-->
         <div class="btn">
           <input type=submit VALUE="Enregistrer">
         </div>
       </a>
     </div>
   </form>

   <?php
   if(isset($_POST['addSeance']))
   {
     try{
       // On se connecte à MySQL
       $bdd = new PDO('mysql:host=localhost;dbname=theater;charset=utf8', 'root', '');
     }
     catch(Exception $e){
       // En cas d'erreur, on affiche un message et on arrête tout
       die('Erreur : '.$e->getMessage());
     }
     $nom = "\"".$_POST['addSeance']."\"";
     $requete=$bdd->exec("INSERT INTO showtimes(name) VALUES (".$nom.");");
     }
   ?>


   </div>
   <footer>
   </footer>
 </body>
</html>

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
       $client = new GuzzleHttp\Client();
       $res = $client->request('GET', '212.237.32.134/showtimes');
       var_dump($res);
       ?>
     </tr>
   </table>


     </div>
   </div>
   <footer>
   </footer>
 </body>
</html>

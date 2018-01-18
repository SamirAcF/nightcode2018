<?php
require_once 'libs/flight/Flight.php';




function theater(){
    echo "salut c'est cool";
}
function accueil(){
Flight::render('contact', null, "main_content");
Flight::render('base', array("title" => "Contact - HTM FoodTrucks"));
}

/*CONFIGURATION DES ROUTES*/
Flight::route('/','accueil');
Flight::route('/theater','theater');
Flight::start();
?>
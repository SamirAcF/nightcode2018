<?php
require_once 'libs/flight/Flight.php';




function theater(){
    echo "salut c'est cool";
}

function accueil(){
//Flight::render('contact', null, "main_content");
echo 'salut';
}

/*CONFIGURATION DES ROUTES*/
Flight::route('/','accueil');
Flight::route('/theater','theater');
Flight::start();
?>
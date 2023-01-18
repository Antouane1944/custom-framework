<?php
include('App/Models/Database.php');
include('App/Models/QueryBuilder.php');
include('App/Models/User.php');
include('App/Controllers/UserController.php');

$db = new Database();

/*** Récupération de la clé de la route ***/
$origine = explode('?', str_replace(dirname($_SERVER['PHP_SELF']), '', $_SERVER['REQUEST_URI']))[0];

/*** ROUTES ***/
$routes = array(
    "/dashboard" => "Ressources/Views/dashboard",
    "/users" => "Ressources/Views/users",
);

/*** Création de l'url de destination ***/
$destination = (array_key_exists($origine, $routes) ? $routes[$origine] : "Ressources/Views/404") . '.php';

/*** Appel du bon fichier ***/
require $destination;
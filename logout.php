<?php
session_start(); // on récupère la session courante
$_SESSION = array(); // on détruit les données stockées
session_destroy(); // on détruit la session
setcookie("login", "", time() - 3600, "/"); // Supprime le cookie
setcookie("password", "", time() - 3600, "/"); // Supprime le cookie
header("location: ./index.php");
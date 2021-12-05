<?php
session_start(); // on récupère la session courante
$_SESSION = array(); // on détruit les données stockées
session_destroy(); // on détruit la session
setcookie("name", "", time() - 3600, "/"); // Supprime le cookie
header("location: ./index.php");
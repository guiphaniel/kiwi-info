<?php
session_start(); // on récupère la session courante
$_SESSION = array(); // on détruit les données stockées
session_destroy(); // on détruit la session
header("location: ./index.php");
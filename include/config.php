<?php 
session_start();
const TEL_NUM = "641850305";
const MAIL_ADDRESS = "guilhem.richaud@etu.univ-lyon1.fr";
const POST_ADDRESS = "3 Avenue Pierre Semard, 01000 Bourg-en-Bresse";

function addActive($link) {
    if ($_SERVER['PHP_SELF'] == $link) {
        return 'active';
    } 
}

function validateImage($link){
    if (file_exists($link.'.webp') && str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
        return $link.'.webp';
    } else {
        return $link;
    }
}

//permet de se connecter avec les cookies
if(isset($_COOKIE['user'])) { 
    $_SESSION['user']['login'] = $_COOKIE['login']; 
    if ($_COOKIE['login'] === 'admin' && $_COOKIE['password'] === 'admin') {
        $_SESSION['user']['admin'] = true; 
    } else {
        $_SESSION['user']['admin'] = false; 
    }
}

//Base de Donnees
$dsn = 'sqlite:'.__DIR__.'/../database.db';
try {    
    $pdo = new PDO($dsn);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}

$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );







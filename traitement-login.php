<?php
    session_start(); // on ouvre la session
    $_SESSION['user']['login'] = $_POST['login']; 
    if ($_POST['login'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['user']['admin'] = true; 
    } else {
        $_SESSION['user']['admin'] = false; 
    }

    if (isset($_POST['remember-me']) && $_POST['remember-me'] == true){
        setcookie("login", $_POST['login'], time() + 86400, '/');
        setcookie("password", $_POST['password'], time() + 86400, '/');
    }

    header("location: ./index.php");
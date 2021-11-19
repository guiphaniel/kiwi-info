<?php
    session_start(); // on ouvre la session
    $_SESSION['user']['login'] = $_POST['login']; 
    if ($_POST['login'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['user']['admin'] = true; 
    } else {
        $_SESSION['user']['admin'] = false; 
    }

    header("location: ./index.php");
<?php
    session_start(); // on ouvre la session

    if ($_POST['login'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['admin'] = true; 
    } else {
        $_SESSION['admin'] = false; 
    }

    header("location: ./index.php");
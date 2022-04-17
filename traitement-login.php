<?php
    if(empty($_POST['login']) || empty($_POST['password'])){
        header("location: ./login.php");    
        die();
    }    

    $_SESSION['prenom'] = $_POST['login'];
    $_SESSION['remember-me'] = $_POST['remember-me']??null;

    include_once __DIR__.'/include/start-db.php';

    $sql = $pdo->prepare("SELECT password from users where name like :name");
    try {
        $sql->execute([
            'name' => $_POST['login'],
        ]);
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    $row = $sql->fetch();

    if($row)
        $hash = $row['password'];
    else {
        header("location: ./login.php");
        exit();
    }

    if(password_verify($_POST['password'], $hash)){
        session_start(); // on ouvre la session
        $_SESSION['user']['name'] = $_POST['login']; 
        if ($_POST['login'] === 'admin' && $_POST['password'] === 'admin') {
            $_SESSION['user']['admin'] = true; 
        } else {
            $_SESSION['user']['admin'] = false; 
        }

        if (isset($_POST['remember-me']) && $_POST['remember-me'][0] == 'accepter'){
            setcookie("name", $_POST['login'], time() + 86400, '/');
        }

        header("location: ./index.php");
    } else {
        header("location: ./login.php");
    }
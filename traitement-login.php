<?php
    if(empty($_POST['login']) || empty($_POST['password'])){
        header("location: ./login.php");    
        die();
    }    

    $_SESSION['prenom'] = $_POST['login'];
    $_SESSION['remember-me'] = $_POST['remember-me']??null;

    //Base de Donnees
    $dsn = 'sqlite:database.db';
    try {    
        $pdo = new PDO($dsn);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

    $sql = $pdo->prepare("SELECT password from users where name like :name");
    try {
        $sql->execute([
            'name' => $_POST['login'],
        ]);
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    $hash = $sql->fetch()['password'];

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
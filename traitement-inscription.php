<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['telephone']) || empty($_POST['birthdate']) || empty($_POST['address']) || empty($_POST['codePostal']) || empty($_POST['ville'])) {
        header("location: ./inscription.php");
        die();
    }

    $dsn = 'sqlite:database.db';
    try {    
        $pdo = new PDO($dsn);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

    //verification login deja existant
    $sql = $pdo->prepare("SELECT name from users where name like :name");
    try {
        $sql->execute([
            'name' => $_POST['prenom']
        ]);
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    if($sql->fetch()){
        header("location: ./inscription.php");    
        die();
    }

    //ajout user dans BD
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $sql = $pdo->prepare("INSERT INTO users (email, name, lastname, password, town, postal, address, updated) values(:email, :name, :lastname, :password, :town, :postal, :address, date() || ' ' || time())");
    $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
    $sql->bindParam('name', $_POST['prenom'], PDO::PARAM_STR);
    $sql->bindParam('lastname', $_POST['nom'], PDO::PARAM_STR);
    $sql->bindParam('password', $hash, PDO::PARAM_STR);
    $sql->bindParam('town', $_POST['ville'], PDO::PARAM_STR);
    $sql->bindParam('postal', $_POST['codePostal'], PDO::PARAM_INT);
    $sql->bindParam('address', $_POST['address'], PDO::PARAM_STR);

    try {
        $sql->execute();
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    header("location: ./login.php");
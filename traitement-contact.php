<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['sujet']) || empty($_POST['message'])) {
        header("location: ./contact.php");
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

    //ajout message dans BD
    $sql = $pdo->prepare("INSERT INTO contact (date, email, telephone, nom, prenom, sujet, message) values(date() || ' ' || time(), :email, :telephone, :nom, :prenom, :sujet, :message)");
    $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
    $sql->bindParam('telephone', $_POST['telephone'], PDO::PARAM_STR);
    $sql->bindParam('nom', $_POST['nom'], PDO::PARAM_STR);
    $sql->bindParam('prenom', $_POST['prenom'], PDO::PARAM_STR);
    $sql->bindParam('sujet', $_POST['sujet'], PDO::PARAM_STR);
    $sql->bindParam('message', $_POST['message'], PDO::PARAM_STR);

    try {
        $sql->execute();
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    header("location: ./index.php");
<?php include_once 'include/config.php' ?>
<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['sujet']) || empty($_POST['message'])) {
        header("location: ./contact.php");
        die();
    }

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['sujet'] = $_POST['sujet'];
    $_SESSION['message'] = $_POST['message'];

    include_once __DIR__.'/include/start-db.php';

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
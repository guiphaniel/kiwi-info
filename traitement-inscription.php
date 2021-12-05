<?php include_once 'include/config.php' ?>
<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['telephone']) || empty($_POST['birthdate']) || empty($_POST['adresse']) || empty($_POST['codePostal']) || empty($_POST['ville']) || empty($_POST['sexe'])) {
        header("location: ./inscription.php");
        die();
    }

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['adresse'] = $_POST['adresse'];
    $_SESSION['codePostal'] = $_POST['codePostal'];
    $_SESSION['ville'] = $_POST['ville'];
    $_SESSION['sexe'] = $_POST['sexe'];
    $_SESSION['loisirs'] = $_POST['loisirs']??null;
    $_SESSION['couleur'] = $_POST['couleur']??null;

    //sauvegarde avatar
    if(!empty($_FILES["photo"])){
        //recuperation de l'extension
        $fileType = $_FILES["photo"]['type'];
        $fileType = substr($fileType, strpos($fileType, "/") + 1);  
        //sauvegarde de l'image
        move_uploaded_file(
            $_FILES["photo"]['tmp_name'],
            __DIR__ . '/img/avatars/' . str_replace(' ', '-', strtolower($_POST['prenom'])) . '.' . $fileType
        );  
    }

    include_once __DIR__.'/include/start-db.php';

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
    
    $sql = $pdo->prepare("INSERT INTO users (email, name, lastname, password, town, postal, address, updated) values(:email, :name, :lastname, :password, :town, :postal, :adresse, date() || ' ' || time())");
    $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
    $sql->bindParam('name', $_POST['prenom'], PDO::PARAM_STR);
    $sql->bindParam('lastname', $_POST['nom'], PDO::PARAM_STR);
    $sql->bindParam('password', $hash, PDO::PARAM_STR);
    $sql->bindParam('town', $_POST['ville'], PDO::PARAM_STR);
    $sql->bindParam('postal', $_POST['codePostal'], PDO::PARAM_INT);
    $sql->bindParam('adresse', $_POST['adresse'], PDO::PARAM_STR);

    try {
        $sql->execute();
    } catch (PDOException $e) {
        echo 'La requête a échoué : ' . $e->getMessage();
        die();
    }

    header("location: ./login.php");
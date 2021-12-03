<?php include_once __DIR__.'/include/config.php' ?>
<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['titre1']) || empty($_POST['description']) || empty($_POST['contenu']) || empty($_FILES['photo'])) {
        header("location: ./creation-article.php");
        die();
    }

    $dsn = 'sqlite:database.db';
    try {    
        $pdo = new PDO($dsn);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    //recuperation de l'extension
    $fileType = null;
    $fileType = $_FILES["photo"]['type'];
    $fileType = substr($fileType, strpos($fileType, "/") + 1);  

    //verification login deja existant
    $sql = $pdo->prepare("INSERT INTO articles VALUES (NULL, :titre1, :titre2, :description, :auteur, :contenu, :imageType, date() || ' ' || time())");

    $sql->execute([
        'titre1' => $_POST['titre1'],
        'titre2' => $_POST['titre2'],
        'description' => $_POST['description'],
        'auteur' => $_SESSION['user']['name']??'no_name',
        'contenu' => $_POST['contenu'],
        'imageType' => $fileType
    ]);

    $id = $pdo->query('SELECT MAX(id) FROM articles')->fetch()[0];
    //sauvegarde de l'image
    move_uploaded_file(
        $_FILES["photo"]['tmp_name'],
        __DIR__ . '/img/articles-illustrations/' . $id . '-' . str_replace(' ', '-', strtolower($_POST['titre1'])) .   '.' . $fileType
    );  

    header('location: blog.php');
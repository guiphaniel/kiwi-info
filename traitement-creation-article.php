<?php include_once __DIR__.'/include/config.php' ?>
<?php
    //si des donnees required ne sont pas presentent, on revient sur la page
    if (empty($_POST['titre1']) || empty($_POST['description']) || empty($_POST['contenu']) || empty($_FILES['photo'])) {
        header("location: ./creation-article.php");
        die();
    }

    $_SESSION['titre1'] = $_POST['titre1'];
    $_SESSION['titre2'] = $_POST['titre2']??null;
    $_SESSION['description'] = $_POST['description'];
    $_SESSION['contenu'] = $_POST['contenu'];

    $dsn = 'sqlite:database.db';
    try {    
        $pdo = new PDO($dsn);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    //verification login deja existant
    $sql = $pdo->prepare("INSERT INTO articles VALUES (NULL, :titre1, :titre2, :description, :auteur, :contenu, null, date() || ' ' || time())");

    $sql->execute([
        'titre1' => $_POST['titre1'],
        'titre2' => $_POST['titre2'],
        'description' => $_POST['description'],
        'auteur' => $_SESSION['user']['name']??'no_name',
        'contenu' => $_POST['contenu']
    ]);

    if(isset($_FILES["photo"])) {
        //recuperation de l'id
        $id = $pdo->query('SELECT MAX(id) FROM articles')->fetch()[0];

        //creation du nom du fichier
        $fileType = $_FILES["photo"]['type'];
        $fileType = substr($fileType, strpos($fileType, "/") + 1);  
        $fileName = $id . '-' . str_replace(' ', '-', strtolower($_POST['titre1'])) .   '.' . $fileType;

        //sauvegarde du chemin de l'image dans la bd
        $sql = $pdo->prepare('UPDATE articles set image = :fileName where id = :id');
        $sql->execute([
            'fileName' => $fileName,
            'id' => $id
        ]);

        //sauvegarde de l'image en local
        move_uploaded_file(
            $_FILES["photo"]['tmp_name'],
            __DIR__ . '/img/articles-illustrations/' . $fileName
        ); 
    }    

    header('location: blog.php');
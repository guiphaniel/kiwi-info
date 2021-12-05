<?php include_once 'include/config.php' ?>
<?php
    include_once __DIR__.'/include/start-db.php';

    // verification de la validite de l'id passe
    if (isset($_GET['article'])) {
        $id = (int)$_GET['article']; //si une chaine de caracteres est passee, vaut 0
        if($id < 1) {
            header('location: /blog.php');
            exit();
        } else {
            $article = $pdo->query("select * from articles where id = $id")->fetch();
            // verification de la presence de l'article dans la BD
            if(!$article) {
                header('location: /blog.php');
                exit();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog</title>
</head>
<body>
    <?php include_once 'modules/header.php' ?>
    <main>
        <?php 
            if (isset($_GET['article'])) 
                include_once 'modules/blog-article.php';
            else
                include_once 'modules/blog-home.php';
        ?>
    </main>
    <?php include_once 'modules/footer.php' ?>
    <script src="js/script.js"></script>
</body>
</html>
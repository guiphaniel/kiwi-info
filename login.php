<?php session_start(); ?>
<?php include_once 'include/config.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <?php include_once 'modules/header.php' ?>
    <main>    
        <h1>Login</h1>    
        <h2>Connexion</h2>
        <p>Vous pouvez vous connecter ici !</p>
        <form action="traitement.php" method="post">          
            <fieldset>
                <legend><h3>Vos identifiants</h3></legend>
                <div class="input-group">
                    <input type="text" name="login" id="login" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="login">Login</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="password">Mot de passe</label>
                </div>
            </fieldset>                     
            <div>
                <button type="submit" class="submit">Soumettre</button>
            </div>   
        </form>
    </main>
    <?php include_once 'modules/footer.php' ?>
    <script src="js/script.js"></script>
</body>
</html>
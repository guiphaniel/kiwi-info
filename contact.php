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
    <title>Contact</title>
</head>
<body>
    <?php include_once 'modules/header.php' ?>
    <main>    
        <h1>Contact</h1>    
        <h2>Formulaire</h2>
        <p>N'hésitez pas à remplir ce formulaire pour toute demande nous concernant, ou à nous contacter à notre adresse mail : <a href="mailto:<?php echo MAIL_ADDRESS ?>"><?php echo MAIL_ADDRESS ?></a></p>
        <form action="ressources.php" method="post">          
            <fieldset>
                <legend><h3>Vos coordonnées</h3></legend>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="tel" name="telephone" id="telephone" placeholder=" " pattern="[0-9]{10}" required>
                    <span class="barre"></span>
                    <label for="telephone">Numéro de téléphone</label>
                </div>
                <div class="input-group">
                    <input type="text" name="nom" id="nom" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="nom">Nom</label>
                </div>
                <div class="input-group">
                    <input type="text" name="prenom" id="prenom" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="prenom">Prenom</label>
                </div>                
            </fieldset> 
            <fieldset class="message">
                <legend><h3>Votre message</h3></legend>
                <div class="input-group">
                    <input type="text" name="sujet" id="sujet" placeholder=" " required>
                    <span class="barre"></span>
                    <label for="sujet">Sujet du message</label>                
                </div> 
                <label for="message">Votre demande</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
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
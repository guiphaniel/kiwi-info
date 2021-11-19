<?php include_once 'include/config.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
</head>
<body>
    <?php include_once 'modules/header.php' ?>
    <main>   
        <h1>Inscription</h1>     
        <h2>Formulaire</h2>
        <p>Afin de bénéficier de l'intégralité de notre offre, inscrivez-vous ici.</p>
        <form action="ressources.php" method="post" enctype="multipart/form-data">         
            <div>
                <fieldset>
                    <legend><h3>Vos coordonnées</h3></legend>
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder=" " required>
                        <span class="barre"></span>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder=" " required>
                        <span class="barre"></span>
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password2" id="password2" placeholder=" " required>
                        <span class="barre"></span>
                        <label for="password2">Vérification du mot de passe</label>
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
                    <div class="input-group">
                        <input type="tel" name="telephone" id="telephone" placeholder=" " pattern="[0-9]{10}" required>
                        <span class="barre"></span>
                        <label for="telephone">Numéro de téléphone</label>
                    </div>
                    <div class="input-group">
                        <input type="date" name="birthdate" id="birthdate" min='1950-01-01' max="2009-01-01" required> <!-- age minimum requis de 12 ans -->
                        <span class="barre"></span>
                        <label for="birthdate">Date de naissance</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="address" id="address" placeholder=" " required>
                        <span class="barre"></span>
                        <label for="address">Adresse</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="codePostal" id="codePostal" placeholder=" " pattern="[0-9]{5}" required>
                        <span class="barre"></span>
                        <label for="codePostal">Code postal</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="ville" id="ville" placeholder=" " required>   
                        <span class="barre"></span>
                        <label for="ville">Ville</label>
                    </div>         
                </fieldset> 
                <fieldset>
                    <legend><h3>Vos informations</h3></legend>
                    <div>
                        <h4>Sexe</h4>
                        <div class="check-group">
                            <input type="radio" name="sexe" value="homme" id="homme"> 
                            <label for="homme">Homme</label> 
                        </div>
                        <div class="check-group">
                            <input type="radio" name="sexe" value="femme" id="femme"> 
                            <label for="femme">Femme</label>
                        </div>
                        <div class="check-group">
                            <input type="radio" name="sexe" value="autre" id="autre" checked> 
                            <label for="autre">Autre</label> 
                        </div>
                    </div>                    
                    <h4><label for="photo">Avatar</label></h4>
                    <input type="file" name="photo" id="photo" accept="image/png, image/jpeg">
                    <div id="loisirs">
                        <h4>Loisirs</h4>
                        <div class="check-group">
                            <input type="checkbox" name="loisirs[]" value="lecture" id="lecture"> 
                            <label for="lecture">Lecture</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="loisirs[]" value="jeux" id="jeux"> 
                            <label for="jeux">Jeux vidéos</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="loisirs[]" value="musique" id="musique"> 
                            <label for="musique">Musique</label>
                        </div>
                    </div>
                    <h4><label for="couleur">Couleur préférée</label></h4>
                    <input type="color" name="couleur" id="couleur">
                </fieldset>
            </div>              
            <div>
                <button type="submit" class="submit">Soumettre</button>
            </div>            
        </form>
    </main>
    <?php include_once 'modules/footer.php' ?>
    <script src="js/script.js"></script>
</body>
</html>
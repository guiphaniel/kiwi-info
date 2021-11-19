<?php session_start();
include_once 'include/config.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>  
    <?php include_once 'modules/header.php' ?>
    <main>        
        <h1>Accueil</h1>
        <article>
            <h2>Bienvenue chez nous !</h2>
            <section>
                <h3>Qui sommes nous ?</h3>
                <div class="section-content">
                    <img src="<?= validateImage('img/img-10_800x1.jpg')?>" alt="Interieur du Kiwi Info">
                    <p>
                        Le Kiwi info, c'est un endroit où tous les passionnés de la tech peuvent se réunir, pour échanger sur l'actualité, et jouer aux jeux vidéo et de société mis à disposition. Vous avez besoin d'aide pour vos devoirs en informatique ? Vous voulez rencontrer de nouvelles personnes qui ont les mêmes centres d'intérêts que vous ? Venez nous rencontrer ! Âge minimum requis : <strong>12 ans</strong>.
                    </p>
                </div>            
            </section>
            <section>
                <h3>Pourquoi avoir créé ce site internet ?</h3>
                <div class="section-content">
                    <img src="img/information.jpg" alt="Nuage de mots de l'information">
                    <p>
                        Ce site a été créé pour vous permettre de vous tenir informé de <strong>l'actualité</strong> de la tech (avec des articles parfois en anglais 😉), et de nos <em>évènements</em> futurs. Il vous permettra également d'échanger avec d'autres personnes, ou encore de trouver toutes les infos utiles nous concernant, et bien évidemment nous contacter.
                    </p>
                </div>
            </section>
            <section>
                <h3>Où nous trouver ?</h3>
                <div class="section-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1380.7490294918682!2d5.215268708047464!3d46.200546284107745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f353d4089ec7cd%3A0x66db7c69403257f4!2s3%20Av.%20Pierre%20Semard%2C%2001000%20Bourg-en-Bresse!5e0!3m2!1sfr!2sfr!4v1635409448089!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <p>
                        Vous pouvez nous retrouver dans notre petit nid, à Bourg-en-Bresse, à proximité de la gare ! On vous attend nombreux !
                    </p>
                </div>
            </section>
        </article>
    </main>
    <?php include_once 'modules/footer.php' ?>
    <script src="js/script.js"></script>
</body>
</html>

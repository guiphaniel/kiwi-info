const liens = document.querySelectorAll('#navbar a') //on selectionne tous les liens de la barre de navigation

liens.forEach((lien) => { //pour chaque lien recupere
    if (lien.pathname === window.location.pathname) { //si le chemin du lien correspond au chemin de la page actuelle
       lien.parentElement.classList.add('active'); //on ajoute la classe active au conteneur du lien
    }
})

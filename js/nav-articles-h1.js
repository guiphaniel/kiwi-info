/**Ce script permet de changer automatiquement le titre des liens vers des articles pour correspondre aux h1 des articles en question */

let titles = document.querySelectorAll(".article-title") // on recupere toutes les spans contenant les titres des articles

titles.forEach(title => {
    let request = new XMLHttpRequest();

    request.addEventListener("load", function(evt){
        let htmlObject = document.createElement('html'); //on cree un element html
        htmlObject.innerHTML = evt.target.response; //on charge le contenu de la page html visee par le lien de la balise <a> dans l'element html
        title.innerHTML = htmlObject.querySelector('h1').innerHTML; //on remplace le contentu de la span par le contenu du h1 de la page html visee
    }, false);
    
    request.open('GET', title.parentElement.pathname, true), //on recupere le lien de la balise <a> contenant le span
    request.send(); //permet de trigger l'event listener
});


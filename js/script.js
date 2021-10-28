/*ADD ACTIVE CLASS TO CURRENT PAGE LINK*/

const liens = document.querySelectorAll('#navbar a') //on selectionne tous les liens de la barre de navigation

liens.forEach((lien) => { //pour chaque lien recupere
    if (lien.pathname === window.location.pathname) { //si le chemin du lien correspond au chemin de la page actuelle
       lien.parentElement.classList.add('active'); //on ajoute la classe active au conteneur du lien
    }
})

/*VALIDATE MAIL*/

// on défini des constantes qui représentent des parties de notre page
const inputEmail = document.querySelector('#email')
const validFormButton = document.querySelector('button.submit')

// on ajoute l'attribut disabled au bouton du formulaire
validFormButton.setAttribute('disabled', true)

// on ajoute un comportement sur le input losqu'on lache une touche
inputEmail.addEventListener('keyup', validMail)

function validMail(e) {
    // la regex pour valider une adresse email
    const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    // si la valeur de input correspond à la regex    
    if (regex.test(String(inputEmail.value).toLowerCase())){
        // on enlève l'attribut disabled
        validFormButton.removeAttribute('disabled')
    }else{
        // sinon on la remet
        validFormButton.setAttribute('disabled', true)
    }
}


/*VALIDATE THE BIRTHDATE*/

let today = new Date(); //on cree un date a la date d'aujourd'hui
let dd = today.getDate(); //on recupere le jour
let mm = today.getMonth() + 1; //on recupere le mois. Attention, janvier correspond au mois 0 !
let yyyy = today.getFullYear() - 12; //la personne doit avoir au moins 12 ans

//si le jour ou le mois est inferieur a 10, on rajoute un 0 devant
if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById('birthdate').setAttribute('max', today); // on met la date maximale de l'input birthdate a la date definie dans today (aujourd'hui - 12 annees)
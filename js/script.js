/*VALIDATE MAIL*/

// on defini des constantes qui representent des parties de notre page
const inputEmail = document.querySelector('#email')
const validFormButton = document.querySelector('button.submit')

//on defini des booleans pour connaitre la validite de notre formulaire
let emailIsValid = false;
let passwordIsValid = false;

//si on se trouve sur un page ou uniquement l'adresse mail et requise, et pas le mot de passe, on defini le mot de passe comme etant valide
const inputPassword = document.querySelector('#password')
if(inputPassword == null)
    passwordIsValid = true;

//on verifie qu'on se trouve bien sur une page ou il y a un input d'email
if (inputEmail != null) {
    // on ajoute l'attribut disabled au bouton du formulaire
    validFormButton.setAttribute('disabled', true)

    // on ajoute un comportement sur le input losqu'on lache une touche
    inputEmail.addEventListener('keyup', validMail)
}


function validMail(e) {
    // la regex pour valider une adresse email
    const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    // si la valeur de input correspond à la regex    
    if (regex.test(String(inputEmail.value).toLowerCase())){        
        emailIsValid = true; //on signale que l'email est valide
        //si le mot de passe est aussi valide, on active le bouton d'envoie du formulaire
        if (passwordIsValid) {            
            validFormButton.removeAttribute('disabled') // on enlève l'attribut disabled
        }        
    }else{        
        validFormButton.setAttribute('disabled', true) // sinon on l'ajoute
        emailIsValid = false; //on signale que l'email est invalide
    }
}

/*VALIDATE PASSWORD*/

// on défini la constante qui représente l'input du password2
const inputPassword2 = document.querySelector('#password2')

// on ajoute un comportement sur le input losqu'on lache une touche, seulement si il y a un mot de passe sur la page
if(inputPassword != null && inputPassword2 != null) {
    // on ajoute l'attribut disabled au bouton du formulaire
    validFormButton.setAttribute('disabled', true)

    // on ajoute un comportement sur le input losqu'on lache une touche
    inputPassword.addEventListener('keyup', validPassword)
    inputPassword2.addEventListener('keyup', validPassword)
}

function validPassword(e) {  
    // si les deux mots de passe correspondent et qu'ils ne sont pas vides  
    if (String(inputPassword.value) != '' && String(inputPassword.value) === String(inputPassword2.value)){
        passwordIsValid = true; //on signale que l'email est valide
        if (emailIsValid) {            
            validFormButton.removeAttribute('disabled') // on enlève l'attribut disabled
        }       
    }else{        
        validFormButton.setAttribute('disabled', true) // sinon on le remet
        passwordIsValid = false; //on signale que l'email est invalide
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

today = yyyy + '-' + mm + '-' + dd; //on concatene les chaines
let inputBirthdate = document.getElementById('birthdate'); //on recuper l'input de la date de naissance

//si l'input existe, on met la date maximale de l'input birthdate a la date definie dans today (aujourd'hui - 12 annees)
if (inputBirthdate != null) {
    inputBirthdate.setAttribute('max', today);
}

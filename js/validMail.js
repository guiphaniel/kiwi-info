
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
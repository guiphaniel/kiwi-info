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
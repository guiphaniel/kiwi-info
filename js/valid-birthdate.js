let today = new Date();
let dd = today.getDate();
let mm = today.getMonth() + 1; //January is 0!
let yyyy = today.getFullYear() - 12; //la personne doit avoir au moins 12 ans

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById('birthdate').setAttribute('max', today);
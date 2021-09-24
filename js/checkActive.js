const liens = document.querySelectorAll('a')
let test

liens.forEach((lien) => {
    if (lien.pathname === window.location.pathname) {
       lien.classList.add('active');
    }
})

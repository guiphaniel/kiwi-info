const liens = document.querySelectorAll('a')

liens.forEach((lien) => {
    if (lien.pathname === window.location.pathname) {
       lien.classList.add('active');
    }
})

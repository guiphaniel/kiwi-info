let titles = document.querySelectorAll(".article-title")

titles.forEach(title => {
    let request = new XMLHttpRequest();

    request.addEventListener("load", function(evt){
        let htmlObject = document.createElement('html');
        htmlObject.innerHTML = evt.target.response;
        title.innerHTML = htmlObject.querySelector('h1').innerHTML;
    }, false);
    
    request.open('GET', title.parentElement.pathname, true),
    request.send();
});


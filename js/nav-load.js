document.addEventListener("DOMContentLoaded", ()=> {
    fetch("../html/navbar.html").then(r => r.text())
    .then(html => {
        document.body.insertAdjacentHTML('afterbegin', html);
    });
});
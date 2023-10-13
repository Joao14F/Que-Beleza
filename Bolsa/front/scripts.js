let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

let Home = document.querySelector('.home-form');

document.querySelector('#home-btn').onclick = () => {
    window.location.href= "index.php";
}

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}
window.onscroll= () => {
    navbar.classList.remove('active');
    searchForm.classList.toggle('active');

}
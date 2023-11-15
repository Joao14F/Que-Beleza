let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

let Home = document.querySelector('.home-form');

document.querySelector('#home-btn').onclick = () => {
    window.location.href = "principal2.php";
}

document.querySelector('#calendar-btn').onclick = () => {
    window.location.href = "Servico.php";
}

document.querySelector('#user-btn').onclick = () => {
    window.location.href = "conta.php";
}

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');

}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay:7500,
        disableOnInteraction: false,
    },
    centeredSlides: true, 
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay:7500,
        disableOnInteraction: false,
    },
    centeredSlides: true, 
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,
        },
    },
});
function selectRadio(divId) {
    document.getElementById(divId).querySelector('input[type="radio"]').checked = true;
}
const opcoesDivs = document.querySelectorAll('.opcoes');
questDivs.forEach(div => {
    div.addEventListener('click', () => {
        questDivs.forEach(div => div.classList.remove('selected'));
        div.classList.add('selected');
        selectRadio(div.id);
    });
});
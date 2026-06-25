var swiper = new Swiper(".mySlider", {
    direction: "vertical",
    loop: true,
    autoplay: {
        delay: 4000
    },
    speed: 900
});

const items = document.querySelectorAll(".item");

swiper.on("slideChange", function () {
    items.forEach(el => el.classList.remove("activo"));
    let index = swiper.realIndex;
    items[index].classList.add("activo");
});

(function () {
const tira = document.getElementById('tiraImagenes');
const slides = document.querySelectorAll('.slide-pro-horizontal');
let totalImagenes = slides.length;
let actual = 0;

function moverCarrusel() {
    actual++;
    // Si llegamos al final, volvemos a la primera
    if (actual >= totalImagenes) {
        actual = 0;
    }
    // La Magia: Movemos la tira horizontalmente basándonos en el índice
    // Si actual es 1, movemos -33.33%, si es 2, movemos -66.66%
    let desplazamiento = actual * -100;
    tira.style.transform = `translateX(${desplazamiento}%)`;
}

// Cambia cada 5 segundos (5000ms)
setInterval(moverCarrusel, 4000);
})();
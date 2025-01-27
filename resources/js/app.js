import './bootstrap';

// Import Alpine.js and Swiper      
import Alpine from 'alpinejs';

import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Alpine = Alpine;

Alpine.start();

// Initialisation
const swiper = new Swiper('.mySwiper', {
    loop: true, // Permet le défilement infini
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    slidesPerView: 1, // Affiche 1 slide à la fois
    spaceBetween: 10, // Espacement entre les slides
});


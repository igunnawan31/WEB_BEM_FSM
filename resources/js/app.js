import './bootstrap';
import Swiper from 'swiper/bundle';
import 'flowbite';

// Navbar
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.scrollY > fixedNav) {
        header.classList.add('navbar-fixed');
    }
    else {
        header.classList.remove('navbar-fixed');
    }
}


// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');


hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


// scroll in
document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        threshold: 0.1,  // memicu animasi saat 10% elemen terlihat
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target); // animasi hanya terjadi sekali
            }
        });
    }, observerOptions);

    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => observer.observe(element));
});

const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 40,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        620: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

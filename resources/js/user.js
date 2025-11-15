import Swiper from 'swiper';
import {Navigation, Pagination, Autoplay, EffectFade} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';
import {Fancybox} from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import {Dropzone} from "dropzone";

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('#mainSlider', {
        modules: [Navigation, Pagination, Autoplay, EffectFade], // Lazy yok burada
        direction: 'horizontal',
        loop: true,
        preloadImages: false,
        effect: 'slide',
        fadeEffect: {
            crossFade: true, // geçişte eski slayt kaybolup yenisi görünür
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const swiper = new Swiper('#gallerySlide', {
        modules: [Navigation, Autoplay],
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false, // Kullanıcı dokunduktan sonra da devam et
        },
        speed: 2000,

        navigation: {nextEl: '.swiper-next-button', prevEl: '.swiper-prev-button'},
        lazy: {
            loadPrevNext: false,
        },
        breakpoints: {
            // 320px ve üzeri (Mobil)
            320: {
                slidesPerView: 1.5, // Mobilde ortada 1, kenarlarda yarım
                spaceBetween: 10
            },
            // 768px ve üzeri (Tablet)
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            // 1024px ve üzeri (Desktop)
            1024: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

});

Fancybox.bind();

window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 0) {
        header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
});

// FAQ JS
const faqs = document.querySelectorAll(".accordion");
faqs.forEach((faq) => {
    faq.addEventListener("click", function () {
        if (faq.classList.contains("open")) {
            faq.classList.remove("open");
        } else {
            faqs.forEach((fq) => {
                fq.classList.remove("open");
            });
            faq.classList.add("open");

        }
    })

});


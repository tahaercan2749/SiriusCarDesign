import Swiper from 'swiper';
import {Navigation, Pagination, Autoplay, EffectFade} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import {Dropzone} from "dropzone";

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper', {
        modules: [Navigation, Pagination, Autoplay, EffectFade], // Lazy yok burada
        direction: 'horizontal',
        loop: true,
        preloadImages: false,
        effect: 'fade',
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



let dropzone = document.getElementById('dropzone');
if (dropzone) {
    dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Ekelemek istediğiniz resimleri sürükleyin veya buraya tıklayın",
        dictFallbackMessage: "Tarayıcınız sürükle bırak yüklemeyi desteklemiyor.",
        dictInvalidFileType: "Bu dosya türüne izin verilmiyor.",
        dictFileTooBig: "Dosya boyutu çok büyük",
        dictResponseError: "Sunucu hatası.",
        dictCancelUpload: "Yüklemeyi iptal et",
        dictCancelUploadConfirmation: "Bu yüklemeyi gerçekten iptal etmek istiyor musunuz?",
        dictRemoveFile: "Dosyayı sil",
        dictMaxFilesExceeded: "Başka dosya yükleyemezsiniz."
    });
    Dropzone.autoDiscover = false;
    dropzone.on("addedfile", file => {
        console.log(`File added: ${file.name}`);
    });

    dropzone.on("error", function (file, errorMessage) {
        notyf.error("Yükleme sırasında hata oluştu");
    });

}


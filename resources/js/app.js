import flatpickr from 'flatpickr';
// import Alpine from 'alpinejs';
import $ from 'jquery';  // jQuery'yi dahil et
import 'datatables.net';  // DataTables'ı dahil et
import {Fancybox} from "@fancyapps/ui";
import axios from 'axios';
import {Dropzone} from "dropzone";


flatpickr(".datepicker", {
    dateFormat: "Y-m-d",  // Tarih formatı (Örneğin: 2024-12-31)
});
flatpickr(".datetimelocalpicker", {
    enableTime: true,  // Saat seçimi ekler
    dateFormat: "Y-m-d H:i",  // Tarih ve saat formatı (Örneğin: 2024-12-31 14:30)
    locale: "tr",  // Yerel saat formatı (Türkçe saat dilimi)
    time_24hr: true,
});
flatpickr(".datetimepicker", {
    enableTime: true,  // Saat seçimi ekler
    noCalendar: false,  // Takvimi gösterir
    dateFormat: "Y-m-d H:i",  // Tarih ve saat formatı
    time_24hr: true,
});

const table = $('#datatable');
table.DataTable({
    responsive: true
});  // #datatable sınıfını hedef alarak DataTables başlat

Fancybox.bind()

window.axios = axios;


let dropzone = document.getElementById('dropzone');
if (dropzone) {
    dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Buraya dosyaları sürükleyin veya buraya tıklayın",
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

    dropzone.on("success", function (file, response) {
        if (response.status === 'success') {
            notyf.success(response.message); // veya notyf.success(response.message);
        } else {
            notyf.error("Yükleme başarılı ama bir uyarı geldi.");
        }

        if (document.getElementById('mediaUploadsLinks')) {
            const linkArea = document.getElementById('mediaUploadsLinks');
            const fileName = response.fileName && response.fileName.trim() !== '' ? response.fileName : 'Dosya';
            linkArea.innerHTML += '<div class="media-uploads-link">' + fileName + '<a onclick="copyLink(\'' + response.filePath + '\')" class="btn bg-success"><i class="las la-copy"></i> Linki Kopyala </a>'

        }


    });

    dropzone.on("error", function (file, errorMessage) {
        notyf.error("Yükleme sırasında hata oluştu");
    });

}

const notyf = new Notyf();



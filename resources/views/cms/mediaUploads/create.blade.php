@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-12 col-lg-6">
            <div class="card-header">Medya Yükle</div>
            <div class="card-body">
                <label for="nameInput">Dosya Adı (Opsiyonel):</label>
                <input type="text" name="nameInput" id="nameInput">

                <form action="{{route("cms.media.store")}}" method="post" enctype="multipart/form-data"
                      class="dropzone" id="dropzone">
                    @csrf
                    <input type="hidden" name="name" id="name">
                </form>
            </div>
        </div>
        <div class="card col-sm-12 col-md-12 col-lg-6">
            <div class="card-header">Yüklenen Medya Linkleri</div>
            <div class="card-body">

                <div class="media-uploads-links" id="mediaUploadsLinks">
{{--                    Buraya Yuklenen Dosya Bilgileri gelecektir Boş Bırak--}}
                </div>
            </div>
        </div>

    </div>
@endsection
@section("extraJs")
    <script>

        const nameInput = document.querySelector("#nameInput");
        const name = document.querySelector("#name");
        const uploadsContainer = document.querySelector(".media-uploads-links");
        const dropzoneForm = document.querySelector("#dropzone");

        if (nameInput && name) {
            nameInput.addEventListener("input", function () {
                name.value = this.value;
            });
        }

        function copyLink(link) {
            navigator.clipboard.writeText(link)
                .then(() => notyf.success("Link panoya kopyalandı."))
                .catch(() => notyf.error("Link kopyalanamadı."));
        }


    </script>
@endsection

@extends("cms.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="{{asset("plugins/ckeditor/skins/moono/editor.css")}}">
    <script src="{{asset("plugins/ckeditor/lang/tr.js")}}"></script>
    <script src="{{asset("plugins/ckeditor/styles.js")}}"></script>
    <script src="{{asset("plugins/ckeditor/ckeditor.js")}}"></script>
@endsection
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-12 col-lg-8">
            <div class="card-header">Blade Ekle</div>
            <div class="card-body">
                <form action="{{route("cms.home-page-management.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Kısım Başlığı</label>
                    <input type="text" name="title" id="title" placeholder="Başlık">
                    <label for="content"></label>
                    <label for="contentText">İçerik</label>
                    <textarea name="content_text" id="contentText" cols="30" rows="10"></textarea>
                    <div class="bg-warning text-dark" style="font-weight: bold;padding: 7px;margin: 10px 0">
                        Kısımda yer alacak medya dosyası için; ya video yada resim linki ekleyin. Medya Yüklemek
                        için buraya <a href="{{route("cms.media.create")}}" target="_blank">tıklayıp</a> medya
                        yükleyerek dosya linkini alabilirsiniz.
                    </div>
                    <label for="video_link">Video Linki</label>
                    <input type="text" name="video_link" id="video_link">
                    <label for="image_link">Resim Linki</label>
                    <input type="text" name="image_link" id="image_link">
                    <label for="page_id">Yönlendirilecek Sayfa</label>
                    <select name="page_id" id="page_id">
                        <option value="">Yok</option>
                        @foreach($pages as $item)
                            <option value="{{$page->id}}">{{$page->title}}</option>
                        @endforeach
                    </select>

                    <input type="submit" value="Kaydet">
                </form>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

@section("extraJs")
    <script src="{{asset("plugins/ckeditor/config.js")}}"></script>
    <script>
        let ckeditor = document.getElementById("contentText");
        if (ckeditor && typeof CKEDITOR !== "undefined") {
            CKEDITOR.replace('contentText', {
                filebrowserWindowWidth: '1000',
                filebrowserWindowHeight: '700'
            });
        }
    </script>
@endsection

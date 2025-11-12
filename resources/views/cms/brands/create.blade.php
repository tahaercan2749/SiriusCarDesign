@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-12 col-lg-6">
            <div class="card-header">Blade Ekle</div>
            <div class="card-body">
                <form action="{{route("cms.brands.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Marka Adı">
                    <input type="file" name="image" id="image" placeholder="Dosya Seçin">
                    <input type="text" name="link" id="link" placeholder="Marka Linki">
                    <textarea name="details" id="details" cols="30" rows="10" placeholder="Marka Detay Bilgisi"></textarea>

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

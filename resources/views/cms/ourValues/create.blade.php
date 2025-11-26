@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-12 col-lg-6">
            <div class="card-header">Değer Ekle</div>
            <div class="card-body">
                <form action="{{route("cms.values.store")}}" method="post">
                    @csrf
                    <input type="text" name="title" id="title" placeholder="Başlık">
                    <input type="text" name="description" id="description" placeholder="Açıklama">
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

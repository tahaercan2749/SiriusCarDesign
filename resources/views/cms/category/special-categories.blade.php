@php
    /*
    Bu sayfada kategorilerden anasayfada yada farklı bir sayfada özel olarak gösterilmesini istenilen
     kategori aktif edilince kategori isminin slug hali kullanıraklar veri çekilebilir.Örneğin ürünlerimiz
    kategorisi anasayfada gösterilecekse ürünlerimiz aktif edilerek SpecialCategor ile
    urunlerimiz key i ile kategori verisi çekilebilir.
    */ @endphp
@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header">Özel Kategoriler</div>
        <p>Bu sayfada özel olarak ana sayfada listelenmek istenişen kategorilerin switch butonu yeşil
            görünmektedir.</p>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md"
                   style="width:100%">

                <thead>
                <tr>
                    <th>Kategori Adı</th>
                    <th title="Footerda Göster">Özel Kategori</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $item)
                    <tr>
                        <th>{{$item->name}}</th>

                        <th>
                            <label class="switch"
                                   title=" @if($item->specialCategory){{$item->specialCategory->name}} @endif">
                                <input type="checkbox" name="active" value="1"
                                       onclick="activate('{{route("cms.category.special-categories-set",$item->id)}}')"
                                       @if($item->specialCategory) checked @endif>
                                <span class="switch-slider"></span>
                            </label>


                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section("extraJs")
    <script>
        function activate(route) {
            axios.post(route, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        notyf.success(response.data.message);
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu.");
                });
        }

    </script>
@endsection

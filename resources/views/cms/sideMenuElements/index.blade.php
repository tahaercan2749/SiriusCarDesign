@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header"><span class="text-warning">{{$category->name}}</span> Sayfa Listesi</div>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md"
                   style="width:100%">

                <thead>
                <tr>
                    <th>Sayfa Adı</th>
                    <th>Resim</th>
                    <th>Bağlı Sayfa</th>
                    <th>Paylaş</th>
                    <th>İşlem</th>
                </tr>
                </thead>

                <tbody>
                @foreach($pages as $item)
                    <tr data-id="{{ $item->id }}">
                        <th>{{$item->title}}</th>
                        <th style="max-width: 100px">
                            @if($item->image())
                                <figure data-fancybox="Page List" data-src="{{$item->image()}}"
                                        data-caption="{{$item->title}}">
                                    <img src="{{$item->image()}}" width="35" height="35" alt="">
                                </figure>
                            @else
                                Resim Yok
                            @endif
                        </th>
                        <th>

                            @if($item->parent)
                                {{$item->parent->title}}
                            @else
                                Üst Sayfası Yok
                            @endif
                        </th>
                        <th>
                            <label class="switch">
                                <input type="checkbox" name="published" value="1"
                                       onclick="publishPage('{{route("cms.pages.publish",$item->id)}}')"
                                       @if($item->published) checked @endif>
                                <span class="switch-slider"></span>
                            </label>
                        </th>

                        <th class="islemler">
                            <a href="{{route("cms.side-menu-elements.edit",[$category->id,$item->id])}}"
                               class="btn bg-primary" title="Düzenle">
                                <i class="las la-pen"></i>
                            </a>
                            <a href="{{route("cms.gallery.create",$item->id)}}"
                               class="btn bg-success" title="{{$item->title}} Sayfasına Galeri Resimleri Ekle">
                                <i class="las la-images"></i>
                            </a>
                            <a onclick="deleteFunc('{{route("cms.pages.destroy",$item->id)}}')"
                               class="btn bg-error" title="Sil">
                                <i class="las la-trash"></i>
                            </a>
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
        function deleteFunc(route) {
            axios.delete(route, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        notyf.success(response.data.message);
                        setInterval(function () {
                            window.location.reload();
                        }, 1500)
                    } else if (response.data.status === "warning") {
                        notyf.open({
                            type: "warning",
                            message: response.data.message
                        });
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error(response.data.message);
                });
        }

        function publishPage(route) {
            axios.post(route, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        notyf.success(response.data.message);
                    } else if (response.data.status === "warning") {
                        notyf.open({
                            type: "warning",
                            message: response.data.message
                        });
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

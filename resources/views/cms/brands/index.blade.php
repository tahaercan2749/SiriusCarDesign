@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header">Markalarımım Listesi</div>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md"
                   style="width:100%">

                <thead>
                <tr>
                    <th>Marka Adı</th>
                    <th>Resim</th>
                    <th>Link</th>
                    <th>İşlem</th>
                </tr>
                </thead>

                <tbody>
                @foreach($brands as $item)
                    <tr data-id="{{ $item->id }}">

                        <th>{{$item->name}}</th>

                        <th>
                            @if($item->image())
                                <figure data-fancybox="Markalar" data-src="{{$item->image()}}"
                                        data-caption="{{$item->name}}">
                                    <img src="{{$item->image()}}" width="35" height="35" alt="">
                                </figure>
                            @else
                                Resim Yok
                            @endif
                        </th>

                        <th>
                            @if($item->link)
                                <a href="{{$item->link}}" target="_blank">Marka Linki</a>
                            @endif
                        </th>

                        <th>
                            <a onclick="deleteFunc('{{route("cms.brands.destroy",$item->id)}}')"
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


    </script>
@endsection

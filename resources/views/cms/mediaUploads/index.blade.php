@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header">Medya Yüklemeleri</div>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md"
                   style="width:100%">

                <thead>
                <tr>
                    <th>Medya Adı</th>
                    <th>Medya Dosyası</th>
                    <th>İşlem</th>
                </tr>
                </thead>

                <tbody>
                @foreach($medias as $item)
                    <tr data-id="{{ $item->id }}">

                        <th>
                            @if($item->name)
                                {{$item->name}}
                            @else
                                {{$item->file_name}}
                            @endif

                        </th>

                        <th>
                            <a href="{{$item->fileLink()}}" target="_blank">Dosya</a>
                        </th>

                        <th class="islemler">
                            <a onclick="copyLink('{{$item->fileLink()}}')" class="bg-secondary btn" title="Linki Kopyala">
                                <i class="las la-copy"></i>
                            </a>

                            <a onclick="deleteFunc('{{route("cms.media.destroy",$item->id)}}')"
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

        function copyLink(link) {
            navigator.clipboard.writeText(link)
                .then(() => notyf.success("Link panoya kopyalandı."))
                .catch(() => notyf.error("Link kopyalanamadı."));
        }


    </script>
@endsection

@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header">Reklam Kampanyaları</div>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md"
                   style="width:100%">

                <thead>
                <tr>
                    <th>Kampanya Adı</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>İşlem</th>
                </tr>
                </thead>

                <tbody>
                @foreach($campaigns as $item)
                    <tr data-id="{{ $item->id }}">
                        <th>{{$item->name}}</th>
                        <th>
                            {{$item->updated_at->diffForHumans()}}
                        </th>
                        <th class="islemler">
                            <a href="{{route("cms.ads-campaigns.show",$item->id)}}"
                               class="btn bg-light" title="Görüntüle">
                                <i class="las la-eye"></i>
                            </a>
                            <a onclick="copyLink('{{$item->link}}')" class="btn bg-primary"
                               title="Kampanya Linkini Kopyalamak İçin Tıklayın">
                                <i class="las la-copy"></i>
                            </a>

                            <a onclick="deleteFunc('{{route("cms.ads-campaigns.destroy",$item->id)}}')"
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
                .then(() => {
                notyf.success("Kampanya Linki Kopyalandı.")
                }).catch(err => {
                notyf.error("Kampanya Linki Kopyalanamadı.");
                });
        }


    </script>
@endsection

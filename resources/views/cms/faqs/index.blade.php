@extends("cms.partial.layout")
@section("content")
    <div class="card">
        <div class="card-header">SSS Listesi</div>
        <div class="card-body">
            <table id="datatable" class="display stripe table-responsive-sm table-responsive-md" style="width:100%">

                <thead>
                <tr>
                    <th>Sayfa Adı</th>
                    <th>Soru</th>
                    <th>Yayınla</th>
                    <th>İşlem</th>
                </tr>
                </thead>

                <tbody>
                @foreach($faqs as $item)
                    <tr data-id="{{ $item->id }}">
                        <th>
                            @if($item->page!=NULL)
                                {{$item->page->title}}
                            @else
                                Genel
                            @endif
                        </th>
                        <th>{{$item->question}}</th>
                        <th>
                            <label class="switch">
                                <input type="checkbox" name="active" value="1"
                                       onclick="activate('{{route("cms.faqs.publish",$item->id)}}','show_footer')"
                                       @if($item->published) checked @endif>
                                <span class="switch-slider"></span>
                            </label>
                        </th>
                        <th>
                            <a onclick="deleteFunc('{{route("cms.faqs.destroy",$item->id)}}')"
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
                    notyf.error(response.data.message);
                });
        }


    </script>
@endsection

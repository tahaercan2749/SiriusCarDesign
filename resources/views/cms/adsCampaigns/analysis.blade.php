@extends("cms.partial.layout")
@section("content")

    <div class="row">
        <div class="card col-12">
            <div class="card-header">Kampanya Analizleri</div>
            <div class="card-body">
                <div class="row gap-5">
                    @foreach($campaigns as $campaign)
                        <div class="card col-sm-12 col-md-6 col-lg-3">
                            <div class="card-header"><span class="text-warning">{{$campaign->utm_campaign}}</span> Reklam Kampanyası</div>
                            <div class="card-body">
                                Kullanıcı Sayısı: {{$campaign->visit_count}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
@section("extraJs")

@endsection

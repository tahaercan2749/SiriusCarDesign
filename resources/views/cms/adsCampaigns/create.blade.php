@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-6 col-lg-4">
            <div class="card-header">Reklam Kampanyası Oluştur</div>
            <div class="card-body">
                <form action="{{route("cms.ads-campaigns.store")}}" method="post">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Kampanya Adı">
                    <input type="text" name="utm_source" id="utm_source" placeholder="Utm Source">
                    <input type="text" name="utm_medium" id="utm_medium" placeholder="Utm Medium">
                    <input type="text" name="utm_campaign" id="utm_campaign" placeholder="Utm Campaign">
                    <input type="text" name="utm_content" id="utm_content" placeholder="Utm Content">
                    <input type="text" name="gad_campaignid" id="gad_campaignid" placeholder="Gad Campaign Id">
                    <input type="text" name="ad_group_id" id="ad_group_id" placeholder="Ad Group Id">
                    <textarea name="link" id="" cols="30" rows="10" placeholder="Giriş Yaptığınız Bilgilere Göre Oluşturulan Link"></textarea>
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

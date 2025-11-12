@extends("cms.partial.layout")
@section("content")
    <div class="row">
        <div class="card col-sm-12 col-md-8 col-lg-6">
            <div class="card-header"><span class="text-warning">{{$campaign->name}}</span> Reklam Kampanyası</div>
            <div class="card-body">
                <form>
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Kampanya Adı" value="{{$campaign->name}}">
                    <input type="text" name="utm_source" id="utm_source" placeholder="Utm Source" value="{{$campaign->utm_source}}">
                    <input type="text" name="utm_medium" id="utm_medium" placeholder="Utm Medium" value="{{$campaign->utm_medium}}">
                    <input type="text" name="utm_campaign" id="utm_campaign" placeholder="Utm Campaign" value="{{$campaign->utm_campaign}}">
                    <input type="text" name="utm_content" id="utm_content" placeholder="Utm Content" value="{{$campaign->utm_content}}">
                    <input type="text" name="gad_campaignid" id="gad_campaignid" placeholder="Gad Campaign Id" value="{{$campaign->gad_campaignid}}">
                    <input type="text" name="ad_group_id" id="ad_group_id" placeholder="Ad Group Id" value="{{$campaign->ad_group_id}}">
                    <textarea name="link" id="" cols="30" rows="10" placeholder="Giriş Yaptığınız Bilgilere Göre Oluşturulan Link">{{$campaign->link}}</textarea>
                    <a onclick="copyLink('{{$campaign->link}}')" class="btn bg-primary"><i class="las la-copy"></i> Linki Kopyala</a>
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
@section("extraJs")
    <script>
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

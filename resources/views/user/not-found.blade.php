@include('user.partial.head')
@section("extraCss")
    <style>
        h1 {
            color: #fff !important;
        }
    </style>
@endsection
@include('user.partial.header')

<div class="inner-page not-found content-space">
    <div class="max-width">
        <h1>Aradığınız Sayfa Bulunamadı</h1>
        <h2>404</h2>
        <div class="spec-stroke">
            <a href="{{env("APP_URL")}}">Anasayfaya</a>
            <span>|</span>
            <a href="{{redirect()->back()}}">Geri</a>

        </div>
    </div>
</div>
@include('user.partial.footer')

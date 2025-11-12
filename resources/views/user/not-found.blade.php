@include('user.partial.head')
@include('user.partial.header')
    <section class="error-section">
        <div class="auto-container">
            <h2 style="margin-top:100px">Aradığınız Sayfa Bulunamadı</h2>
            <div class="image">
                <img src="{{asset("images/site-ici/not-found.png")}}" alt="" />
            </div>
            <a href="{{env("APP_URL")}}" class="theme-btn btn-style-two clearfix"><span class="icon"></span>Anasayfa</a>
        </div>
    </section>
@include('user.partial.footer')

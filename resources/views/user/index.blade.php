@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
@endsection
@section("content")

    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
                <a href="#" class="swiper-slide">
                    <img class="swiper-lazy desktop-show" src="{{ $slide->image() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <img class="swiper-lazy mobile-show" src="{{ $slide->mobilImage() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </a>
            @endforeach
        </div>

        {{--        <div class="swiper-pagination"></div>--}}
        {{--        <div class="swiper-button-prev"></div>--}}
        {{--        <div class="swiper-button-next"></div>--}}
        <div class="swiper-scrollbar"></div>
    </div>


    <div class="about-us content-space">
        <div class="max-width">
            <div class="content">
                <h2 class="home-title">Hakkımızda</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam assumenda atque
                    consequuntur
                    enim facereelit. Animi aperiam assumenda atque
                    consequuntur
                    enim facereelit. Animi aperiam assumenda atque
                    consequuntur
                    enim facereelit. Animi aperiam assumenda atque
                    consequuntur
                    enim facere minus modi porro provident, quidem quis quo ratione, rem repudiandae sunt voluptas
                    voluptatibus! Illo, nemo!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequuntur doloremque error
                    excepturi exercitationem explicabo facilis ipsum minus nobis non numquam odio omnis quasi quod
                    reprehenderit sit sunt voluptate, voluptatibus.</p>
            </div>
        </div>
    </div>

    <div class="our-services content-space max-width">
        <h2 class="home-title">Sirius Car Design Hizmetleri</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid amet atque aut debitis
            deleniti fuga id ipsa laudantium magni, molestias neque praesentium quibusdam quidem, similique sit,
            totam ut vitae!</p>

        <div class="services">
            <div class=" service spec-stroke">
                <div class="out-content">
                    <div class="spec-stroke">
                        <div class="inner-content">
                            <figure class="spec-stroke">
                                <img src="{{asset("images/inner/instagram-icon.svg")}}" width="20" height="20"
                                     alt="">
                            </figure>
                            <h3>Boya Koruma</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam at autem
                                blanditiis, corporis delectus odit quae quasi quod recusandae reiciendis repellat
                                repellendus sequi sint, tempore. Consectetur earum odio quo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="spec-stroke">


        </div>
        <div class="spec-bg-stroke">


        </div>


    <br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
@section("extraJs")
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        const notyf = new Notyf({
            duration: 3000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [
                {
                    type: 'warning',
                    background: 'orange',
                    icon: {
                        className: 'fas fa-exclamation-triangle',
                        tagName: 'i',
                    }
                },
                {
                    type: 'info',
                    background: '#3f87f5',
                    icon: {
                        className: 'fas fa-info-circle',
                        tagName: 'i',
                    }
                }
            ]
        });

        @if(session('status')==="success")
        notyf.success("{{ session('message') }}");
        @endif

        @if(session('status')==="error")
        notyf.error("{{ session('message') }}");
        @endif


        document.addEventListener("DOMContentLoaded", function () {
            // 1. Sayfadaki tüm h2 etiketlerini seç
            const allH2s = document.querySelectorAll('h2');

            // 2. Her bir h2 için döngü başlat
            allH2s.forEach(h2 => {
                // 3. Metni al ve kelimelere ayır
                const text = h2.textContent.trim();
                const words = text.split(/\s+/);

                // 4. YENİ KONTROL: Sadece kelime sayısı 1'den fazlaysa devam et
                if (words.length > 1) {

                    // 5. Son kelimeyi al
                    const lastWord = words.pop();

                    // 6. Kalan kelimeleri birleştir
                    const restOfText = words.join(' ');

                    // 7. HTML'i güncelle
                    h2.innerHTML = `${restOfText} <span style="color: #00e107;">${lastWord}</span>`;
                }
                // else (yani kelime sayısı 1 veya 0 ise) hiçbir şey yapma, h2'yi orijinal haliyle bırak.
            });
        });
    </script>
@endsection

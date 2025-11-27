@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
@endsection
@section("content")
<h1 style="display: none; color:#000;">Adana Profesyonel Oto Bakım ve Koruma Merkezi</h1>
    <div class="swiper" id="mainSlider">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
                <a href="#" class="swiper-slide">
                    <img class="swiper-lazy desktop-show" src="{{ $slide->image() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <img class="swiper-lazy mobile-show" src="{{ $slide->mobilImage() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </a>
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
{{--        <div class="swiper-scrollbar"></div>--}}
    </div>

    <div class="about-us content-space">
        <div class="max-width">
            <div class="content">
                <h2 class="home-title">Hakkımızda</h2>
                <p>Sirius Oto Design olarak Adana’da, aracınızı sadece sizi taşıyan bir araç değil, korunması ve
                    parlatılması gereken değerli bir yatırım olarak görüyoruz. Otomotiv estetiğini teknik
                    uzmanlıkla birleştirdiğimiz merkezimizde; "önce güven, sonra işlem" prensibiyle hareket
                    ediyoruz. Amacımız, aracınızın markası ne olursa olsun, kapımızdan içeri girdiği andan itibaren
                    ona hak ettiği hassasiyeti göstermek ve fabrika çıkışındaki o heyecan verici parlaklığı size
                    yeniden yaşatmaktır.</p>
                <p>Hizmet anlayışımız, standart bir oto yıkamanın çok ötesinde; aracın ruhunu ve kondisyonunu
                    iyileştiren profesyonel çözümler üzerine kuruludur. Detaylı temizlik ve car detailing ile
                    aracınıza hijyen ve ferahlık katarken; seramik kaplama, PPF kaplama ve cam filmi
                    uygulamalarımızla Adana’nın zorlu yol ve iklim şartlarına karşı üstün bir kalkan oluşturuyoruz.
                    En yeni teknolojileri usta işçilikle harmanlayarak, hem günlük temizlik ihtiyaçlarınıza hem de
                    yüksek standartlı koruma beklentilerinize aynı çatı altında, samimiyet ve titizlikle yanıt
                    veriyoruz.</p>
            </div>
        </div>
    </div>

    <div class="our-services content-space max-width">
        <h2 class="home-title">Sirius Car Design Hizmetleri</h2>
        <p>Adana’da aracınızın kondisyonunu en üst seviyeye taşıyacak teknik uzmanlıkla tanışın. Sirius Oto Design
            olarak;
            <b>nanoteknolojik seramik kaplama</b> ve <b>PPF boya koruma filmi</b> ile aracınızın değerini korurken,
            <b>detaylı temizlik</b>,
            <b>oto yıkama</b> ve <b>cam filmi</b> uygulamalarımızla konforunuzu artırıyoruz. İster lüks segment
            koruma, ister
            günlük bakım olsun; oto kuaför ve tasarım alanındaki tüm ihtiyaçlarınız için profesyonel hizmetlerimizi
            aşağıda
            inceleyebilirsiniz.</p>

        <div class="services">
            @foreach($hizmetler->children as $hizmet)
                <a href="{{$hizmet->image()}}" class="service spec-stroke">
                    <div class="spec-stroke">
                        <figure class="spec-bg-stroke">
                            <img src="{{asset("images/inner/boya-koruma-icon.svg")}}" width="40" height="auto"
                                 alt="{{$hizmet->name}} | {{$setting->site_name}}">
                        </figure>
                        <h3>{{$hizmet->name}}</h3>
                        <p>{{$hizmet->note}}</p>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

    <div class="gallery content-space">
        <div class="max-width">
            <h2 class="home-title">Sirius Car Design Galeri</h2>
            <p>Sözcükler teknik kalitemizi anlatır, ancak fotoğraflar kanıtlar. Adana Sirius Oto Design atölyesinde
                gerçekleştirdiğimiz seramik kaplama, PPF boya koruma ve detaylı temizlik işlemlerinin çarpıcı
                sonuçlarına göz atın. Galerimizde, titiz işçiliğimizin ve araçlara kazandırdığımız 'showroom'
                parlaklığının gerçek yansımalarını bulacaksınız.</p>

            <div class="swiper" id="gallerySlide">
                <div class="swiper-wrapper">
                    @foreach($galeri as $resim)

                        <a href="{{$resim->image()}}" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{$resim->image()}}"
                                 alt="Sirius Car Design Galeri | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>

                    @endforeach
                </div>
                <div class="swiper-next-button spec-bg-stroke">
                    <img src="{{asset("images/inner/slide-next-btn.svg")}}" alt="{{$setting->site_name}} Galeri Sonraki Resim">
                </div>
                <div class="swiper-prev-button spec-bg-stroke">
                    <img src="{{asset("images/inner/slide-prev-btn.svg")}}" alt="{{$setting->site_name}} Galeri Önceki Resim">
                </div>
            </div>
        </div>
    </div>



    @if(!empty($degerlerAnasayfa) && $degerlerAnasayfa->count() > 0)
        <div class="our-values content-space">
            <div class="max-width">
                <h2 class="home-title">Sirius Car Design Değerleri</h2>
                <p>Adana'da araç bakım ve koruma sektöründe, sıradanlığın ötesine geçiyoruz. Sirius Oto Design
                    olarak her uygulamamızın temelinde; teknik uzmanlık, dürüst işçilik ve araca duyduğumuz saygı
                    yatar. Seramik kaplamadan detaylı temizliğe kadar, bizi Adana’nın en güvenilir markası yapan ve
                    asla taviz vermediğimiz değerlerimiz şunlardır:</p>
                <div class="values">
                    @foreach($degerlerAnasayfa as $deger)
                        <div class="value spec-bg-stroke @if($loop->index==0) active @endif">
                            <div class="title">
                                <h3>{{$deger->title}}</h3>
                                <figure>
                                    <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25" alt="{{$deger->title}} | {{$setting->site_name}}">
                                </figure>
                            </div>

                            <div class="content">
                                <p>{{$deger->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if($haberler->pages->count()>0)
        <div class="blogs-news content-space">
            <div class="max-width">
                <h2 class="home-title">Haberler ve Blog</h2>
                <p>Otomotiv dünyasındaki yenilikleri, araç koruma teknolojilerini ve Sirius atölyesinden güncel
                    haberleri sizin için derliyoruz. Seramik kaplama ömrünü uzatan ipuçlarından, PPF ve cam filmi
                    seçim rehberlerine kadar aracınızın değerini koruyacak uzman tavsiyelerini blogumuzda
                    keşfedin.</p>

                <div class="blogs">
                    @foreach($haberler->pages as $haber)
                        <a href="{{$haber->slug}}" class="blog spec-stroke">
                            <h3>{{$haber->title}}</h3>
                            <figure class="spec-stroke">
                                <img src="{{$haber->image()}}" alt="{{$haber->title}} | {{$setting->site_name}}">
                            </figure>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    @endif

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

        // H2 elemanlarının son kelimesinin rengini değiştirme
        document.addEventListener("DOMContentLoaded", function () {
            // 1. Sayfadaki tüm h2 etiketlerini seç
            const allH2s = document.querySelectorAll('h2:not(.nochange)');

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
        // ### H2 elemanlarının son kelimesinin rengini değiştirme

    </script>

    <script>
        const valuesOfSirius = document.querySelectorAll(".values .value");
        valuesOfSirius.forEach((v) => {
            v.addEventListener("click", () => {
                activeValues = document.querySelectorAll(".values .value");
                activeValues.forEach((av) => {
                    av.classList.remove("active");
                })
                v.classList.toggle("active");
            })
        })
    </script>
@endsection

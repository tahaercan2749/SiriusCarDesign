@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
@endsection
@section("content")

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

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
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
        <p>Adana’da aracınızın kondisyonunu en üst seviyeye taşıyacak teknik uzmanlıkla tanışın. Sirius Oto Design olarak;
            <b>nanoteknolojik seramik kaplama</b> ve <b>PPF boya koruma filmi</b> ile aracınızın değerini korurken, <b>detaylı temizlik</b>,
            <b>oto yıkama</b> ve <b>cam filmi</b> uygulamalarımızla konforunuzu artırıyoruz. İster lüks segment koruma, ister
            günlük bakım olsun; oto kuaför ve tasarım alanındaki tüm ihtiyaçlarınız için profesyonel hizmetlerimizi aşağıda
            inceleyebilirsiniz.</p>

        <div class="services">

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/boya-koruma-icon.svg")}}" width="40" height="auto" alt="">
                    </figure>
                    <h3>Boya Koruma</h3>
                    <p>Aracınızın boyasını güneş, kuş pisliği
                        ve çevresel etkilere karşı koruyarak ilk
                        günkü parlaklığını uzun süre korur.</p>
                </div>
            </a>

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/car-detailing-oto.svg")}}" width="40" height="auto" alt="">
                    </figure>
                    <h3>Car Detailing</h3>
                    <p>Aracınızın iç ve dış yüzeylerinde
                        derinlemesine temizlik, bakım ve yenileme
                        işlemiyle üst düzey görünüm... </p>
                </div>
            </a>

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/oto-yikama-icon.svg")}}" width="40" height="auto" alt="">
                    </figure>
                    <h3>Oto Yıkama</h3>
                    <p>Aracınıza zarar vermeyen özel ürünlerle
                        yapılan özenli ve detaylı temizlik hizmeti.</p>
                </div>
            </a>

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/seramik-kaplama-icon.svg")}}" width="40" height="auto"
                             alt="">
                    </figure>
                    <h3>Seramik Kaplama</h3>
                    <p>Boyaya derin parlaklık ve uzun ömürlü
                        koruma sağlayan nano teknoloji kaplama
                        çözümü. </p>
                </div>
            </a>

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/detayli-temizlik-icon.svg")}}" width="40" height="auto"
                             alt="">
                    </figure>
                    <h3>Detaylı Temizlik</h3>
                    <p>Koltuk, tavan, halı ve döşemelerde
                        profesyonel iç temizlik ile hijyen ve
                        ferahlık sağlar. </p>
                </div>
            </a>

            <a href="#" class="service spec-stroke">
                <div class="spec-stroke">
                    <figure class="spec-bg-stroke">
                        <img src="{{asset("images/inner/jant-boyama-icon.svg")}}" width="40" height="auto" alt="">
                    </figure>
                    <h3>Jant Boyama</h3>
                    <p>Aracınıza estetik bir dokunuş kazandırmak
                        ve jantlarınızı ilk günkü görünümüne
                        kavuşturmak için profesyonel jant.</p>
                </div>
            </a>


        </div>

    </div>

    <div class="gallery content-space">
        <div class="max-width">
            <h2 class="home-title">Sirius Car Design Galeri</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi delectus dolores inventore labore
                laudantium magni, maiores neque nisi officiis porro, quibusdam, sequi? Ex, fugit ipsa nisi
                quibusdam quisquam voluptas!</p>

            <div class="swiper" id="gallerySlide">
                <div class="swiper-wrapper">
                    @foreach($slider as $slide)
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                        <a href="#" class="swiper-slide spec-stroke">
                            <img class="swiper-lazy desktop-show" src="{{asset("storage/sliders/kare-slide.jpg")}}"
                                 alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                            <div class="swiper-lazy-preloader"></div>
                        </a>
                    @endforeach
                </div>
                <div class="swiper-next-button spec-bg-stroke">
                    <img src="{{asset("images/inner/slide-next-btn.svg")}}" alt="">
                </div>
                <div class="swiper-prev-button spec-bg-stroke">
                    <img src="{{asset("images/inner/slide-prev-btn.svg")}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="our-values content-space">
        <div class="max-width">
            <h2 class="home-title">Sirius Car Design Değerleri</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur blanditiis consectetur
                dignissimos dolor dolores enim fuga fugiat, in nihil pariatur placeat quaerat quod recusandae rem
                veniam vitae? Excepturi, optio.</p>
            <div class="values">
                <div class="value spec-bg-stroke">
                    <div class="title">
                        <h3>Profesyonel Ekip</h3>
                        <figure>
                            <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25" alt="">
                        </figure>
                    </div>

                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita non
                            repellat
                            tempore. Deserunt enim facilis modi molestias nesciunt nulla officiis, placeat quae,
                            quasi
                            quidem quod sint suscipit tempore veniam?</p>
                    </div>

                </div>
                <div class="value spec-bg-stroke active">
                    <div class="title">
                        <h3>Profesyonel Ekip</h3>
                        <figure>
                            <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25" alt="">
                        </figure>
                    </div>

                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita non
                            repellat
                            tempore. Deserunt enim facilis modi molestias nesciunt nulla officiis, placeat quae,
                            quasi
                            quidem quod sint suscipit tempore veniam?</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="blogs-news content-space">
        <div class="max-width">
            <h2 class="home-title">Haberler ve Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, expedita explicabo id illo
                inventore ipsa iure, molestiae possimus quas quos ratione reiciendis rerum sed soluta totam vel
                veritatis vero voluptates.</p>

            <div class="blogs">


                <div class="blog spec-stroke">
                    <h3>Haber Başlığı</h3>
                    <figure class="spec-stroke">
                        <img src="{{asset("images/inner/blog.jpg")}}" alt="">
                    </figure>
                </div>


            </div>


        </div>
    </div>

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

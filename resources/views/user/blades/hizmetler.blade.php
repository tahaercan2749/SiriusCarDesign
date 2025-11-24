@extends("user.partial.layout")
@section("content")

    <div class="inner-page">
        <div class="max-width  content-space">
            <h1>{{$page->title}}</h1>
            {!! $page->content !!}

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
    </div>




@endsection

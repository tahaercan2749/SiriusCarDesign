@extends("user.partial.layout")
@section('extraCss')
    @php
        // SSS değişkeni var mı ve dolu mu kontrolü
        if (isset($sss) && count($sss) > 0) {

            $questions = [];

            foreach($sss as $soru) {
                // Soruları ve cevapları listeye ekle
                $questions[] = [
                    "@type" => "Question",
                    "name" => $soru->question,
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => strip_tags($soru->answer) // HTML etiketlerini temizle
                    ]
                ];
            }

            // Ana FAQPage şemasını oluştur
            $faqSchema = [
                "@context" => "https://schema.org",
                "@type" => "FAQPage",
                "@id" => url()->current() . "#faq",
                "mainEntity" => $questions
            ];
        }
    @endphp

    {{-- Eğer şema oluşturulduysa scripti bas --}}
    @if(isset($faqSchema))
        <script type="application/ld+json">
            {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    @endif
@endsection
@section("content")

    <div class="inner-page">
        <figure class="page-main">
            @if($page->image())
                <img src="{{$page->image()}}" alt="{{$page->title}} | {{$setting->site_name}}">
            @endif
            <h1>{{$page->title}}</h1>
        </figure>
        <div class="max-width  content-space">

            {!! $page->content !!}

            @if($sss)
                <div class="our-values content-space">
                    <div class="values">
                        @foreach($sss as $soru)
                            <div class="value spec-bg-stroke @if($loop->index==0) active @endif">
                                <div class="title">
                                    <h3>{{$soru->question}}</h3>
                                    <figure>
                                        <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25" alt="">
                                    </figure>
                                </div>

                                <div class="content">
                                    <p>{{$soru->answer}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>

@endsection
@section("extraJs")
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

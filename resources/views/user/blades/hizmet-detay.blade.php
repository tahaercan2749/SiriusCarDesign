@extends("user.partial.layout")
@section("extraCss")
    @php
        // SSS değişkeni var mı ve dolu mu kontrolü
        if (isset($page->faq) && count($page->faq) > 0) {

            $questions = [];

            foreach($page->faq as $soru) {
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
        <div class="max-width  content-space with-sidemenu">
            <div class="content">
                {!! $page->content !!}

                <h2>Sıkça Sorulan Sorular</h2>
                @if($page->faq)
                    <div class="our-values content-space">
                        <div class="values">
                            @foreach($page->faq as $soru)
                                <div class="value spec-bg-stroke @if($loop->index==0) active @endif">
                                    <div class="title">
                                        <h3>{{$soru->question}}</h3>
                                        <figure>
                                            <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25"
                                                 alt="">
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
            <div class="sidemenu">
                @if($page)
                    <div class="title">@if($page->parentCategory->parent)
                            {{$page->parentCategory->parent->name}}
                        @endif <i class="ri-arrow-down-s-fill"></i></div>
                    <ul>
                        @foreach($page->parentCategory->parent->children as $item)
                            @if($item->page)
                                <li class="spec-stroke {{ $page->id == $item->page->id ? 'active' : '' }}">
                                    <a href="{{$item->page->slug}}">{{$item->page->title}}</a>
                                </li>
                            @else
                                <li class="spec-stroke deactive"><a>{{$item->name}}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                @endif
            </div>


        </div>
    </div>

@endsection

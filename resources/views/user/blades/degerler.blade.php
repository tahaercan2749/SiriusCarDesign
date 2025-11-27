@extends("user.partial.layout")
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

            @if($degerler)
                <div class="our-values content-space">

                        <div class="values">
                            @foreach($degerler as $deger)
                                <div class="value spec-bg-stroke @if($loop->index==0) active @endif">
                                    <div class="title">
                                        <h3>{{$deger->title}}</h3>
                                        <figure>
                                            <img src="{{asset("images/inner/arrow-up-icon.svg")}}" width="25" alt="">
                                        </figure>
                                    </div>

                                    <div class="content">
                                        <p>{{$deger->description}}</p>
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

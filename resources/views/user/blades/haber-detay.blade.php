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

            <h2 class="title">Diğer Blog Yazılarımız</h2>
            <div class="blogs">

                @foreach($page->getOtherPagesAttribute() as $haber)
                    <a href="{{$haber->slug}}" class="blog spec-stroke">
                        <h2>{{\Illuminate\Support\Str::limit($haber->title,51,"...")}}</h2>
                        <figure class="spec-stroke">
                            <img src="{{$haber->image()}}" alt="{{$haber->title}} | {{$setting->site_name}}">
                        </figure>
                    </a>

                @endforeach
            </div>
        </div>
    </div>

@endsection

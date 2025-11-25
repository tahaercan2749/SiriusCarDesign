@extends("user.partial.layout")
@section("content")
    <div class="inner-page">
        <div class="max-width  content-space">
            <h1>{{$page->title}}</h1>
            {!! $page->content !!}


            <div class="blogs">
                @foreach($page->parentCategory->pages as $haber)
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


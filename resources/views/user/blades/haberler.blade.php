@extends("user.partial.layout")
@section("content")
    <div class="page-content max-width content-space">
        {!! $page->content !!}

        <div class="blogs">

            @if($page->parentCategory->children->count()>0)
                @foreach($page->parentCategory->children as $haber)
                    <div class="blog">
                        <figure>
                        <img src="{{$haber->page->image()}}" alt="{{$haber->page->title}}"/>
                        </figure>

                        <h2>{{$haber->page->title}}</h2>
                        <a href="{{$haber->page->slug}}">Devamını Oku</a>
                    </div>
                @endforeach
            @else
                @foreach($page->parentCategory->pages as $haber)
                    <div class="blog">
                        <figure>
                        <img src="{{$haber->image()}}" alt="{{$haber->title}}"/>
                        </figure>

                        <h2>{{$haber->title}}</h2>
                        <a href="{{$haber->slug}}" class="special-button">Devamını Oku</a>
                    </div>
                @endforeach
            @endif


        </div>

    </div>
@endsection


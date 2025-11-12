@extends("user.partial.layout")
@section("content")

    <div class="max-width content-space">

        {!! $page->content !!}

        <div class="gallery">
            @if($page->gallery->count()>0)
                @foreach($page->gallery as $image)

                    <a href="{{$image->image()}}" data-fancybox="gallery" data-caption="{{$page->title}}
                        {{$loop->iteration}}" class="image-box">
                        <img src="{{$image->image()}}" alt=""/>
                    </a>

                @endforeach
            @endif
        </div>
    </div>

@endsection

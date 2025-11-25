@extends("user.partial.layout")
@section("content")

    <div class="inner-page">

        <div class="max-width  content-space">
            <h1>{{$page->title}}</h1>
            {!! $page->content !!}

            @if($page->gallery)
                <div class="page-gallery">
                    @foreach($page->gallery as $image)
                        <a href="{{$image->image()}}" class="item spec-stroke glightbox" >
                            <img src="{{$image->image()}}" alt="{{$image->title}}">
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection

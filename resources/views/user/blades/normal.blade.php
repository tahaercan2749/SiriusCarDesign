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
        </div>
    </div>

@endsection

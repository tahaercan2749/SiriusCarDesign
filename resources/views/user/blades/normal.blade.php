@extends("user.partial.layout")
@section("content")

    <div class="inner-page">
        <figure class="page-main">
            <img src="{{$page->image()}}" alt="{{$page->title}} | {{$setting->site_name}}">
            <h1>{{$page->title}}</h1>
        </figure>
        <div class="max-width  content-space">

            {!! $page->content !!}
        </div>
    </div>

@endsection

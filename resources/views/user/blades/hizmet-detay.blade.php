@extends("user.partial.layout")
@section("content")

    <div class="inner-page">
        <div class="max-width  content-space">
            <h1>{{$page->title}}</h1>
            <figure class="float-right-figure">
                <img src="{{$page->image()}}" alt="{{$page->title}} | {{$setting->site_name}}">
            </figure>
            {!! $page->content !!}
        </div>
    </div>




@endsection

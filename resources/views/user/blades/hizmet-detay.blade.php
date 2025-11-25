@extends("user.partial.layout")
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
                                    <a href="{{$item->page->slug}}" >{{$item->page->title}}</a>
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

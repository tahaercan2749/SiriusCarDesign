<div class="breadcrumb">
    <div class="max-width">
        <a href="{{env("APP_URL")}}">Anasayfa <i class="ri-arrow-drop-right-fill"></i></a>
        @foreach($page->parentCategory->breadcrumbs() as $breadcrumb)
            @if($breadcrumb->name)
                @if($breadcrumb->page?->id != $page->id)

                    <a @if($breadcrumb->page != NULL) href="{{$breadcrumb->page->slug}}" @endif>
                        {{$breadcrumb->name}} <i class="ri-arrow-drop-right-fill"></i>
                    </a>
                @endif
            @else
                @if($breadcrumb->id != $page->id)
                    <a href="{{$breadcrumb->slug}}">{{$breadcrumb->title}} <i class="ri-arrow-drop-right-fill"></i></a>
                @endif
            @endif
        @endforeach
        <a class="title">{{$page->title}}</a>
    </div>
</div>




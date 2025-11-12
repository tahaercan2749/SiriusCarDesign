


<div class="breadcrumb"
     @if($page->breadcrumb_image)
        style="background-image: url({{$page->breadcrumbImage()}})"
     @else
         style="background-image: url({{asset("images/site-ici/breadcrumb-default-bg.jpg")}})"
    @endif>

    <h1 class="title">{{$page->title}}</h1>
    <div class="links">
        <a href="{{env("APP_URL")}}">Anasayfa <i class="las la-angle-right"></i></a>
        @foreach($page->parentCategory->breadcrumbs() as $breadcrumb)
            @if($breadcrumb->name)
                @if($breadcrumb->page?->id != $page->id)

                    <a @if($breadcrumb->page != NULL) href="{{$breadcrumb->page->slug}}" @endif>
                         {{$breadcrumb->name}} <i class="las la-angle-right"></i>
                    </a>
                @endif

            @else
                @if($breadcrumb->id != $page->id)
                    <a href="{{$breadcrumb->slug}}">{{$breadcrumb->title}}</a>
                @endif
            @endif
        @endforeach
    </div>
</div>

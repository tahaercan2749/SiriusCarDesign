@if($page->gallery->count()>0)
    @foreach($page->gallery as $image)
        <a href="{{$image->image()}}" data-fancybox="gallery"
           data-caption="{{$page->title}} Foto Galeri {{$loop->iteration}}"
           class="icon flaticon-plus">
            <img src="{{$image->image()}}" alt="">
        </a>
    @endforeach
@endif

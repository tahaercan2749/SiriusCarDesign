@extends("user.partial.layout")
@section("content")
    <div class="blog-detail max-width content-space">

        <div class="detail">
            <figure>
                <img src="{{$page->image()}}" alt="{{$page->title}}"/>
            </figure>
            {!! $page->content !!}
        </div>
        <div class="other-blogs">
            <h2>Son Blog Yazılarımız</h2>
            @if($otherBlogs->count()>0)
                <div class="other-list">
                    @foreach($otherBlogs as $haber)
                        <a  href="{{$haber->slug}}" class="other">
                            <figure>
                                <img src="{{$haber->image()}}" alt="{{$haber->title}}"/>
                            </figure>
                            <h3>{{$haber->title}}</h3>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection

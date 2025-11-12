@extends("user.partial.layout")
@section("extraCss")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
@endsection
@section("content")

    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
                <a href="#" class="swiper-slide">
                    <img class="swiper-lazy desktop-show" src="{{ $slide->image() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <img class="swiper-lazy mobile-show" src="{{ $slide->mobilImage() }}"
                         alt="{{ $slide->name }} | {{$setting->site_name}}" loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </a>
            @endforeach
        </div>

        {{--        <div class="swiper-pagination"></div>--}}
        {{--        <div class="swiper-button-prev"></div>--}}
        {{--        <div class="swiper-button-next"></div>--}}
        <div class="swiper-scrollbar"></div>
    </div>



@endsection
{{----}}
@section("extraJs")
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        const notyf = new Notyf({
            duration: 3000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [
                {
                    type: 'warning',
                    background: 'orange',
                    icon: {
                        className: 'fas fa-exclamation-triangle',
                        tagName: 'i',
                    }
                },
                {
                    type: 'info',
                    background: '#3f87f5',
                    icon: {
                        className: 'fas fa-info-circle',
                        tagName: 'i',
                    }
                }
            ]
        });

        @if(session('status')==="success")
        notyf.success("{{ session('message') }}");
        @endif

        @if(session('status')==="error")
        notyf.error("{{ session('message') }}");
        @endif
    </script>
@endsection

<body class="hidden-bar-wrapper">
@if($setting->header_code)
    {!! $setting->header_code !!}
@endif


<header>
    <div class="max-width">
        <a href="#" class="logo">
            <img src="{{$setting->logo()}}" alt="{{$setting->site_name}} Logo">
        </a>

        <div class="menus spec-bg-stroke">
            <a href="#" class="bg-gradient">Anasayfa</a>
            <a href="#" class="bg-gradient">Kurumsal</a>
            <a href="#" class="bg-gradient">Hizmetlerimiz</a>
            <a href="#" class="bg-gradient">Galeri</a>
            <a href="#" class="bg-gradient">İletişim</a>
        </div>

        <div class="social-icons">
            <a href="#" class="icon spec-bg-stroke">
                <img src="{{asset("images/inner/instagram-icon.svg")}}" height="20" width="20"  alt="İnstagram">
            </a>
            <a href="#" class="icon spec-bg-stroke">
                <img src="{{asset("images/inner/phone-icon.svg")}}" height="20" width="20"  alt="Phone Call">
            </a>
        </div>
    </div>

    {{--    <figure class="logo">--}}
    {{--        <img src="{{$setting->logo()}}" alt="{{$setting->site_name}} Logo">--}}
    {{--    </figure>--}}

    {{--    <ul class="main-menu">--}}
    {{--        <li @if(url()->current()==url(route("home"))) class="current" @endif><a href="/">Ana Sayfa</a></li>--}}
    {{--        @foreach($navbarMenus as $menu)--}}
    {{--            @php--}}
    {{--                $isCurrent = false;--}}

    {{--                // Eğer menünün kendi sayfası mevcut URL ile eşleşiyorsa--}}
    {{--                if ($menu->page && url($menu->page->slug) == url()->current()) {--}}
    {{--                    $isCurrent = true;--}}
    {{--                }--}}

    {{--                if (!$isCurrent && $menu->children) {--}}
    {{--                    foreach ($menu->children as $submenu) {--}}
    {{--                        if ($submenu->page && url($submenu->page->slug) == url()->current()) {--}}
    {{--                            $isCurrent = true;--}}
    {{--                            break;--}}
    {{--                        }--}}
    {{--                    }--}}
    {{--                }--}}

    {{--                if (!$isCurrent && $menu->pages) {--}}
    {{--                    foreach ($menu->pages as $page) {--}}
    {{--                        if (url($page->slug) == url()->current()) {--}}
    {{--                            $isCurrent = true;--}}
    {{--                            break;--}}
    {{--                        }--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            @endphp--}}

    {{--            <li {{ $isCurrent ? 'class="current"' : '' }}--}}
    {{--                @if($menu->children && $menu->children->count() > 0 || $menu->pages && $menu->pages->count() > 0)--}}
    {{--                    class="has-children"--}}
    {{--                @endif >--}}
    {{--                <a--}}
    {{--                    @if($menu->page)--}}
    {{--                        href="{{$menu->page?->slug}}"--}}
    {{--                    @endif--}}
    {{--                >{{$menu->name}}--}}
    {{--                    @if($menu->children && $menu->children->count() > 0)--}}
    {{--                        <i class="las la-angle-right"></i>--}}
    {{--                    @endif--}}
    {{--                </a>--}}
    {{--                @if($menu->children && $menu->children->count() > 0)--}}
    {{--                    <ul>--}}
    {{--                        @php /* Alt menulerin eklenmesi */ @endphp--}}
    {{--                        @foreach($menu->children as $submenu)--}}
    {{--                            <li>--}}
    {{--                                <a--}}
    {{--                                    @if($submenu->page)--}}
    {{--                                        href="{{$submenu->page?->slug}}"--}}
    {{--                                    @endif--}}
    {{--                                >{{ $submenu->name }}</a>--}}
    {{--                            </li>--}}
    {{--                        @endforeach--}}
    {{--                    </ul>--}}
    {{--                @elseif($menu->pages && $menu->pages->count() > 0)--}}
    {{--                    @php /* Alt sayfaların eklenmesi */ @endphp--}}
    {{--                    <ul>--}}
    {{--                        @foreach($menu->pages as $page)--}}
    {{--                            <li><a href="{{$page->slug}}">{{ $page->title }}</a></li>--}}
    {{--                        @endforeach--}}
    {{--                    </ul>--}}
    {{--                @endif--}}
    {{--            </li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}
    {{--    --}}
    {{--    <div class="mobile-menu">--}}
    {{--        <i class="las la-bars" onclick="openMobileMenu()"></i>--}}
    {{--        <div class="mobile-menu-list">--}}
    {{--            <ul id="mobileMenuUl">--}}
    {{--                <i class="las la-times" id="closeMenu" onclick="closeMobileMenu()"></i>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    </div>--}}

</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // ==== Menüleri klonla ====
        let mainMenuItems = document.querySelectorAll(".main-menu > li");
        let mobileMenuUl = document.querySelector("#mobileMenuUl");

        mainMenuItems.forEach(function (li) {
            mobileMenuUl.appendChild(li.cloneNode(true));
        });

        // ==== Menü Aç / Kapat ====
        window.openMobileMenu = function () {
            document.querySelector(".mobile-menu-list").classList.add("opened");
        }

        window.closeMobileMenu = function () {
            document.querySelector(".mobile-menu-list").classList.remove("opened");
        }

        // Arka plana tıklayınca kapat
        document.querySelector(".mobile-menu-list").addEventListener("click", function () {
            closeMobileMenu();
        });

        // UL içine tıklanınca kapanmayı engelle
        mobileMenuUl.addEventListener("click", function (e) {
            e.stopPropagation();
        });

        // ==== Mobil Menü Dropdown Toggle ====
        // mobileMenuUl içine delegation kullanıyoruz
        mobileMenuUl.addEventListener("click", function (e) {
            const li = e.target.closest(".has-children");
            if (li) {
                e.preventDefault(); // link yönlenmesin
                li.classList.toggle("show"); // aç/kapat
            }
        });
    });
</script>



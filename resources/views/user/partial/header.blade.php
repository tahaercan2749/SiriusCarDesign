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
            {{-- Sabit Anasayfa Linki --}}
            <a href="/" class="bg-gradient @if(url()->current() == url(route("home"))) active @endif">Anasayfa</a>

            {{-- Dinamik Menü Döngüsü --}}
            @foreach($navbarMenus as $menu)
                @php
                    $isCurrent = false;
                    $hasChildren = ($menu->children && $menu->children->count() > 0) || ($menu->pages && $menu->pages->count() > 0);

                    // Aktif sayfa kontrolü (Eski koddan aynen alındı)
                    if ($menu->page && url($menu->page->slug) == url()->current()) {
                        $isCurrent = true;
                    }
                    if (!$isCurrent && $menu->children) {
                        foreach ($menu->children as $submenu) {
                            if ($submenu->page && url($submenu->page->slug) == url()->current()) {
                                $isCurrent = true; break;
                            }
                        }
                    }
                    if (!$isCurrent && $menu->pages) {
                        foreach ($menu->pages as $page) {
                            if (url($page->slug) == url()->current()) {
                                $isCurrent = true; break;
                            }
                        }
                    }
                @endphp

                {{-- Eğer alt menü varsa bir kapsayıcı (div) içinde, yoksa direkt a etiketi olarak basıyoruz --}}
                @if($hasChildren)
                    <div class="menu-item-wrapper" style="position: relative; display: inline-flex; align-items: center;">
                        <a href="{{ $menu->page ? url($menu->page->slug) : '#' }}"
                           class="bg-gradient {{ $isCurrent ? 'active' : '' }}">
                            {{$menu->name}}
                            {{-- Alt menü ok işareti --}}
                            <i class="las la-angle-down" style="font-size: 12px; margin-left: 4px;"></i>
                        </a>

                        {{-- Alt Menü Listesi (Dropdown) --}}
                        <div class="dropdown-menu-content">
                            @if($menu->children && $menu->children->count() > 0)
                                @foreach($menu->children as $submenu)
                                    <a href="{{ $submenu->page ? url($submenu->page->slug) : '#' }}" class="sub-link">
                                        {{ $submenu->name }}
                                    </a>
                                @endforeach
                            @elseif($menu->pages && $menu->pages->count() > 0)
                                @foreach($menu->pages as $page)
                                    <a href="{{ url($page->slug) }}" class="sub-link">
                                        {{ $page->title }}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @else
                    {{-- Alt menüsü olmayan normal link --}}
                    <a href="{{ $menu->page ? url($menu->page->slug) : '#' }}"
                       class="bg-gradient {{ $isCurrent ? 'active' : '' }}">
                        {{$menu->name}}
                    </a>
                @endif
            @endforeach
        </div>

        <div class="social-icons">
            <a href="#" class="icon spec-bg-stroke">
                <img src="{{asset("images/inner/instagram-icon.svg")}}" height="20" width="20"  alt="İnstagram">
            </a>
            <a href="#" class="icon spec-bg-stroke">
                <img src="{{asset("images/inner/phone-icon.svg")}}" height="20" width="20"  alt="Phone Call">
            </a>
        </div>

            <div class="mobile-menu">
                <i class="ri-menu-fill"></i>
            </div>

    </div>
</header>

<body class="hidden-bar-wrapper">
@if($setting->header_code)
    {!! $setting->header_code !!}
@endif


<header>
    <div class="max-width">
        <a href="/" class="logo">
            <img src="{{$setting->logo()}}" alt="{{$setting->site_name}} Logo">
        </a>

        <ul class="menus spec-bg-stroke">
            {{-- Sabit Anasayfa Linki --}}
            <li><a href="/"
                   class="bg-gradient @if(url()->current() == url(route("home"))) active @endif">Anasayfa</a></li>

            {{-- Dinamik Menü Döngüsü --}}
            @foreach($navbarMenus as $menu)
                @php
                    $isCurrent = false;
                    $hasChildren = ($menu->children && $menu->children->count() > 0) || ($menu->pages && $menu->pages->count() > 0);

                    // Aktif sayfa kontrolü
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
                    <li>
                        <a href="{{ $menu->page ? url($menu->page->slug) : '#' }}"
                           class="bg-gradient {{ $isCurrent ? 'active' : '' }}">
                            {{$menu->name}}
                            {{-- Alt menü ok işareti --}}
                            <i class="ri-arrow-down-s-fill" style="font-size: 12px; margin-left: 4px;"></i>

                        </a>

                        {{-- Alt Menü Listesi (Dropdown) --}}
                        <ul class="sub-menu spec-stroke">
                            @if($menu->children && $menu->children->count() > 0)
                                @foreach($menu->children as $submenu)
                                    <li class="sub-link"><a
                                            href="{{ $submenu->page ? url($submenu->page->slug) : '#' }}">
                                            {{ $submenu->name }}
                                        </a></li>
                                @endforeach
                            @elseif($menu->pages && $menu->pages->count() > 0)
                                @foreach($menu->pages as $page)
                                    <li class="sub-link"><a href="{{ url($page->slug) }}">
                                            {{ $page->title }}
                                        </a></li>
                                @endforeach
                            @endif
                        </ul>

                    </li>
                @else
                    {{-- Alt menüsü olmayan normal link --}}
                    <li><a href="{{ $menu->page ? url($menu->page->slug) : '#' }}"
                           class="bg-gradient {{ $isCurrent ? 'active' : '' }}">
                            {{$menu->name}}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>

        <div class="social-icons">
            @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->instagram!=NULL)
                <a href="{{$contactInfo->socialMedia->instagram}}" class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/instagram-icon.svg")}}" height="20" width="20" alt="İnstagram">
                </a>
            @endif
            @if($contactInfo && $contactInfo->phone)
                <a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}"
                   class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/phone-icon.svg")}}" height="20" width="20" alt="Phone Call">
                </a>
            @endif
        </div>

        <div class="mobile-menu-buton">
            <i class="ri-menu-fill"></i>
        </div>

        <div class="sidemenu">
            <ul class="menu-list">
                @foreach($navbarMenus as $menu)
                    @php
                        // --- 1. MANTIK BLOĞU (Değiştirilmedi) ---
                        $isCurrent = false;
                        $hasChildren = ($menu->children && $menu->children->count() > 0) || ($menu->pages && $menu->pages->count() > 0);

                        // Aktif sayfa kontrolü
                        if ($menu->page && url($menu->page->slug) == url()->current()) {
                            $isCurrent = true;
                        }
                        // Alt elemanlardan biri aktif mi kontrolü
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

                    {{-- --- 2. LİSTE ELEMANI --- --}}
                    {{-- Eğer aktifse 'active', alt menüsü varsa 'has-children' classı ekliyoruz --}}
                    <li class="list-item {{ $isCurrent ? 'active' : '' }} {{ $hasChildren ? 'has-children' : '' }}">

                        <a href="{{ $menu->page ? url($menu->page->slug) : ($hasChildren ? 'javascript:void(0)' : '#') }}">
                            {{ $menu->name }}

                            {{-- Alt menü varsa ok işareti --}}
                            @if($hasChildren)
                                <i class="ri-arrow-down-s-fill"></i>
                            @endif
                        </a>

                        {{-- --- 3. ALT MENÜLER (DROPDOWN) --- --}}
                        @if($hasChildren)
                            <ul class="sub-menu-list">
                                {{-- A. Alt Kategoriler Varsa --}}
                                @if($menu->children && $menu->children->count() > 0)
                                    @foreach($menu->children as $submenu)
                                        <li class="sub-item">
                                            <a href="{{ $submenu->page ? url($submenu->page->slug) : '#' }}">
                                                {{ $submenu->name }}
                                            </a>
                                        </li>
                                    @endforeach

                                    {{-- B. Alt Sayfalar Varsa --}}
                                @elseif($menu->pages && $menu->pages->count() > 0)
                                    @foreach($menu->pages as $page)
                                        <li class="sub-item">
                                            <a href="{{ url($page->slug) }}">
                                                {{ $page->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const mobileMenuButton = document.querySelector(".mobile-menu-buton");
        const mobileMenuButtonIcon = document.querySelector(".mobile-menu-buton i");
        const mobileMenu = document.querySelector(".sidemenu");
        mobileMenuButton.addEventListener('click', () => {
            if (mobileMenuButtonIcon.classList.contains("ri-menu-fill")) {
                mobileMenuButtonIcon.classList.remove("ri-menu-fill");
                mobileMenuButtonIcon.classList.add("ri-close-fill");
            } else {
                mobileMenuButtonIcon.classList.remove("ri-close-fill");
                mobileMenuButtonIcon.classList.add("ri-menu-fill");
            }
            mobileMenu.classList.toggle("opened")
        })

        // 1. Alt menüsü olan (has-children sınıfına sahip) li elementlerinin içindeki 'a' etiketlerini seçiyoruz.
        const menuTriggers = document.querySelectorAll('.list-item.has-children > a');

        menuTriggers.forEach(trigger => {
            trigger.addEventListener('click', function (e) {
                // 2. Linkin varsayılan davranışını (sayfayı yenileme/gitme) engelliyoruz.
                e.preventDefault();

                // 3. Tıklanan linkin kapsayıcısı olan 'li.list-item' elementini buluyoruz.
                const parentLi = this.closest('.list-item');

                // Bir menü açıldığında diğer açık olanların kapanır
                const allOpenItems = document.querySelectorAll('.list-item.has-children.open');
                allOpenItems.forEach(item => {
                    if (item !== parentLi) {
                        item.classList.remove('open');
                    }
                });

                // 4. 'open' sınıfını ekle veya çıkar (varsa siler, yoksa ekler)
                parentLi.classList.toggle('open');
            });
        });
    });
</script>































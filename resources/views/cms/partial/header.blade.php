<nav class="topbar koyu-arkaplan">
    <a href="{{route("cms.dashboard")}}" class="logo">
        <img src="{{asset("images/panel/site/logo.png")}}" alt="">
    </a>
    <div class="user">
        <figure>
            <img src="{{asset("images/panel/site/user.svg")}}" alt="">
        </figure>
        <div class="username">{{ Auth::user()->name }}<i class="las la-angle-down"></i></div>
        <ul class="alt-menu">
            <li><a href="{{route('cms.profile.edit')}}">Profil</a></li>
            <li>
                <form action="{{ route('cms.logout') }}" method="POST" class="logout-form">
                    @csrf
                    <input type="submit" value="Çıkış Yap">
                </form>
            </li>
        </ul>
    </div>
</nav>


<nav class="sidebar koyu-arkaplan" id="sideMenu">
    <ul class="ust-menu">
        <li class="ust-menu-li {{ request()->routeIs('cms.dashboard') || request()->routeIs('cms.home-page-management.*') ? 'aktif' : '' }}">
            <a href="{{route('cms.dashboard')}}">Anasayfa Yönetimi <i class="las la-angle-right"></i></a>
            @permission('anasayfa-yonetimi')
            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.home-page-management.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.home-page-management.index')}}">Eklenen Kısımlar</a>
                </li>

                <li class="{{ request()->routeIs('cms.home-page-management.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.home-page-management.create')}}">Kısım Ekle</a>
                </li>

                <li class="{{ request()->routeIs('cms.home-page-management.deleted') ? 'aktif' : '' }}">
                    <a href="{{route('cms.home-page-management.deleted')}}">Silinen Kısımlar</a>
                </li>

            </ul>
            @endpermission
        </li>

        @permission('medya')
        {{--        Media Uploads --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.media.*') ? 'aktif' : '' }}">
            <a>Medya / Dosya <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.media.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.media.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.blades.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.media.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('blade')
        {{--        Blade --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.blades.*') ? 'aktif' : '' }}">
            <a>Blade <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.blades.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.blades.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.blades.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.blades.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('dil')
        {{--        Language --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.languages.*') ? 'aktif' : '' }}">
            <a>Dil <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.languages.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.languages.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.languages.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.languages.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('kategori')
        {{--        Category --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.category.*') ? 'aktif' : '' }}">
            <a>Kategoriler <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.category.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.category.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.category.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.category.create')}}">Oluştur</a>
                </li>

                <li class="{{ request()->routeIs('cms.category.deleted') ? 'aktif' : '' }}">
                    <a href="{{route('cms.category.deleted')}}">Silinenler</a>
                </li>

                <li class="{{ request()->routeIs('cms.category.special-categories') ? 'aktif' : '' }}">
                    <a href="{{route('cms.category.special-categories')}}">Özel Kategoriler</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('sayfa')
        {{--        Pages --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.pages.*') ? 'aktif' : '' }}">
            <a>Sayfalar <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.pages.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.pages.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.pages.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.pages.create')}}">Oluştur</a>
                </li>

                <li class="{{ request()->routeIs('cms.pages.deleted') ? 'aktif' : '' }}">
                    <a href="{{route('cms.pages.deleted')}}">Silinenler</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('seo')
        {{--        Seo --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.seos.*') ? 'aktif' : '' }}">
            <a>Sayfa Seoları <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.seos.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.seos.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.seos.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.seos.create')}}">Oluştur</a>
                </li>
            </ul>
        </li>
        @endpermission


        @permission('ozel-menuler')
        @foreach($specialMenus as $menu)
            @php
                $currentId = request()->route('id') ?? request()->route('categoryId');
                $isActive = $currentId == $menu->id && request()->routeIs('cms.side-menu-elements.*');
            @endphp
            <li class="ust-menu-li {{ $isActive ? 'aktif' : '' }}">
                <a>{{$menu->name}} <i class="las la-angle-right"></i></a>
                <ul class="alt-menu">
                    <li class="{{ request()->routeIs('cms.side-menu-elements.index') && $isActive ? 'aktif' : '' }}">
                        <a href="{{route('cms.side-menu-elements.index',$menu->id)}}">Listele</a>
                    </li>
                    <li class="{{ request()->routeIs('cms.side-menu-elements.create') && $isActive ? 'aktif' : '' }}">
                        <a href="{{route('cms.side-menu-elements.create',$menu->id)}}">Ekle</a>
                    </li>
                    <li class="{{ request()->routeIs('cms.side-menu-elements.deleted') && $isActive ? 'aktif' : '' }}">
                        <a href="{{route('cms.side-menu-elements.deleted',$menu->id)}}">Silinenler</a>
                    </li>
                </ul>
            </li>
        @endforeach
        @endpermission

        @permission('degerlerimiz')
        {{--        Slider --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.values.*') ? 'aktif' : '' }}">
            <a>Değerlerimiz <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.values.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.values.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.values.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.values.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('slider')
        {{--        Slider --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.slider.*') ? 'aktif' : '' }}">
            <a>Slayt - Banner <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.slider.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.slider.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.slider.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.slider.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('sss')
        {{--        Sıkça Sorulan Sorular --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.faqs.*') ? 'aktif' : '' }}">
            <a title="Sıkça Sorulan Sorular">SSS <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.faqs.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.faqs.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.faqs.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.faqs.create')}}">Oluştur</a>
                </li>

            </ul>
        </li>
        @endpermission


        @permission('galeri')
        {{--        Slider --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.gallery.*') ? 'aktif' : '' }}">
            <a>Galeri <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.gallery.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.gallery.index')}}">Tümü</a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('referanslar')
        {{--        References --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.references.*') ? 'aktif' : '' }}">
            <a>Referanslar <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.references.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.references.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.references.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.references.create')}}">Oluştur</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('markalarimiz')
        {{--        Certificates --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.brands.*') ? 'aktif' : '' }}">
            <a>Markalarımız <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.brands.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.brands.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.brands.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.brands.create')}}">Oluştur</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('sertifikalar')
        {{--        Certificates --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.certificate.*') ? 'aktif' : '' }}">
            <a>Sertifikalar <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.certificate.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.certificate.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.certificate.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.certificate.create')}}">Oluştur</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('basin-kiti')
        {{--        Preess Kits --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.press-kit.*') ? 'aktif' : '' }}">
            <a>Basın Kiti <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.press-kit.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.press-kit.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.press-kit.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.press-kit.create')}}">Oluştur</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('popup')
        {{--        Popup --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.popup.*') ? 'aktif' : '' }}">
            <a>Pop-Up <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.popup.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.popup.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.popup.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.popup.create')}}">Oluştur</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('reklam-kampanyalari')
        {{--        Popup --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.ads-campaigns.*') ? 'aktif' : '' }}">
            <a>Reklam Kampanyaları <i
                    class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.ads-campaigns.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.ads-campaigns.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.ads-campaigns.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.ads-campaigns.create')}}">Oluştur</a>
                </li>

                <li class="{{ request()->routeIs('cms.ads-campaigns.analysis') ? 'aktif' : '' }}">
                    <a href="{{route('cms.ads-campaigns.analysis')}}">Reklam Analiz</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('iletisim-formlari')
        {{--        Contacts --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.contact-forms.*') ? 'aktif' : '' }}">
            <a>İletişim Formları <span class="notification bg-error">{{$contactFormUnreadMessage}}</span> <i
                    class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.contact-forms.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.contact-forms.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.contact-forms.deleted') ? 'aktif' : '' }}">
                    <a href="{{route('cms.contact-forms.deleted')}}">Silinenler</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('iletisim')
        {{--        Contacts --}}
        <li class="ust-menu-li {{ request()->routeIs('cms.contacts.*') ? 'aktif' : '' }}">
            <a>İletişim Bilgileri <i class="las la-angle-right"></i></a>

            <ul class="alt-menu">

                <li class="{{ request()->routeIs('cms.contacts.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.contacts.index')}}">Tümü</a>
                </li>

                <li class="{{ request()->routeIs('cms.contacts.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.contacts.create')}}">Oluştur</a>
                </li>
                <li class="{{ request()->routeIs('cms.contacts.deleted') ? 'aktif' : '' }}">
                    <a href="{{route('cms.contacts.deleted')}}">Silinenler</a>
                </li>
            </ul>

        </li>
        @endpermission

        @permission('ayarlar')
        {{--        Ayarlar--}}
        <li class="ust-menu-li {{ request()->routeIs('cms.settings.*') ? 'aktif' : '' }}">
            <a>Ayarlar <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.settings.site.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.settings.site.index')}}">Site Ayarları</a>
                </li>
                <li class="{{ request()->routeIs('cms.settings.api-key.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.settings.api-key.index')}}">API Key Ayarları</a>
                </li>
                @permission('ozel-menu-ayarlari')
                <li class="{{ request()->routeIs('cms.settings.panel-menu.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.settings.panel-menu.index')}}">Panel Menu Ayarları</a>
                </li>
                @endpermission
            </ul>
        </li>
        @endpermission

        @permission('kullanicilar')
        {{--        Users--}}
        <li class="ust-menu-li {{   request()->routeIs('cms.register') ||  request()->routeIs('cms.users.*')  ? 'aktif' : '' }}">
            <a>Kullanıcılar <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.users.index') || request()->routeIs('cms.register') ? 'aktif' : '' }}">
                    <a href="{{route('cms.users.index')}}">Tümü</a>
                </li>
                <li class="{{ request()->routeIs('cms.register') ? 'aktif' : '' }}">
                    <a href="{{route('cms.register')}}">Kullanıcı Ekle</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('roller')
        {{--        Roles--}}
        <li class="ust-menu-li {{ request()->routeIs('cms.roles.*') ? 'aktif' : '' }}">
            <a>Roller <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.roles.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.roles.index')}}">Rol Listesi</a>
                </li>
                <li class="{{ request()->routeIs('cms.roles.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.roles.create')}}">Rol Ekle</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('yetkiler')
        {{--        User Roles Setting--}}
        <li class="ust-menu-li {{ request()->routeIs('cms.role-user.*') ? 'aktif' : '' }}">
            <a>Yetkiler <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.role-user.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.role-user.index')}}">Yetki Listesi</a>
                </li>
                <li class="{{ request()->routeIs('cms.role-user.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.role-user.create')}}">Yetki Ata</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('izinler')
        {{--        Permission Setting--}}
        <li class="ust-menu-li {{ request()->routeIs('cms.permission.*') ? 'aktif' : '' }}">
            <a>İzinler <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.permission.index') ? 'aktif' : '' }}">
                    <a href="{{route('cms.permission.index')}}">İzin Listesi</a>
                </li>
                <li class="{{ request()->routeIs('cms.permission.create') ? 'aktif' : '' }}">
                    <a href="{{route('cms.permission.create')}}">İzin Ekle</a>
                </li>
            </ul>
        </li>
        @endpermission

        @permission('yetki-izinleri')
        {{--        Role Permission Setting--}}
        <li class="ust-menu-li {{ request()->routeIs('cms.role-permission.*') ? 'aktif' : '' }}">
            <a>Yetki İzinleri <i class="las la-angle-right"></i></a>
            <ul class="alt-menu">
                <li class="{{ request()->routeIs('cms.role-permission.*') ? 'aktif' : '' }}">
                    <a href="{{route('cms.role-permission.index')}}">Yetki İzin Listesi</a>
                </li>
            </ul>
        </li>
        @endpermission

    </ul>
</nav>

<nav class="mobile-sidebar-button" id="mobileSideMenuButton"><i class="las la-angle-right"></i></nav>


<script>
    const mobileSideMenuButton = document.getElementById("mobileSideMenuButton");
    const sideMenu = document.getElementById("sideMenu");
    const mobileSideMenuButtonIcon = document.querySelector("#mobileSideMenuButton i")
    mobileSideMenuButton.addEventListener("click", function () {
        if (sideMenu.classList.contains("mobile")) {
            sideMenu.classList.remove("mobile")
            mobileSideMenuButton.classList.remove("close")
            mobileSideMenuButtonIcon.classList.remove("la-angle-left");
            mobileSideMenuButtonIcon.classList.add("la-angle-right");
        } else {
            sideMenu.classList.add("mobile")
            mobileSideMenuButton.classList.add("close")
            mobileSideMenuButtonIcon.classList.remove("la-angle-right");
            mobileSideMenuButtonIcon.classList.add("la-angle-left");
        }
    })

    const menuList = document.querySelectorAll('.ust-menu .ust-menu-li');
    menuList.forEach((menuL) => {
        menuL.addEventListener('click', function () {
            if (menuL.classList.contains("show")) {
                menuL.classList.remove("show");
            } else {
                menuList.forEach((menuL2) => {
                    menuL2.classList.remove("show");
                })
                menuL.classList.add("show");
            }
        })
    })

</script>

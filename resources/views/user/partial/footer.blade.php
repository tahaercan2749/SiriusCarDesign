{{--<footer class="content-space main-content">--}}
{{--    <div class="max-width">--}}
{{--        <div class="item contact-informations">--}}
{{--            <h2>İletişim Bilgileri</h2>--}}
{{--            <a class="contact">--}}
{{--                <i class="icon las la-home"></i>--}}
{{--                <h3>{{$contactInfo->address}}<br>{{$contactInfo->state}} / {{$contactInfo->city}}</h3>--}}
{{--            </a>--}}
{{--            <a href="mailto:{{$contactInfo->email}}" class="contact">--}}
{{--                <i class="icon las la-phone"></i>--}}
{{--                <h3>{{$contactInfo->email}}</h3>--}}
{{--            </a>--}}
{{--            <a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}"--}}
{{--               class="contact">--}}
{{--                <i class="icon las la-envelope"></i>--}}
{{--                <h3>{{$contactInfo->phone}}</h3>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item fast-link">--}}
{{--            <h2>Hızlı Menü</h2>--}}
{{--            <div class="links">--}}
{{--                @foreach($fastMenus as $menu)--}}
{{--                        <a @if($menu->page)href="{{$menu->page->slug}}" @endif>{{$menu->name}}</a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item social-medias">--}}
{{--            <figure>--}}
{{--                <img src="{{$setting->footerLogo()}}" alt="{{$setting->site_name}}"--}}
{{--                     style="max-width: 150px;width: 100%;max-height: 100px;">--}}
{{--            </figure>--}}
{{--            <div class="social-media">--}}
{{--                @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->facebook!=NULL)--}}

{{--                        <a href="{{$contactInfo->socialMedia->facebook}}">--}}
{{--                            <img src="{{asset("images/site-ici/facebook.svg")}}"--}}
{{--                                 alt="{{$setting->site_name}} Resmi Facebook Hesabı">--}}
{{--                        </a>--}}

{{--                @endif--}}
{{--                @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->twitter!=NULL)--}}

{{--                        <a href="{{$contactInfo->socialMedia->twitter}}">--}}
{{--                            <img src="{{asset("images/site-ici/twitter-x.svg")}}"--}}
{{--                                 alt="{{$setting->site_name}} Resmi Twitter Hesabı">--}}


{{--                @endif--}}
{{--                @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->instagram!=NULL)--}}

{{--                        <a href="{{$contactInfo->socialMedia->instagram}}">--}}
{{--                            <img src="{{asset("images/site-ici/instagram.svg")}}"--}}
{{--                                 alt="{{$setting->site_name}} Resmi Instagram Hesabı">--}}
{{--                        </a>--}}

{{--                @endif--}}
{{--                @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->linkedin!=NULL)--}}

{{--                        <a href="{{$contactInfo->socialMedia->linkedin}}">--}}
{{--                            <img src="{{asset("images/site-ici/linkedin.svg")}}"--}}
{{--                                 alt="{{$setting->site_name}} Resmi Linkedin Hesabı">--}}
{{--                        </a>--}}

{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--</footer>--}}
{{--<div class="author">--}}
{{--    Copyright © {{now()->year}}. Tüm Hakları Saklıdır.--}}
{{--</div>--}}

@if($setting->footer_code)
    {!! $setting->footer_code !!}
@endif

@yield('extraJs')

{{--        Template JS--}}

{{--        ###Template JS--}}

</body>
</html>

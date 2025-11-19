<footer>
    <div class="footer">
        <div class="max-width first">
            <div class="left item">
                <figure>
                    <img src="{{$setting->footerLogo()}}" width="320" height="auto" alt="{{$setting->site_name}}">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi dolores iste itaque iure
                    quasi reprehenderit sed. Delectus, dicta ex facere fugiat ipsam modi molestiae nesciunt quis
                    saepe
                    temporibus totam.</p>
            </div>
            <div class="right item">

                <div class="spec-bg-stroke contact-title">
                    <h2 class="nochange">İLETİŞİM KUR</h2>
                </div>

                <div class="contact-information">
                    @if($contactInfo && $contactInfo->phone)
                        <a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}">
                            <h3>{{$contactInfo->phone}}</h3>
                        </a>
                    @endif
                    @if($contactInfo && $contactInfo->address)
                        <div>
                            <h3>{{$contactInfo->address}}<br>{{$contactInfo->state}} / {{$contactInfo->city}}</h3>
                        </div>
                    @endif

                    @if($contactInfo && $contactInfo->email)
                        <a href="mailto:{{$contactInfo->email}}" class="contact">
                            <h3>{{$contactInfo->email}}</h3>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="max-width second">
            <div class="spec-bg-stroke social-title">
                <h2 class="nochange">BİZİ TAKİP EDİN</h2>
            </div>

            <div class="social-media">
                {{--            @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->instagram!=NULL)--}}
                <a href="{{$contactInfo->instagram}}" class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/instagram-icon.svg")}}" height="20" width="20"
                         alt="{{$setting->site_name}} İnstagram Hesabı">
                </a>
                {{--            @endif--}}
                {{--            @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->facebook!=NULL)--}}
                <a href="{{$contactInfo->facebook}}" class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/facebook-icon.svg")}}" height="20" width="20"
                         alt="{{$setting->site_name}} Facebook Hesabı">
                </a>
                {{--            @endif--}}
                {{--            @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->youtube!=NULL)--}}
                <a href="{{$contactInfo->youtube}}" class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/youtube-icon.svg")}}" height="20" width="20"
                         alt="{{$setting->site_name}} YouTube Hesabı">
                </a>
                {{--            @endif--}}
                {{--            @if(isset($contactInfo->socialMedia)&&$contactInfo->socialMedia->whatsapp!=NULL)--}}
                <a href="{{$contactInfo->whatsapp}}" class="icon spec-bg-stroke">
                    <img src="{{asset("images/inner/whatsapp-icon.svg")}}" height="20" width="20"
                         alt="{{$setting->site_name}} Whatsapp İletişim">
                </a>
                {{--            @endif--}}
            </div>


        </div>
    </div>
    <div class="author">
        <div class=" max-width">
            <div class="reserved">
                Copyright © {{now()->year}} <b>{{$setting->site_name}}</b>. Tüm Hakları Saklıdır. <a href="kvkk" class="kvkk-link">KVKK</a>
            </div>
            <a href="https://www.tegcdr.com" class="company" title="TEGCDR Kreatif Dijital Ajans">
                <img src="{{asset("images/site/author.svg")}}" alt="TEGCDR Kreatif Dijital Reklam Ajansı Adana">
            </a>
        </div>
    </div>
</footer>


{{--<footer class="content-space main-content">--}}
{{--    <div class="max-width">--}}
{{--        <div class="item contact-informations">--}}
{{--            <h2>İletişim Bilgileri</h2>--}}
{{--<a class="contact">--}}
{{--    <i class="icon las la-home"></i>--}}
{{--    <h3>{{$contactInfo->address}}<br>{{$contactInfo->state}} / {{$contactInfo->city}}</h3>--}}
{{--</a>--}}
{{--            <a href="mailto:{{$contactInfo->email}}" class="contact">--}}
{{--                <i class="icon las la-phone"></i>--}}
{{--                <h3>{{$contactInfo->email}}</h3>--}}
{{--            </a>--}}
{{--<a href="{{route("setVisitedUserCall",['tel:'.$contactInfo->setPhoneLink($contactInfo->phone),'phone'])}}"--}}
{{--   class="contact">--}}
{{--    <i class="icon las la-envelope"></i>--}}
{{--    <h3>{{$contactInfo->phone}}</h3>--}}
{{--</a>--}}
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

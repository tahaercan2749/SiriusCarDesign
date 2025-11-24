<!DOCTYPE html>
<html>
<head>
    @if($setting->head_code)
        {!! $setting->head_code !!}
    @endif
    <meta charset="utf-8">

    <!-- Template Library -->
        @vite(['resources/css/user.scss','resources/js/user.js'])
        <!-- ###Template Library -->

    <link rel="shortcut icon" href="{{$setting->favicon()}}"
          type="image/{{pathinfo($setting->favicon(),PATHINFO_EXTENSION)}}">
    <link rel="icon" href="{{$setting->favicon()}}"
          type="image/{{pathinfo($setting->favicon(),PATHINFO_EXTENSION)}}">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    {{--        Not Found - Open Graph--}}
    @if(request()->routeIs('home'))
        @if($setting->seo_title!=NULL &&$setting->seo_description!=NULL)
            <title>{{$setting->seo_title}} | {{$setting->seo_brand}}</title>
            <meta name="description" content="{{$setting->seo_description}}"/>
            <meta name="author" content="{{env("APP_NAME")}}"/>
            <link rel="canonical" href="{{env("APP_URL")}}"/>

            <meta property="og:title" content="{{$setting->seo_title}} | {{$setting->seo_brand}}"/>
            <meta property="og:description" content="{{$setting->seo_description}}"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="{{env("APP_URL")}}"/>
            <meta property="og:image" content="{{$setting->logo()}}"/>
            <meta property="og:site_name" content="{{env("APP_NAME")}}"/>
            <meta property="og:locale" content="tr_TR"/>

            <!-- Twitter Card Meta Etiketleri -->
            <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="{{$setting->seo_title}} | {{$setting->seo_brand}}"/>
            <meta name="twitter:description" content="{{$setting->seo_description}}"/>
            <meta name="twitter:image" content="{{$setting->logo()}}"/>
            <meta name="twitter:site" content=""/>
            <meta name="twitter:creator" content=""/>

        @endif
    @elseif(request()->routeIs("404"))
        <title>Aradığınız Sayfa Bulunamadı | {{$setting->seo_brand}}</title>
        <meta name="description"
              content="Aradığınız sayfa web sitemizde mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta name="author" content="{{env("APP_NAME")}}"/>
        <link rel="canonical" href="{{env("APP_URL")}}"/>

        <meta property="og:title" content="Aradığınız Sayfa Bulunamadı | {{$setting->seo_brand}}"/>
        <meta property="og:description"
              content="Aradığınız sayfa web sitemizde mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{env("APP_URL")}}"/>
        <meta property="og:image" content="{{$setting->logo()}}"/>
        <meta property="og:site_name" content="{{env("APP_NAME")}}"/>
        <meta property="og:locale" content="tr_TR"/>

        <!-- Twitter Card Meta Etiketleri -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="Aradığınız Sayfa Bulunamadı | {{$setting->seo_brand}}"/>
        <meta name="twitter:description"
              content="Aradığınız sayfa web sitemizde mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta name="twitter:image" content="{{$setting->logo()}}"/>
        <meta name="twitter:site" content=""/>
        <meta name="twitter:creator" content=""/>
    @else
        <title>{{$page->title}} | {{$setting->seo_brand}}</title>
        @if($seo!=NULL)
            @php /* İç sayfaların SEO Eklemeleri */ @endphp
            <title>{{$seo->title}} | {{$setting->seo_brand}}</title>
            <meta name="description" content="{{$seo->description}}"/>
            <meta name="author" content="{{env("APP_NAME")}}"/>
            <link rel="canonical" href="{{env("APP_URL")}}/{{$seo->canonicalPage->slug}}"/>

            @php /* ### OPENGRAPH */ @endphp

            <meta property="og:title" content="{{$seo->title}} | {{$setting->seo_brand}}"/>
            <meta property="og:description" content="{{$seo->description}}"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="{{request()->url()}}"/>
            <meta property="og:image" content="{{$page->image()}}"/>
            <meta property="og:site_name" content="{{env("APP_NAME")}}"/>
            <meta property="og:locale" content="tr_TR"/>

            <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="{{$seo->title}} | {{$setting->seo_brand}}"/>
            <meta name="twitter:description" content="{{$seo->description}}"/>
            <meta name="twitter:image" content="{{$page->image()}}"/>
            <meta name="twitter:site" content=""/>
            <meta name="twitter:creator" content=""/>
            @php /* ### SEO Eklemeleri */ @endphp
        @endif
    @endif

    @yield('extraCss')

</head>

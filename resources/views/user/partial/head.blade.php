<!DOCTYPE html>
<html>
<head>
    @if($setting->head_code)
        {!! $setting->head_code !!}
    @endif

    <meta charset="utf-8">

    @vite(['resources/css/user.scss','resources/js/user.js'])

    <link rel="shortcut icon" href="{{ $setting->favicon() }}"
          type="image/{{ pathinfo($setting->favicon(), PATHINFO_EXTENSION) }}">

    <link rel="icon" href="{{ $setting->favicon() }}"
          type="image/{{ pathinfo($setting->favicon(), PATHINFO_EXTENSION) }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    @if(request()->routeIs('home'))
        @if($setting->seo_title != NULL && $setting->seo_description != NULL)

            <title>{{ $setting->seo_title }} | {{ $setting->seo_brand }}</title>
            <meta name="description" content="{{ $setting->seo_description }}"/>
            <meta name="author" content="{{ env('APP_NAME') }}"/>
            <link rel="canonical" href="{{ env('APP_URL') }}"/>

            <meta property="og:title" content="{{ $setting->seo_title }} | {{ $setting->seo_brand }}"/>
            <meta property="og:description" content="{{ $setting->seo_description }}"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="{{ env('APP_URL') }}"/>
            <meta property="og:image" content="{{ $setting->logo() }}"/>
            <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
            <meta property="og:locale" content="tr_TR"/>

            <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="{{ $setting->seo_title }} | {{ $setting->seo_brand }}"/>
            <meta name="twitter:description" content="{{ $setting->seo_description }}"/>
            <meta name="twitter:image" content="{{ $setting->logo() }}"/>
            <meta name="twitter:site" content=""/>
            <meta name="twitter:creator" content=""/>

        @endif

    @elseif(request()->routeIs('404'))

        <title>Aradığınız Sayfa Bulunamadı | {{ $setting->seo_brand }}</title>
        <meta name="description" content="Aradığınız sayfa mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta name="author" content="{{ env('APP_NAME') }}"/>
        <link rel="canonical" href="{{ env('APP_URL') }}"/>

        <meta property="og:title" content="Aradığınız Sayfa Bulunamadı | {{ $setting->seo_brand }}"/>
        <meta property="og:description" content="Aradığınız sayfa mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{ env('APP_URL') }}"/>
        <meta property="og:image" content="{{ $setting->logo() }}"/>
        <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
        <meta property="og:locale" content="tr_TR"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="Aradığınız Sayfa Bulunamadı | {{ $setting->seo_brand }}"/>
        <meta name="twitter:description" content="Aradığınız sayfa mevcut değil. Linki kontrol edip tekrar deneyebilirsiniz"/>
        <meta name="twitter:image" content="{{ $setting->logo() }}"/>
        <meta name="twitter:site" content=""/>
        <meta name="twitter:creator" content=""/>

    @else

        <title>{{ $page->title }} | {{ $setting->seo_brand }}</title>

        @if($seo != NULL)
            <title>{{ $seo->title }} | {{ $setting->seo_brand }}</title>
            <meta name="description" content="{{ $seo->description }}"/>
            <meta name="author" content="{{ env('APP_NAME') }}"/>
            <link rel="canonical" href="{{ env('APP_URL') }}/{{ $seo->canonicalPage->slug }}"/>

            <meta property="og:title" content="{{ $seo->title }} | {{ $setting->seo_brand }}"/>
            <meta property="og:description" content="{{ $seo->description }}"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="{{ request()->url() }}"/>
            <meta property="og:image" content="{{ $page->image() }}"/>
            <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
            <meta property="og:locale" content="tr_TR"/>

            <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="{{ $seo->title }} | {{ $setting->seo_brand }}"/>
            <meta name="twitter:description" content="{{ $seo->description }}"/>
            <meta name="twitter:image" content="{{ $page->image() }}"/>
            <meta name="twitter:site" content=""/>
            <meta name="twitter:creator" content=""/>
        @endif

    @endif


    @yield('extraCss')

        @php
            // Hizmetleri dinamik olarak hazırla
            $offers = [];
            if (isset($hizmetler)) {

                foreach ($hizmetler->children as $hizmet) {
                    $offers[] = [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => $hizmet->name,
                            "description" => strip_tags($hizmet->note ?? '')
                        ]
                    ];
                }
            }

            $organizationSchema = [
                "@context" => "https://schema.org",
                "@type" => "AutoBodyShop",
                "@id" => route('home') . "#organization",
                "name" => $setting->site_name,
                "image" => $setting->logo(),
                "logo" => $setting->logo(),
                "url" => route('home'),
                "email" => $contactInfo->email,
                "telephone" => "+90" . ltrim($contactInfo->phone, '0'),
                "priceRange" => "₺₺",
                "description" => $setting->seo_description,
                "address" => [
                    "@type" => "PostalAddress",
                    "streetAddress" => $contactInfo->address,
                    "addressLocality" => $contactInfo->city,
                    "addressRegion" => $contactInfo->state,
                    "postalCode" => "01170",
                    "addressCountry" => "TR"
                ],
                // Koordinatları Google Maps üzerinden teyit edip buraya sabit yazmanız en iyisidir
                "geo" => [
                    "@type" => "GeoCoordinates",
                    "latitude" => "37.034636",
                    "longitude" => "35.289985"
                ],
                "sameAs" => [
                    "https://www.instagram.com/siriuscardesign",
                    route('home')
                ],
                "openingHoursSpecification" => [
                    [
                        "@type" => "OpeningHoursSpecification",
                        "dayOfWeek" => ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
                        "opens" => "09:00",
                        "closes" => "19:00"
                    ]
                ],
                // Hizmetleriniz (Dinamik olarak yukarıda oluşturuldu)
                "makesOffer" => $offers
            ];
        @endphp

        <script type="application/ld+json">
            {!! json_encode($organizationSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>

</head>

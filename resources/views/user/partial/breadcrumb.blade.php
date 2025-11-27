<div class="breadcrumb">
    <div class="max-width">
        <a href="{{env("APP_URL")}}">Anasayfa <i class="ri-arrow-drop-right-fill"></i></a>
        @foreach($page->parentCategory->breadcrumbs() as $breadcrumb)
            @if($breadcrumb->name)
                @if($breadcrumb->page?->id != $page->id)

                    <a @if($breadcrumb->page != NULL) href="{{$breadcrumb->page->slug}}" @endif>
                        {{$breadcrumb->name}} <i class="ri-arrow-drop-right-fill"></i>
                    </a>
                @endif
            @else
                @if($breadcrumb->id != $page->id)
                    <a href="{{$breadcrumb->slug}}">{{$breadcrumb->title}} <i class="ri-arrow-drop-right-fill"></i></a>
                @endif
            @endif
        @endforeach
        <a class="title">{{$page->title}}</a>
    </div>
</div>
@php
    $breadcrumbList = [];
    $position = 1;

    // 1. Adım: Anasayfa (Sabit)
    $breadcrumbList[] = [
        "@type" => "ListItem",
        "position" => $position++,
        "name" => "Anasayfa",
        "item" => url('/')
    ];

    if (isset($page) && $page->parentCategory) {
        foreach ($page->parentCategory->breadcrumbs() as $breadcrumb) {
            $name = null;
            $url = null;

            if (!empty($breadcrumb->name)) {
                // Eğer kategorinin sayfası şu anki sayfa değilse (veya sayfası yoksa)
                if (optional($breadcrumb->page)->id != $page->id) {
                    $name = $breadcrumb->name;
                    $url = $breadcrumb->page ? url($breadcrumb->page->slug) : null;
                }
            }
            else {
                // Eğer bu breadcrumb sayfası şu anki sayfa değilse
                if ($breadcrumb->id != $page->id) {
                    $name = $breadcrumb->title;
                    $url = url($breadcrumb->slug);
                }
            }

            if ($name) {
                $listItem = [
                    "@type" => "ListItem",
                    "position" => $position++,
                    "name" => $name
                ];

                if ($url) {
                    $listItem["item"] = $url;
                }

                $breadcrumbList[] = $listItem;
            }
        }
    }

    if (isset($page)) {
        $breadcrumbList[] = [
            "@type" => "ListItem",
            "position" => $position++,
            "name" => $page->title,
            "item" => url()->current()
        ];
    }

    $breadcrumbSchema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $breadcrumbList
    ];
@endphp

<script type="application/ld+json">
    {!! json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>



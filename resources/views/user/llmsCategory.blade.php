@php
$prefix = str_repeat('#', $level); // #, ##, ### gibi başlıklar
@endphp
{{-- Kategorinin kendi sayfası varsa --}}
@if ($category->page)
{!! $prefix !!} {{ $category->name }}
[{{ $category->name }}]({{ url($category->page?->slug) }}): {{ $category->page?->seo?->description }}

@endif
{{-- Alt kategoriler --}}
@if ($category->children && $category->children->count())
@foreach ($category->children as $child)
@include('user.llmsCategory', ['category' => $child, 'level' => $level + 1])
@endforeach
@endif
{{-- Alt sayfalar --}}
@if ($category->pages && $category->pages->count())
@foreach ($category->pages as $page)
@include('user.llmsPage', ['page' => $page, 'level' => $level + 1])
@endforeach
@endif

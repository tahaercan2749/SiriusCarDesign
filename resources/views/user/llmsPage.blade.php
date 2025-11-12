@php
$prefix = str_repeat('#', $level);
@endphp
{!! $prefix !!} {{ $page->title }}
[{{ $page->title }}]({{ url($page->slug) }}): {{ $page->seo?->description }}
@if ($page->subPages && $page->subPages->count())
@foreach ($page->subPages as $child)
@include('user.llmsPage', ['page' => $child, 'level' => $level + 1])

@endforeach
@endif

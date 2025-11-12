@include('user.partial.head')
@include('user.partial.header')

@if(!request()->routeIs('home'))
    @include('user.partial.breadcrumb')
@endif

@yield('content')
@include('user.partial.footer')

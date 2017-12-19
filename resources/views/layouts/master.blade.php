<!doctype html>
<html lang="en">
@include('partials.head')

<body>

<div id="app" class="wrapper">

    @include('partials.nav')

@yield('content')

</div>

@include('partials.footer')

@include('partials.scripts')

@yield('scripts')


</body>
</html>

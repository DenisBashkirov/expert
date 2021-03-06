<!doctype html>
<html>
<head>
    <meta lang="ru">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $meta['description'] ?? '' }}">
    <title>{{ $meta['title'] ?? '' }}</title>

    @include('frontend.sources.favicons')
    @include('frontend.sources.styles')
    @include('frontend.sources.services')

</head>

<body>

    @include('frontend.sections.header')
    @yield('content')
    @include('frontend.sections.footer')

    @if(env('APP_ENV') == 'production')
        @include('frontend.sources.services')
    @endif

@include('frontend.sources.scripts')

</body>
</html>

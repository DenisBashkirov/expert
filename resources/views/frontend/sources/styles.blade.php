<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('fonts/icons/style.css') }}">

@if(env('APP_ENV') == 'production')
    <link rel="stylesheet" href="{{ asset('css/frontend.min.css?'. microtime(true)) }}">
@else
    <link rel="stylesheet" href="{{ asset('css/frontend.css?'. microtime(true)) }}">
@endif

{{--
<link rel="stylesheet" href="{{ asset('libs/aos/aos.css')  }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
--}}

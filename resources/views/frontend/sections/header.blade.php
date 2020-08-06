<header class="header container-fluid absolute top-0 flex flex-center xl:h-16 xs-sm:py-2 md-lg:py-3 color-white z-5">

    <div class="container header__container flex flex-row flex-center justify-between">

        <div class="header__logo xs-sm:h-6 md-lg:h-10 xl:h-12 z-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logos/header-xl@2.png') }}" alt="ООО Эксперт - логотип">
            </a>
        </div>

        <div class="header__nav xs-lg:hidden xs-lg:absolute xs-sm:h-screen xs-sm:w-screen xs-sm:top-0 xs-sm:left-0 js-mobile_nav">
            @component('frontend.components.nav.nav')
            @endcomponent
        </div>

        <a class="header__phone xs-lg:hidden xl:text-xl hover-underline calltracking" href="tel:{{ $company['phone_href'] }}">{{ $company['phone'] }}</a>

        <div class="header__callback xs-lg:hidden xl:text-xs" onclick="jivo_api.open({start : 'call'});">
            @component('frontend.components.button.button')
                Заказать звонок
            @endcomponent
        </div>

        <div class="header__hamburger xl:hidden">
            <button class="hamburger hamburger--spin js-hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>

    </div>



</header>

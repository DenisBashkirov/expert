<nav class="nav xs-sm:h-min-full xs-sm:flex xs-sm:flex-col xs-sm:flex-start xs-sm:sy-5 xs-sm:px-4 xs-sm:pt-16 xl:sx-6 xs-sm:bg-radial-dark">

    @component('frontend.components.nav.nav__item', [
        'link'=>route('home'),
        'text'=>'Главная'
    ])
    @endcomponent

    @component('frontend.components.nav.nav__item', [
        'link'=>route('services', ['category'=>\Illuminate\Support\Str::slug('Экспертизы')]),
        'text'=>'Экспертизы'
    ])
    @endcomponent

    @component('frontend.components.nav.nav__item', [
        'link'=>route('services', ['category'=>\Illuminate\Support\Str::slug('Оценка')]),
        'text'=>'Оценка'
    ])
    @endcomponent

    @component('frontend.components.nav.nav__item', [
        'link'=>route('service', ['service'=>\Illuminate\Support\Str::slug('Рецензирование')]),
        'text'=>'Рецензирование'
    ])
    @endcomponent

    @component('frontend.components.nav.nav__item', [
        'link'=>route('contacts'),
        'text'=>'Контакты'
    ])
    @endcomponent

</nav>

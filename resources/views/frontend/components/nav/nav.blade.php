<nav class="nav xl:sx-6">

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

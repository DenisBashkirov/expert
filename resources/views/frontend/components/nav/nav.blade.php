<nav class="nav xs-sm:h-min-full xs-sm:flex xs-sm:flex-col xs-sm:flex-start xs-sm:sy-5 xs-sm:px-4 xs-sm:pt-16 xl:sx-6 xs-sm:bg-radial-dark">

    @component('frontend.components.nav.nav__item', [
        'link'=>route('home'),
        'text'=>'Главная'
    ])
    @endcomponent

    <span class="js-nav-dropdown-show">
        @component('frontend.components.nav.nav__item', [
            'link'=>route('services', ['category'=>\Illuminate\Support\Str::slug('Экспертизы')]),
            'text'=>'Экспертизы'
        ])
        @endcomponent
        <div class="nav__dropdown hidden absolute left-0 ml--4">
            <div class="nav__dropdown-wrapper px-4 py-4 bg-radial-dark b-radius-10">
                <div class="flex flex-row flex-nowrap sx-4">
                <ul class="flex flex-col sy-2 list-none">
                @for ($i = 0; $i < 15; $i++)
                        <li><a class="hover-underline white-space-nowrap" href="{{ route('service', ['service'=>\Illuminate\Support\Str::slug($services_list['expertize'][$i]->name)]) }}">{{ $services_list['expertize'][$i]->name }}</a></li>
                    @endfor
            </ul>
            <ul class="flex flex-col sy-2 list-none">
                @for ($i = 15; $i < count($services_list['expertize']); $i++)
                    <li><a class="hover-underline white-space-nowrap" href="{{ route('service', ['service'=>\Illuminate\Support\Str::slug($services_list['expertize'][$i]->name)]) }}">{{ $services_list['expertize'][$i]->name }}</a></li>
                @endfor
            </ul>
            </div>
            </div>
        </div>
    </span>

    <span class="js-nav-dropdown-show">
        @component('frontend.components.nav.nav__item', [
            'link'=>route('services', ['category'=>\Illuminate\Support\Str::slug('Оценка')]),
            'text'=>'Оценка'
        ])
        @endcomponent
        <div class="nav__dropdown hidden absolute left-0 ml--4">
            <div class="nav__dropdown-wrapper px-4 py-4 bg-radial-dark b-radius-10">
                <div class="flex flex-row flex-nowrap sx-4">
                <ul class="flex flex-col sy-2 list-none">
                    @foreach($services_list['appraisal'] as $service)
                        <a class="hover-underline white-space-nowrap" href="{{ route('service', ['service'=>\Illuminate\Support\Str::slug($service->name)]) }}">{{ $service->name }}</a>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </span>

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

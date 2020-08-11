<section class="title-screen xl:h-screen flex flex-center bg-radial-dark color-white xs-sm:py-16 md-lg:py-24 xl:pt-16">

    <div class="overlay bg-radial-dark z--1"></div>

    <div class="container xl:h-full xl:flex xl:flex-col xl:justify-around">

        <div class="md-xl:grid md-xl:grid-flow-col md-xl: md-xl:justify-between">

            <div class="flex flex-col-reverse md-xl:justify-center">

                <div class="flex flex-col-reverse xl:w-144">
                    <h1 class="xs-sm:mt-2 md-xl:mt-2 xs-sm:text-2xl md:text-3xl lg:text-3xl xl:text-5xl lh-130 font-oranienbaumm">{{ $meta['h1'] }}</h1>
                    <p class="xs-sm:mt-8 xs-sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl color-golden-90 font-light">Профессиональная</p>
                </div>

                <div class="md-xl:text-2xl md-xl:mb-8">Судебно-экспертное учреждение "Эксперт"</div>

            </div>

            <div class="xs-sm:h-48 lg:h-56 xl:h-80 xs-sm:mt-3 xs-sm:text-center">
                <img src="{{ asset('img/logos/title.png') }}" alt="">
            </div>

        </div>

        <div class="md-lg:grid xl:flex md-lg:grid-cols-3 md-lg:col-gap-def xl:sx-4">

            @component('frontend.components.hero-feature-item.hero-feature-item', [
                'headline'=>'Гарантия результата',
                'icon'=>'gavel',
                'text'=>'Суд обязательно примет результат экспертизы'
            ])
            @endcomponent

            @component('frontend.components.hero-feature-item.hero-feature-item', [
                'headline'=>'Нас рекомендуют',
                'icon'=>'handshake',
                'text'=>'Арбитражные суды и суды общей юрисдикции'
            ])
            @endcomponent

            @component('frontend.components.hero-feature-item.hero-feature-item', [
                'headline'=>'Огромный опыт',
                'icon'=>'pack-of-paper',
                'text'=>'С 2008 года провели более 10&nbsp;000 экспертиз'
            ])
            @endcomponent

        </div>

    </div>

</section>

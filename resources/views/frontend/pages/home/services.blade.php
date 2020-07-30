<section class="services container xs-sm:mt-20 md-lg:mt-24 xl:mt-24">

    <div class="text-center">
        @component('frontend.components.headers.h2')
            Услуги
        @endcomponent
    </div>

    <div class="xs-sm:mt-8 md:mt-12 lg-xl:mt-16 xs-sm:sy-10 md-xl:sy-3">

        <h3 class="font-oranienbaumm xs:text-xl sm:text-2xl md-lg:text-4xl xl:text-5xl">Популярные виды экспертиз</h3>

        <div>

            @component('frontend.components.serivces-list.services-list', [
                'services'=> $services['expertize']
            ])
            @endcomponent

            <div class="mx-auto xs-lg:mt-6 xl:mt-10 text-center">
                <a class="no-underline inline-flex" href="{{ route('services', ['category'=>\Illuminate\Support\Str::slug('Экспертизы')]) }}">
                    @component('frontend.components.button.button')
                        Все виды экспертиз
                    @endcomponent
                </a>
            </div>

        </div>

    </div>

    <div class="xs-sm:mt-8 md:mt-12 lg-xl:mt-16 xs-sm:sy-10 md-xl:sy-3">

        <h3 class="font-oranienbaumm xs:text-xl sm:text-2xl md-lg:text-4xl xl:text-5xl ">Оценка и рецензирование</h3>

        @component('frontend.components.serivces-list.services-list', [
            'services'=> $services['appraisal'],
            'grid_cols'=>4
        ])
        @endcomponent

    </div>

    <div class="xs-sm:mt-8 md-lg:mt-8 xl:mt-10">

        @component('frontend.components.serivces-list.services-list', [
            'services'=> $services['reviewing']
        ])
        @endcomponent

    </div>

</section>

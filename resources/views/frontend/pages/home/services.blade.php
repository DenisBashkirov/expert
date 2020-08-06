<section class="services container xs-sm:mt-20 md-lg:mt-24 xl:mt-24">

    <div class="text-center">
        @component('frontend.components.headers.h2')
            Услуги
        @endcomponent
    </div>

    <div class="xs-sm:mt-8 md:mt-12 lg-xl:mt-16 xs-sm:sy-10 md-xl:sy-3">

        <h3 class="font-oranienbaumm xs:text-xl sm:text-2xl md-lg:text-4xl xl:text-5xl">Востребованные виды экспертиз</h3>

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
            'services'=> $services['appraisal']
        ])
        @endcomponent

    </div>

    <div class="xs-sm:mt-8 md-lg:mt-8 xl:mt-10">

        @component('frontend.components.serivces-list.services-list', [
            'services'=> $services['reviewing']
        ])
        @endcomponent

    </div>

    <div class="services-dropdown xs-sm:mt-8 md-lg:mt-8 xl:mt-10 b-radius-10 overflow-hidden">
        <div>
            <h3 class="service-dropdown__category-headline xl:p-6 text-4xl b-bottom-grey-20 bg-white">Экспертизы</h3>
            <div class="services-dropdown__category-items px-4 pb-8 bg-white-90">

                <div class="md-xl:grid grid-cols-3 md:col-gap-4 lg:col-gap-4 xl:col-gap-4 md-xl:row-gap-3">

                    @foreach($services['expertize'] as $service)
                        @component('frontend.components.service-card.service-card', ['icon'=>$service['icon'], 'title'=>$service['name']])
                        @endcomponent
                    @endforeach

                </div>

            </div>
        </div>
    </div>

</section>

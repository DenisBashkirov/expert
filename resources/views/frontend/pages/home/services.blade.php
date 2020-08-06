<section class="services container xs-sm:mt-20 md-lg:mt-24 xl:mt-24">

    <div class="text-center">
        @component('frontend.components.headers.h2')
            Услуги
        @endcomponent
    </div>

    <div class="services-dropdown xs-sm:mt-8 md-lg:mt-8 xl:mt-10 b-radius-10 shadow overflow-hidden">

        @foreach($service_categories as $category)

            <div>
                <h3 class="service-dropdown__category-headline xs-sm:p-4 md-xl:p-6 xs:text-xl sm:text-2xl md-xl:text-4xl b-bottom-grey-20 bg-white js-dropdown-toggle cursor-pointer">{{ $category->name }}</h3>
                <div class="services-dropdown__category-items hidden xs-sm:px-2 md-xl:px-4 pb-8 bg-white-90 b-bottom-grey-30">

                    <div class="md-xl:grid grid-cols-3 md:col-gap-4 lg:col-gap-4 xl:col-gap-4 md-xl:row-gap-3">

                        @foreach($category->services as $service)
                            @component('frontend.components.service-card.service-card', ['icon'=>$service['icon'], 'title'=>$service['name']])
                            @endcomponent
                        @endforeach

                    </div>

                </div>
            </div>

        @endforeach

    </div>

</section>

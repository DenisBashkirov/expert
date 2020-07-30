<section class="clients xs-sm:my-20 md-lg:my-24 xl:my-32">

    <div class="container">
        <div class="text-center">
            @component('frontend.components.headers.h2')
                Наши клиенты
            @endcomponent
        </div>
    </div>

    <div class="xs-sm:container-fluid md-xl:container">

        <div class="clients-swiper swiper-container">

            <div class="clients-swiper__wrapper swiper-wrapper md-xl:flex md-xl:flex-row md-xl:flex-wrap md-xl:flex-center md-xl:justify-between md-lg:xs-4 xl:sx-10 xs-lg:mt-6 xl:mt-10">

                @component('frontend.components.client-logo.client-logo', ['img'=>'agrokompleks'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'magnit'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'volkswagen'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'mvideo'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'sberbank'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'vtb-strahovanie'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'uralsib-bank'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'rosgosstrah'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'uralsib-strahovanie'])
                @endcomponent

            </div>

        </div>

    </div>

</section>

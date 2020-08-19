<section class="clients xs-sm:my-20 md-lg:my-24 xl:my-32">

    <div class="container">
        <div class="text-center">
            @component('frontend.components.headers.h2')
                Наши заказчики
            @endcomponent
        </div>
    </div>

    <div class="xs-sm:container-fluid md-xl:container">

        <div class="clients-swiper swiper-container">

            <div class="clients-swiper__wrapper swiper-wrapper xs-lg:mt-6 xl:mt-10">

                @component('frontend.components.client-logo.client-logo', ['img'=>'agrokompleks.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'lukoil.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'pochta_rossii.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'fns.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'leroy_merlin.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'ikea.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'gazprom.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'hyundai.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'kia_motors.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'jaguar.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'magnit.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'volkswagen.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'mvideo.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'sberbank.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'uralsib-bank.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'rosgosstrah.png'])
                @endcomponent

                @component('frontend.components.client-logo.client-logo', ['img'=>'baucenter.png'])
                @endcomponent

            </div>

        </div>

        <div class="clients-swiper-navigation-prev swiper-button-prev color-black-90"></div>
        <div class="clients-swiper-navigation-next swiper-button-next color-black-90"></div>

    </div>

</section>

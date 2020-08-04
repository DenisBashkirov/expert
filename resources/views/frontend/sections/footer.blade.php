<footer class="footer xs-lg:py-16 xl:py-20 bg-radial-dark op-95 color-white">
    <div class="container footer__container">

        <div class="footer__nav xs-lg:hidden xl:flex xl:flex-row xl:justify-between xl:sx-8">

            <div class="footer__nav-col flex flex-col sy-3">

                @for($i = 0; $i < 10; $i++)
                    @component('frontend.components.footer.footer__nav-item', ['text'=>$services_list['expertize'][$i]->name])
                    @endcomponent
                @endfor

            </div>

            <div class="footer__nav-col flex flex-col sy-3">

                @for($i = 10; $i < 20; $i++)
                    @component('frontend.components.footer.footer__nav-item', ['text'=>$services_list['expertize'][$i]->name])
                    @endcomponent
                @endfor

            </div>

            <div class="footer__nav-col flex flex-col sy-3">

                @for($i = 20; $i < 27; $i++)
                    @component('frontend.components.footer.footer__nav-item', ['text'=>$services_list['expertize'][$i]->name])
                    @endcomponent
                @endfor

            </div>

            <div class="footer__nav-col flex flex-col sy-3">

                @for($i = 0; $i < 3; $i++)
                    @component('frontend.components.footer.footer__nav-item', ['text'=>$services_list['appraisal'][$i]->name])
                    @endcomponent
                @endfor

                @for($i = 0; $i < 1; $i++)
                    @component('frontend.components.footer.footer__nav-item', ['text'=>$services_list['reviewing'][$i]->name])
                    @endcomponent
                @endfor

            </div>

        </div>

        <div class="flex xs-sm:flex-col md-xl:flex-row md-lg:flex-wrap md-xl:justify-between xl:flex-start xs-sm:sy-10 xs-lg:text-lg xl:mt-20 font-light">

            <div class="footer__company-name">
                <p>ООО “Эксперт”</p>
                <p>экспертное учреждение в Краснодаре</p>
            </div>

            <div>
                <div class="footer__phone text-2xl font-medium">
                    <a class="no-underline" href="tel:{{ $company['phone_href'] }}">{{ $company['phone'] }}</a>
                </div>
                <div class="footer__schedule">
                    <p>пн-пт: 9<sup>00</sup>-18<sup>00</sup></p>
                </div>
            </div>

            <address class="footer__addrress flex flex-col md-lg:mt-10 sy-2">
                <p>{{ $company['address'] }}</p>
                <a class="hover-underline" href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a>
            </address>

        </div>

    </div>
</footer>

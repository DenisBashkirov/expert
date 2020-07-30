<a class="service-card flex flex-center justify-center xs-sm:mx-auto xs-sm:h-24 md:h-24 lg:h-32 xl:h-32 xs-sm:px-6 md:px-4 lg:px-5 xl:px-4 xs-sm:mt-10 md-xl:mt-12 cursor-pointer no-underline" href="{{ route('service', ['service'=>\Illuminate\Support\Str::slug($title)]) }}">

    <img class="service-card__icon absolute" src="{{ asset('img/services/icons/' . $icon . '.png') }}">

    <p class="service-card__title xs-lg:w-full xl:w-72 xs-sm:text-base md:text-sm lg:text-lg xl:text-xl">{!! $title !!}</p>

</a>

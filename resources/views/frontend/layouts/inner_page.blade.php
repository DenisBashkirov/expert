@extends('frontend.layouts.main')

@section('content')

    <section class="title-screen flex flex-center bg-radial-dark color-white xs-sm:h-52 md-lg:h-68 xl:h-100">

        <div class="overlay bg-radial-dark z--1"></div>

        <div class="container">

            <div class="md-xl:flex md-xl:flex-row md-xl:flex-center">

                <div class="flex flex-col-reverse">

                    <h1 class="xs-sm:mt-2 md-xl:mt-2 xs-sm:text-2xl md:text-3xl lg:text-3xl xl:text-5xl lh-130 font-oranienbaumm">{{ $meta['h1'] }}</h1>

                    <div class="breadcrumbs flex flex-row flex-center flex-wrap sx-3 md-xl:text-lg font-extralight z-2">
                        <a class="breadcrumbs__item hover-underline" href="{{ route('home') }}">Главная</a>
                        @if(isset($service))
                            <i class="breadcrumbs__arrow icon-breadcrumb-arrow mt-1 text-70"></i>
                            <a class="breadcrumbs__item hover-underline" href="{{ route('services', ['category'=>$service->category->slug]) }}">{{ $service->category->name }}</a>
                            <i class="breadcrumbs__arrow icon-breadcrumb-arrow mt-1 text-70"></i>
                            <span class="breadcrumbs__item">{{ $service->name }}</span>
                        @endif
                        @if(isset($service_category))
                            <i class="breadcrumbs__arrow icon-breadcrumb-arrow mt-1 text-70"></i>
                            <span class="breadcrumbs__item">{{ $service_category->name }}</span>
                        @endif
                    </div>

                </div>

                @if(isset($service))
                    <img class="xs-sm:hidden" src="{{ asset('img/services/icons/' . $service->icon . '.png') }}" alt="{{ $service->name }}">
                @endif

            </div>

        </div>

    </section>


    @yield('page_content')

@endsection

@extends('frontend.layouts.inner_page')

@section('page_content')

    <div class="container xs-lg:mt-8 xl:mt-16">

        <article class="article mx-auto">

            @include('frontend.pages.service.' . $service->slug)

        </article>

    </div>

    @include('frontend.sections.consult')

    <div class="xs-lg:mt-20 xl:mt-36">
        @include('frontend.sections.experts')
    </div>

@endsection

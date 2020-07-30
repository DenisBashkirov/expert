@extends('frontend.layouts.inner_page')

@section('page_content')

    <div class="container xs-lg:my-20 xl:my-28">

        @component('frontend.components.serivces-list.services-list', [
                'services'=> $services
            ])
        @endcomponent

    </div>

@endsection

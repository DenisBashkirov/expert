@extends('frontend.layouts.inner_page')

@section('page_content')

    <div class="container">

        <div class="my-20 shadow color-white bg-radial-dark b-radius-10 overflow-hidden">

            <div class="xl:grid xl:grid-cols-3 xl:justify-items-center px-4 xl:py-20 font-light">

                <div class="inline-flex flex-col xl:sy-10">
                    <div onclick="jivo_api.open({start : 'call'});">
                        @component('frontend.components.button.button')
                            Заказать звонок
                        @endcomponent
                    </div>
                    <div onclick="jivo_api.open();">
                        @component('frontend.components.button.button')
                            Задать вопрос
                        @endcomponent
                    </div>
                </div>

                <div class="sy-4 lh-120">
                    <address class="flex flex-col sy-2"><b>Экспедиционный отдел</b> {{ $company['address'] }}6</address>
                    <address class="flex flex-col sy-2"><b>Юридический адрес</b> {{ $company['address_legal'] }}</address>
                    <p><b>Телефон</b></p>
                    @foreach($company['phones'] as $i)
                        <p><a class="hover-underline" href="tel:{{ $i['phone_href'] }}">{{ $i['phone'] }}</a></p>
                    @endforeach
                    <p><b>Email:</b> <a class="hover-underline" href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a></p>
                </div>

                <div class="sy-4 lh-120">
                    <p>Общество с ограниченной ответственностью "Эксперт"</p>
                    <p>ИНН: 2308150919</p>
                    <p>ОГРН: 1082308012071</p>
                </div>

            </div>


            <div class="xl:h-120" id="ymap">

            </div>


        </div>

    </div>

    @include('frontend.sources.ymap')

@endsection

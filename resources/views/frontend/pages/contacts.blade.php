@extends('frontend.layouts.inner_page')

@section('page_content')

    <div class="container">

        <div class="my-20 shadow color-white bg-radial-dark b-radius-10 overflow-hidden">

            <div class="xl:grid xl:grid-cols-3 xl:justify-items-center px-4 xl:py-20 font-light">

                <div class="inline-flex flex-col xl:sy-10">
                    <div>
                        @component('frontend.components.button.button')
                            Заказать звонок
                        @endcomponent
                    </div>
                    <div>
                        @component('frontend.components.button.button')
                            Задать вопрос
                        @endcomponent
                    </div>
                </div>

                <div class="sy-4 lh-120">
                    <address class="flex flex-col sy-2"><b>Факт. адрес:</b> г. Краснодар, ул. Степана Разина, 72, оф. 206</address>
                    <address class="flex flex-col sy-2"><b>Юр. адрес:</b> г. Краснодар, ул. Калинина, 350/7</address>
                    <p><b>Телефон:</b> <a class="hover-underline" href="tel:88612139999">8 (861) 999 99 99</a></p>
                    <p><b>Email:</b> <a class="hover-underline" href="mailto:expert@roseksp.ru">expert@roseksp.ru</a></p>
                </div>

                <div class="sy-4 lh-120">
                    <p>Общество с ограниченной ответственностью "Эксперт"</p>
                    <p>ИНН: </p>
                </div>

            </div>


            <div class="xl:h-120" id="ymap">

            </div>


        </div>

    </div>

    @include('frontend.sources.ymap')

@endsection

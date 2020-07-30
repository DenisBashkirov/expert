<div class="md-xl:grid grid-cols-{{ isset($grid_cols) ? $grid_cols : '3' }} md:col-gap-6 lg:col-gap-6 xl:col-gap-def md-xl:row-gap-3">

    @foreach($services as $service)
        @component('frontend.components.service-card.service-card', ['icon'=>$service['icon'], 'title'=>$service['name']])
        @endcomponent
    @endforeach

</div>

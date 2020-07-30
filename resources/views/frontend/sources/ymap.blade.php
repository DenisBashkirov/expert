<script src="https://api-maps.yandex.ru/2.1/?apikey=4146fe29-065b-4679-9ffb-090942cbc21e&lang=ru_RU"></script>
<script>
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("ymap", {
            center: [45.019576, 39.024702],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        });

        myMap.geoObjects.add(new ymaps.Placemark([45.019576, 39.024702], {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('drag');
        //ymapProduction.behaviors.disable('drag');
    }
</script>

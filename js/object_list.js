ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [56.496465, 84.967756],
            zoom: 17,
			controls: ['zoomControl']
        }, {
            //searchControlProvider: 'yandex#search'
        }),
		
        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),
		

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Яковлева 15',
            balloonContent: 'Яковлева 15'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/map-point-current.png',
            // Размеры метки.
            iconImageSize: [40, 60],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-20, -50]
        }),

        myPlacemarkWithContent = new ymaps.Placemark([56.496465, 84.967756], {
            hintContent: 'Собственный значок метки с контентом',
            balloonContent: 'А эта — новогодняя',
            iconContent: '12'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'images/map-point-current.png',
            // Размеры метки.
            iconImageSize: [48, 48],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-24, -24],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects
        .add(myPlacemark)
        //.add(myPlacemarkWithContent);
		 myMap.behaviors.disable('scrollZoom');
		   if ($(window).width() < 767) {
			 myMap.behaviors.disable('drag');
		  }
		
		 //myMap.behaviors.disable('multiTouch');
});
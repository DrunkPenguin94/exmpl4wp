jQuery(document).ready(function(){

    jQuery('[href="#callback"]').fancybox({
        wrapCSS : 'someClass' });

    jQuery("input[name='your-tel']").mask("+7-999-99-99-999");
	
	if(jQuery('#map-yandex').length>0){
		ymaps.ready(function () {
			var myMap = new ymaps.Map('map-yandex', {
					//center: [55.751574, 37.573856],
					center: [jQuery("#coordinates").attr("latitude"), jQuery("#coordinates").attr("longitude")],
					zoom: 17,
					controls: ['smallMapDefaultSet']
				}, {
					searchControlProvider: 'yandex#search'
				}),


				myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
					hintContent: 'Собственный значок метки',
					balloonContent: 'Это красивая метка'
				}, {
					// Опции.
					// Необходимо указать данный тип макета.
					iconLayout: 'default#image',
					// Своё изображение иконки метки.
					iconImageHref: '/wp-content/themes/bootstrap-basic/img/map.png',
					// Размеры метки.
					iconImageSize: [30, 42],
					// Смещение левого верхнего угла иконки относительно
					// её "ножки" (точки привязки).
					iconImageOffset: [-5, -38]
				});



			myMap.geoObjects
				.add(myPlacemark);
		});
	}

    var show = true;
    var countbox = ".block-timer";
    if(jQuery(countbox).length>0){
        jQuery(window).on("scroll load resize", function(){

            if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена

            var w_top = jQuery(window).scrollTop();        // Количество пикселей на которое была прокручена страница
            var e_top = jQuery(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа

            var w_height = jQuery(window).height();        // Высота окна браузера
            var d_height = jQuery(document).height();      // Высота всего документа

            var e_height = jQuery(countbox).outerHeight(); // Полная высота блока со счетчиками

            if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
                jQuery(".block-timer .number").spincrement({
                    thousandSeparator: "",
                    duration: 3000
                });

                show = false;
            }
        });
    }

    init_test();


    jQuery('#slaider').owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:0, //Отступ от элемента справа в 50px
        nav:false, //Отключение навигации
        autoplay:true, //Автозапуск слайдера
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:8000, //Время смены слайда
        items:1

    });

    jQuery('#reviews').owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:0, //Отступ от элемента справа в 50px
        nav:true, //Отключение навигации
        autoplay:true, //Автозапуск слайдера
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:8000, //Время смены слайда
        navText: ["<img alt='arrow_left' src='/wp-content/themes/bootstrap-basic/img/up-arrow.png'  />",
            "<img alt='arrow_right' src='/wp-content/themes/bootstrap-basic/img/down-arrow.png'  />"],
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1
            },
            767: {
                items: 4
            }
        }

    });

    jQuery('#result-owl').owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:0, //Отступ от элемента справа в 50px
        nav:true, //Отключение навигации
        autoplay:true, //Автозапуск слайдера
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:8000, //Время смены слайда
        navText: ["<img alt='arrow_left' src='/wp-content/themes/bootstrap-basic/img/up-arrow.png'  />",
            "<img alt='arrow_right' src='/wp-content/themes/bootstrap-basic/img/down-arrow.png'  />"],
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1
            },
            767: {
                items: 4
            },
            1200: {
                items: 6
            }
        }

    });

    jQuery(document).scroll(function(eventObject) {
        w_top = jQuery(window).scrollTop();

        if(w_top>300){
            jQuery("#button_up").show();
        }else{
            jQuery("#button_up").hide();
        }

        if(jQuery(".about-page").length>0){
            height_w=jQuery(window).height();
            height_half_w=height_w/2;
            window_pos_center=w_top+height_half_w;

            jQuery(".container-point").each(function(){
                jQuery(this).removeClass("active");

                height_block_top=jQuery(this).offset().top;
                height_block=jQuery(this).height();

                console.log(height_block_top+", "+(height_block+height_block_top));
                if((+window_pos_center > +height_block_top) && (+window_pos_center < +height_block_top+height_block)){
                    jQuery(this).addClass("active");
                }

            });



        }
    });
    jQuery("#button_up").click(function(){
        jQuery('html, body').animate({scrollTop: 0},1000);
        return false;
    });

    jQuery("[href='/#contact']").click(function(e){
        if(jQuery('.block-yandex-map').length>0){
            e.preventDefault();
            jQuery('html, body').animate({ scrollTop: jQuery('.block-yandex-map').offset().top }, 4000);
            return false;
        }


    });

});


function init_test(){
if(jQuery("#test-plagin").length>0){

    test_plagin=jQuery("#test-plagin").html();
    if(test_plagin=="" || test_plagin==undefined || test_plagin==false) return 1;

    test_plagin=jQuery.parseJSON(test_plagin);

    if(jQuery("#test-plagin").attr("lang")=="en")
        language="en";
    else
        language="ru";

    element_start=find_element_test(1,test_plagin);
    jQuery("#test-plagin").html(html_test(
        element_start["img"],
        element_start["text"],
        element_start["number"],
        element_start["yes_next"],
        element_start["no_next"],
        element_start["other_next"],
        language
    ));


    jQuery("#test-plagin").show();
    jQuery("#test-plagin").on("click",".button-next",function(){

        id_next=jQuery(this).attr("id_next");

        if(id_next!="" &&  id_next!==undefined){
        element=find_element_test(id_next,test_plagin);
        jQuery("#test-plagin").html(html_test(
           element["img"],
           element["text"],
           element["number"],
           element["yes_next"],
           element["no_next"],
           element["other_next"],
            language
        ));
        jQuery('#test-plagin').animate({scrollTop: 200},300,function(){
           console.log("clicl");

        });
        }

    });
}
}


function html_test(gif,text,number,buttons_yes,buttons_no,buttons_other,language){
    code="<div class='content-test one-page'>";

    code+="<div class='block-img'> <img src='"+gif+"'></div>";

    code+="<div class='block-text'>";
    if(number!==undefined && number!="" ){
        code+="<div class='number'>"+number+"</div>";
    }
    code+="<div class='line-border'></div><div class='text'>"+text+"</div>";
    code+="</div>";

    code+="<div class='block-button'>";
    is_button=true;

    if(language=="en"){
        but_text_yes='Yes';
        but_text_no='No';
        but_text_other='I do not know';
        but_text_repeat='Take the test again!';
    }else{
        but_text_yes='Да';
        but_text_no='Нет';
        but_text_other='Не знаю';
        but_text_repeat='Пройти тест заново!';
    }

        if(buttons_yes!==undefined && buttons_yes!="" ){
            code+="<div><div class='yes button-next ' id_next='"+buttons_yes+"'>"+but_text_yes+"</div></div>";
            is_button=false;
        }

        if(buttons_no!==undefined && buttons_no!="" ){
            code+="<div><div class='no button-next ' id_next='"+buttons_no+"'>"+but_text_no+"</div></div>";
            is_button=false;
        }

        if(buttons_other!==undefined && buttons_other!="" ){
            code+="<div><div class='other button-next ' id_next='"+buttons_other+"'>"+but_text_other+"</div></div>";
            is_button=false;
        }
    if(is_button){
        code+="<div><div class='other button-next ' id_next='1'>"+but_text_repeat+"</div></div>";

    }
    code+=" </div>";

    code+="</div>";
    return code;
}

function find_element_test(number,test){
    for(question=0;question<test.length;question++){
        if(number==test[question]["id"]){
            return test[question];
        }
    }

    return false;
}
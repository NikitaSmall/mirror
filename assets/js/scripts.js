$(document).ready(function(){

  var now = moment();
  moment.lang('ru');
  console.log(now.format('dddd, MMMM DD YYYY, h:mm:ss'));

  /* smooth scrolling for scroll down */
  $('#arrow').click(function(){
    //alert('O.K.');
    $('body,html').animate({scrollTop:$(window).scrollTop()+900},800);
  })

//-------------------------------------------------------------------------------------------
  /* Отключить панель "Чёрная полоса_1"*/
    $('#button_exit').click(function(){
        //alert("O.K.");
        $("#polosa").css({'display': 'none'})
    });

    /* Отключить панель "Чёрная полоса_2"*/
    $('#button_exit_2').click(function(){
        //alert("O.K.");
        $("#polosa_2").css({'display': 'none'})
    });

    /* Отключить панель "Чёрная полоса_3"*/
    $('#button_exit_3').click(function(){
        //alert("O.K.");
        $("#polosa_3").css({'display': 'none'})
    });

    /* Отключить панель "Чёрная полоса_4"*/
    $('#button_exit_4').click(function(){
        //alert("O.K.");
        $("#polosa_4").css({'display': 'none'})
    });
 //-------------------------------------------------------------------------------------------
//Разделить строку на слова, разделитель - пробел. в n - поррядковый номер слова.
    function wordes(st,n)  {
    //var temp = new Array();
    var temp = st.split(' ');
    //alert('temp1 -> '+temp[n]);
      return  temp[n];
}

//-------------------------------------------------------------------------------------------
//  Передвинить панель  HTML
    $('td').click(function() {
        //alert($('tr').offset().position().top);
        var h = $(this).offset().top; //  Y-координата элемента.
        var l = $(this).offset().left; // X-координата элемента.
        var w = $(this).width(); //  Ширина элемента.
        var t = $(this).text(); //  Текст элемента.
        var i = $(this).index(); //  Индекс элемента.

        t = t.replace(/[\s{,}]+/g, ' ');   // Заменить лишние тэги пробелами..
        //$.trim(t);             // Удалить крайние пробелы.
        t = wordes(t,1); // Взять первое слово в строке
        $( "#time" ).html( t ); // Вставить время в "чёрную полосу"

        if ((i > 1) && (t != '')) {     //Кликать только по непустым, с индексом >1
            var divs = $(this).siblings(); // Получить набор сестёр
            var der =$(divs).eq(0);        // Выбрать сестру по индексу (1-я ячейка в строке)
            var dat = $(der).text();        //  Взять текст из первой ячейки (дата)
            dat = dat.replace(/[\s{2,}]+/g, ' ');     // Удалить лишние тэги.
            $( "#date" ).html( dat ); // Вставить дату в "чёрную полосу"


            var dates = '?date='+dat+'&time='+t;    //Строка для GET
            //alert(dates);
            h = h + 46; //Корректировка
            $("#polosa").css({'top': h + 'px'});

            l = l + w - 14 - 20; // Позиция указателя: [left элемента]+[width элемента]- [ширина текста /2] - [ширина указателя /2]
            $("#triangle").css({'left': l + 'px'});
            //$("#polosa").css({'display': 'block'});
            $("#polosa").show('slow');
        }

    });
//-------------------------------------------------------------------------------------------
// Вызов Чёрная полоса_2
    $('#02').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

            h = 102; //Корректировка
            $("#polosa_2").css({'top': h + 'px'});
            l = $("#polosa_2").width(); // Ширина полосы.
           //alert(l);
            l = l/2 - 20; // Позиция указателя
            $("#triangle_2").css({'left': l + 'px'});
            //$("#polosa").css({'display': 'block'});
            $("#polosa_2").show('slow');

    });

//-------------------------------------------------------------------------------------------
// Вызов Чёрная полоса_3
    $('#03').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

        h = 102; //Корректировка
        $("#polosa_3").css({'top': h + 'px'});
        l = $("#polosa_3").width(); // Ширина полосы.
        //alert(l);
        l = l/2 - 20; // Позиция указателя
        $("#triangle_3").css({'left': l + 'px'});
        //$("#polosa").css({'display': 'block'});
        $("#polosa_3").show('slow');

    });
//-------------------------------------------------------------------------------------------
// Вызов Чёрная полоса_4
    $('#04').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

        h = 102; //Корректировка
        $("#polosa_4").css({'top': h + 'px'});
        l = $("#polosa_4").width(); // Ширина полосы.
        //alert(l);
        l = l/2 - 20; // Позиция указателя
        $("#triangle_4").css({'left': l + 'px'});
        //$("#polosa").css({'display': 'block'});
        $("#polosa_4").show('slow');


    });

});



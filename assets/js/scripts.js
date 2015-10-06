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
  /* ��������� ������ "׸���� ������_1"*/
    $('#button_exit').click(function(){
        //alert("O.K.");
        $("#polosa").css({'display': 'none'})
    });

    /* ��������� ������ "׸���� ������_2"*/
    $('#button_exit_2').click(function(){
        //alert("O.K.");
        $("#polosa_2").css({'display': 'none'})
    });

    /* ��������� ������ "׸���� ������_3"*/
    $('#button_exit_3').click(function(){
        //alert("O.K.");
        $("#polosa_3").css({'display': 'none'})
    });

    /* ��������� ������ "׸���� ������_4"*/
    $('#button_exit_4').click(function(){
        //alert("O.K.");
        $("#polosa_4").css({'display': 'none'})
    });
 //-------------------------------------------------------------------------------------------
//��������� ������ �� �����, ����������� - ������. � n - ����������� ����� �����.
    function wordes(st,n)  {
    //var temp = new Array();
    var temp = st.split(' ');
    //alert('temp1 -> '+temp[n]);
      return  temp[n];
}

//-------------------------------------------------------------------------------------------
//  ����������� ������  HTML
    $('td').click(function() {
        //alert($('tr').offset().position().top);
        var h = $(this).offset().top; //  Y-���������� ��������.
        var l = $(this).offset().left; // X-���������� ��������.
        var w = $(this).width(); //  ������ ��������.
        var t = $(this).text(); //  ����� ��������.
        var i = $(this).index(); //  ������ ��������.

        t = t.replace(/[\s{,}]+/g, ' ');   // �������� ������ ���� ���������..
        //$.trim(t);             // ������� ������� �������.
        t = wordes(t,1); // ����� ������ ����� � ������
        $( "#time" ).html( t ); // �������� ����� � "������ ������"

        if ((i > 1) && (t != '')) {     //������� ������ �� ��������, � �������� >1
            var divs = $(this).siblings(); // �������� ����� �����
            var der =$(divs).eq(0);        // ������� ������ �� ������� (1-� ������ � ������)
            var dat = $(der).text();        //  ����� ����� �� ������ ������ (����)
            dat = dat.replace(/[\s{2,}]+/g, ' ');     // ������� ������ ����.
            $( "#date" ).html( dat ); // �������� ���� � "������ ������"


            var dates = '?date='+dat+'&time='+t;    //������ ��� GET
            //alert(dates);
            h = h + 46; //�������������
            $("#polosa").css({'top': h + 'px'});

            l = l + w - 14 - 20; // ������� ���������: [left ��������]+[width ��������]- [������ ������ /2] - [������ ��������� /2]
            $("#triangle").css({'left': l + 'px'});
            //$("#polosa").css({'display': 'block'});
            $("#polosa").show('slow');
        }

    });
//-------------------------------------------------------------------------------------------
// ����� ׸���� ������_2
    $('#02').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

            h = 102; //�������������
            $("#polosa_2").css({'top': h + 'px'});
            l = $("#polosa_2").width(); // ������ ������.
           //alert(l);
            l = l/2 - 20; // ������� ���������
            $("#triangle_2").css({'left': l + 'px'});
            //$("#polosa").css({'display': 'block'});
            $("#polosa_2").show('slow');

    });

//-------------------------------------------------------------------------------------------
// ����� ׸���� ������_3
    $('#03').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

        h = 102; //�������������
        $("#polosa_3").css({'top': h + 'px'});
        l = $("#polosa_3").width(); // ������ ������.
        //alert(l);
        l = l/2 - 20; // ������� ���������
        $("#triangle_3").css({'left': l + 'px'});
        //$("#polosa").css({'display': 'block'});
        $("#polosa_3").show('slow');

    });
//-------------------------------------------------------------------------------------------
// ����� ׸���� ������_4
    $('#04').click(function() {
        //alert($('tr').offset().position().top);
        var h, l, w, t,i;

        h = 102; //�������������
        $("#polosa_4").css({'top': h + 'px'});
        l = $("#polosa_4").width(); // ������ ������.
        //alert(l);
        l = l/2 - 20; // ������� ���������
        $("#triangle_4").css({'left': l + 'px'});
        //$("#polosa").css({'display': 'block'});
        $("#polosa_4").show('slow');


    });

});



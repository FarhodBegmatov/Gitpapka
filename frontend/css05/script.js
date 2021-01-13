
    let count=0;
    function myFunction(x) {
        x.classList.toggle("change");
        count++;
        if(count%2==0){
            $('.chandler').show();
            $('.footer1').show();
            $('.card').show();
            $('.part').show();
            $('.r1').show();
            $('.s1 img').show();
            $('.karta').show();
            $('.inputname').show();

            $('.icon_bar').removeClass('black');
            $('.move').children().removeClass("white");
        }else{
            
            $('.footer1').hide();
            $('.inputname').hide();
            $('.chandler').hide();
            $('.karta').hide();
            $('.card').hide();
            $('.part').hide();
            $('.r1').hide();
            $('.s1 img').hide();
            $('.icon_bar').addClass('black');
            $('.move').children().addClass("white");

            $('.icon_bar').mouseenter(function(){
                $(this).removeClass('black');
                $('.move').children().removeClass('white');
                $('.move').children().addClass('black');
                $(this).addClass('icon_bar_color');
            })
        }
        $('.qora_div').toggle(200)
    }
    $('.move').hover(function(){
        $(this).children().addClass('black');
        
      $(this).mouseleave(function(){
        $(this).children().removeClass('black');

      })
    })

   $('.qora_div_ul').children().wrap("<h1></h1>");
   $('.qora_div_ul li').eq(0).css("margin-right", "15px")
  $('.footerbtn').hover(function(){
      $(this).addClass('bg-dark');
  })

  $(".send").hover(function(){
      $(this).children().css("background-color","transparent");

  })

    

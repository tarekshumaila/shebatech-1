$(function(){
    $('#menucontainer').data('size','big');
});

$(window).scroll(function(){
    if ($(window).width() > 1040) {
        if($(document).scrollTop() > 0)
        {
            if($('#menucontainer').data('size') == 'big')
            {
                $('#menucontainer').data('size','small');
                $(".menu").animate({'line-height':'90px','font-size':'14px'}, 500);
                $("#menucontainer").animate({height:'80px'}, 500);
                $(".menuitem").animate({width:'95px', height:'80px'}, 500);
                $("#logo").animate({height:'80px'}, 500);
            }
        }
        else
        {
            if($('#menucontainer').data('size') == 'small')
            {
                $('#menucontainer').data('size','big');
                $("#menucontainer").animate({height:'127px'}, 500);
                $(".menuitem").animate({width:'145px', height:'127px'}, 500);
                $(".menu").animate({'line-height':'150px','font-size':'18px'}, 500);
                $("#logo").animate({height:'127px'}, 500);
            }  
        }
    }
    if ($(window).width() > 720 && $(window).width() < 1040  ) {
        if($(document).scrollTop() > 0)
        {
            if($('#menucontainer').data('size') == 'big')
            {
                $('#menucontainer').data('size','small');
                $(".menu").animate({'line-height':'70px','font-size':'14px'}, 500);
                $("#menucontainer").animate({height:'60px'}, 500);
                $(".menuitem").animate({width:'95px', height:'60px'}, 500);
                $("#logo").animate({height:'60px'}, 500);
            }
        }
        else
        {
            if($('#menucontainer').data('size') == 'small')
            {
                $('#menucontainer').data('size','big');
                $("#menucontainer").animate({height:'83px'}, 500);
                $(".menuitem").animate({width:'95px', height:'97px'}, 500);
                $(".menu").animate({'line-height':'70px','font-size':'16px'}, 500);
                $("#logo").animate({height:'97px'}, 500);
            }  
        }
    }
});
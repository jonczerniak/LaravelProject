$(document).ready(function()  {

    let btnTop = $('#back-to-top');

    $(window).scroll(function(){

        if($(window).scrollTop() > 400){

            btnTop.fadeIn('slow');
        }else{
            btnTop.fadeOut('slow');
        }

    });

    $(btnTop).click(function(){

        $('#staticBackdrop').animate({scrollTop: 0}, 'slow');
        //alert($("#staticBackdrop").scrollTop() + "px");

    });


});

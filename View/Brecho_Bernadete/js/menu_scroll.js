$(document).ready(function(){

    $(window).scroll(function(){

        if($(this).scrollTop() > 50){

            $("#header").css({
                "background-color":"rgba(89, 183, 167, 1)",
                "height":"80px"
            });

            $("#header").hover(
                function(){
                    $(this).css({"background-color":"rgba(89, 183, 167, 1)"});
                });

            $("#menu").css({
                "height":"80px",
                "width":"1400px"
            });

            $("#logo").css({
                "margin-top":"0px",
                "height":"60px",
                "width":"60px"
            });

            $("#logo_img").css({
                "height":"60px",
                "width":"60px"
            });

            $("#nav").css({"margin-top":"25px"});

            $(".itens").css({"margin-left":"140px"});

            $("#first_item").css({"margin-left":"60px"});

            $("#login").css({
                "width":"70px",
                "height":"70px",
            });

            $("#perfil").css({
                "margin-top":"0px",
                "margin-left":"0px"
            });

            $("#autenticacao").css({"display":"none"});

        } else {

            $("#header").css({
                "background-color":"rgba(89, 183, 167, 0.2)",
                "height":"110px"
            });

            $("#header").hover(
                function(){
                    $(this).css({"background-color":"rgba(89, 183, 167, 1)"});
                },
                function(){
                    $(this).css({"background-color":"rgba(89, 183, 167, 0.2)"});
                });

            $("#menu").css({
                "height":"100px",
                "width":"1600px"
            });

            $("#logo").css({
                "margin-top":"10px",
                "height":"80px",
                "width":"80px"
            });

            $("#logo_img").css({
                "height":"80px",
                "width":"80px"
            });

            $("#nav").css({"margin-top":"40px"});

            $(".itens").css({"margin-left":"130px"});

            $("#first_item").css({"margin-left":"40px"});

            $("#login").css({
                "width":"320px",
                "height":"100px",
            });

            $("#perfil").css({"margin-top":"15px"});

            $("#autenticacao").css({"display":"block"});

        }

    });

    $(".content_text").hover(function(){

        $(".content").css({"filter":"brightness(80%)"});
        $(this).css({"filter":"brightness(100%)"});

    },function(){

        $(".content").css({"filter":"brightness(100%)"});

    });

});

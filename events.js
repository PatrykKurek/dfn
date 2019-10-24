//facebook mousenter facebook
$(document).ready(function(){    
    //rozsuwane menu
    $("#gale_list").mouseenter(function(){      
        $("#submenu_container").stop().slideDown();            
    });
    $("#gale_list").mouseleave(function(){
        $("#submenu_container").stop().slideUp();
    });


   
    

    //facebook + YT ikonki
    $("#facebook").mouseenter(function () {
      
        $("#facebookblue").fadeIn();
    });
    $("#facebookblue").mouseleave(function () {
        
        $("#facebookblue").fadeOut();
    });
    $("#youtube").mouseenter(function () {

        $("#youtubecolor").fadeIn();
    });
    $("#youtubecolor").mouseleave(function () {

        $("#youtubecolor").fadeOut();
    });

});


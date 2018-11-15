$(function(){

var menuaberto='fechado';
$('.jw_menu_close').css("display","none");

if(menuaberto=='fechado'){
$('.jw_menu_open').click(function(){ 
    $('.container-menu').fadeIn("slow").css("display","flex");
    $('.jw_menu_open').css("display","none");
    $('.jw_menu_close').css("display","inline");     
    if(menuaberto=='fechado'){
        menuaberto='aberto'; 
        console.log(menuaberto);
    }   
}); 

}
 $('.jw_menu_close').click(function(){ 
        $('.container-menu').css("display","none");
        $('.jw_menu_close').css("display","none");
        $('.jw_menu_open').css("display","inline");     
        if(menuaberto=='aberto'){
            menuaberto='fechado'; 
            console.log(menuaberto);
        }   
}); 
    
$('.jw-cross').click(function(){

    $('.logout').addClass('animated zoomOut').delay(1).css("display","none");

});
    



});
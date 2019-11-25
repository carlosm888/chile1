$('body').on('click', function(){
if($('body').find('.show').length == 2){
$('body').find('.show').removeClass("show");
}
});


$('body').on('click', '.botonismg', function(){
$(".iniciarsesionc").toggleClass("show");
 });

$('body').on('click', '.contenidocarmenu', function(){
 if($(".car-compra").hasClass("show")==false){
 $(".car-compra").addClass("show");
}else{
 $(".car-compra").removeClass('show');
 }
});
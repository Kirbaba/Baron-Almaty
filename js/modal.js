jQuery(document).on('click', '#napisat', function (){
    client_h=document.body.clientHeight;
    var otstup = (client_h-551)/2;
    $("#mod1").css({'margin-top':otstup});
});
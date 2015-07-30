jQuery(document).on('click', '#button', function (){
    var name = jQuery("#name_inp").val();
    var mail = jQuery("#mail_inp").val();
    var text = jQuery("#text").val();

    if(name == "" || mail == "" || text == ""){

        alert ("Заполните все поля");
    }
    else{
            jQuery.ajax({
                url: myajax.url, //url, к которому обращаемся
                type: "POST",
                data: "action=get_mail&name="+name+"&mail="+mail+"&text="+text, //данные, которые передаем. Обязательно для action указываем имя нашего хука
                success: function(data){
        //возвращаемые данные попадают в переменную data
                    //jQuery('#excurtions').html(data);
                }
            });
            name = jQuery("#name_inp").val('');
            mail = jQuery("#mail_inp").val('');
            text = jQuery("#text").val('');
        /*document.getElementById('thnx' ).style.display = 'block';
        document.getElementById('callme' ).style.display = 'none';*/
        $('#callme').modal('hide');
        $('#thnx').modal('show');

    }
        });

jQuery(document).on('click', '.close', function (){
    $('#callme').modal('hide');
});
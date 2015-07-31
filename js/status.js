
    function jivo_onLoadCallback() {
        if (jivo_config.chat_mode == "online") {
            var status = 1;
        } else {
            var status = 0;
        }
        jQuery.ajax({
            url: myajax.url, //url, к которому обращаемся
            type: "POST",
            data: "action=set_status&status="+status, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){

            }
        });
    }

jQuery(document).ready(function ($) {

    $(document).on('click', '.media-upload', function() {
        var par = $(this).parent();
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            par.children('.media').attr('src', attachment.url);
            par.children('.media-img').val(attachment.url);
//                jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });
    //добавить партнера
    $(document).on('click', '.add-channel', function(){
        $('.channels-list').append('<li class="list-group-item"> ' +
            '<div class="row"> ' +
            '<div class="col-lg-8"> ' +
            '<img src="" alt="" class="channel-img media"> ' +
            '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<input type="hidden" class="media-img" name="channel-img"> ' +
            '</div> ' +
            '<div class="col-lg-2"> ' +
            '<button class="btn btn-success save-channel"><span class="glyphicon glyphicon-floppy-disk"></span>Сохранить</button> ' +
            '</div> ' +
            '<div class="col-lg-2"> ' +
            '</div> ' +
            '</div> ' +
            '</li>');
    });
    //сохранениа партнера
    $(document).on('click', '.save-channel', function(){
        var block = $(this).parent().parent();

        var num = block.parent().attr('data-num');
        var img = block.children().children('[name="channel-img"]').val();

        console.log(img);
        console.log(num);

        if(num == null){
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_channel&img='+img,
                success:function(data){
                    console.log(data);
                    alert("Слайд добавлен и сохранен!");
                    location.reload();
                }
            });
        }else{
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=update_channel&img='+img+'&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Слайд обновлен!");
                }
            });
        }
    });
    //удаление слайда
    $(document).on('click', '.del-channel', function(){
        var num = $(this).attr('data-num');
        if(num != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=delete_channel&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Слайд удален!");
                }
            });
            block.remove();
        }

    });

});

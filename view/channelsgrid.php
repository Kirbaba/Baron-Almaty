<?php foreach($channels as $item){ ?>
<li class="list-group-item" data-num="<?= $item['id'] ?>">
    <div class="row">
        <div class="col-lg-8">
            <img src="<?= $item['img'] ?>" alt="" class="channel-img media">
            <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
            <input type="hidden" class="media-img" name="channel-img" value="<?= $item['img'] ?>">
        </div>
        <div class="col-lg-2">
            <button class="btn btn-success save-channel"><span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>
        <div class="col-lg-2">
            <?php if ($item['id'] != 1) { ?>
                <button class="btn btn-danger del-channel" data-num="<?= $item['id'] ?>"><span class="glyphicon glyphicon-trash"></span>Удалить</button>
            <?php } ?>
        </div>
    </div>
</li>
<?php } ?>
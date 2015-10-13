		<footer class="footer">
			<div class="contain">
				<div class="footer__copyr">
					<p>1999—2015 © baron-moscow.ru</p>
				</div>
				<div class="footer__soc">
					<p>Следите за нами в социальных сетях - </p>
					<div class="soc">			
						<a href="#nowhere"><i class="soc__fb"></i></a>
						<a href="#nowhere"><i class="soc__vk"></i></a>
						<a href="#nowhere"><i class="soc__tw"></i></a>
						<a href="#nowhere"><i class="soc__ok"></i></a>
						<a href="#nowhere"><i class="soc__yt"></i></a>
					</div>
				</div>
				<div class="footer__dev">
					<p>Разработка и поддержка сайта - <a style = "color:#fff;" href = "#" target="_blank">Турбосайт</a></p>
				</div>
			</div>
		</footer>
	</div>
    <div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" id = "mod1">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
	            <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
	            	<input type="text" name="name" id = "name_inp" class="formPopup" placeholder="Ваше имя" required >
	            	<input type="email" name="email" id = "mail_inp" class="formPopup" placeholder="Ваш e-mail" required>
	            	<textarea class="formPopupText" name="mes" id = "text" placeholder="Введите ваше сообщение" required></textarea>
	            	<input class="formPopupSub" type="button" id="button" href="#thnx" value="Отправить сообщение" style="cursor: pointer">
	            </form>
	        </div>
	    </div>
	</div>

    <div class="modal fade" id="thnx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id = "mod2">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
            <h1>Спасибо!</h1>
            <p><b>Ваше сообщение отправлено. <br> Наши менеджеры ответят<br>  Вам в течени 72 часов.</b></p>
        </div>
    </div>
</div>
</div>
<?php wp_footer(); ?>
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
            (function(){ var widget_id = 'FXpN6numvE';
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
        <!-- {/literal} END JIVOSITE CODE -->


</body>
</html>
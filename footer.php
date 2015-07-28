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
					<p>Разработка и поддержка сайта - Турбосайт</p>
				</div>
			</div>
		</footer>
	</div>

    <div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
	            <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
	            	<input type="text" name="name" class="formPopup" placeholder="Ваше имя" >
	            	<input type="email" name="email" class="formPopup" placeholder="Ваш e-mail">
	            	<textarea class="formPopupText" name="mes" placeholder="Введите ваше сообщение"></textarea>
	            	<input class="formPopupSub" id=""type="submit" data-toggle="modal" href="#thnx" value="Отправить сообщение">
	            </form>
	            
	        </div>
	    </div>
	<div>

    <div class="modal fade" id="thnx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
            <h1>Спасибо!</h1>
            <p><b>Ваше сообщение отправлено. <br> Наши менеджеры ответят<br>  Вам в течени 72 часов.</b></p>
        </div>
    </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
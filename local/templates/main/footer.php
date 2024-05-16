

<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<footer>
		<div class="foot_info_bl">
			<div class="standart_width">
				<div class="top_head_logo"><a href="/"><img src="./img/logo.png" alt=""/></a></div>
				<div class="foot_menu">
				<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"button_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(0 => "",),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "N",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "Y"
						)
					); ?>
				</div>
				<div class="top_head_bt">
					<div class="foot_tel">
						<a href="tel:+79003002010">8 (900) 300-20-10</a>
						<span>с 8:00 до 20:00 (Мск)</span>
					</div>
					<a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">Обратный звонок</a>
				</div>
			</div>
		</div>
		<div class="foot_prava_bl">
			<div class="standart_width">
				<div class="position_relative">
					<div class="foot_prava">Copyright © 2018 Salavey.net Разработка, реализация и развитие e-commerce проектов на 1С-Битрикс.</div>
					<a class="foot_salavey" href=""><img src="./img/salavey.png" alt=""/></a>
				</div>
			</div>
		</div>
	</footer>
	<div class="popup" id="call_back" style="display:none;">
		<form>
			<div class="popup_tit">Обратный звонок</div>
			<div class="popup_form">
				<input type="text" placeholder="Ваше имя"/>
			</div>
			<div class="popup_form">
				<input class="error" type="email" placeholder="Email"/>
			</div>
			<div class="popup_form">
				<input class="true" type="tel" placeholder="Телефон"/>
			</div>
			<div class="popup_form">
				<textarea placeholder="Вопрос или сообщение"></textarea>
			</div>
			<div class="popup_form prava styler">
				<label>
					<input type="checkbox"/>
					<span>Я принимаю <a href="">условия передачи данных</a></span>
				</label>
			</div>
			<div>
				<a class="green_bt" href="">Отправить</a>
			</div>
		</form>
	</div>
</body>

</html>
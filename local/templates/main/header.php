<?

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/screen.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/font/font.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.bxslider.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.formstyler.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.formstyler.theme.css");
	
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-3.1.1.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.bxslider.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.formstyler.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
	
	?>
	<? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel" >
<?$APPLICATION->ShowPanel();?>
</div>
<header>
		<div class="top_head_white_bl">
			<div class="standart_width">
				<div class="top_head_logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt=""/></a></div>
				<div class="top_head_tel_bl">
					<div class="top_head_tel">
						<a href="tel:+79003002010">8 (900) 300-20-10</a>
						<span>  с 8:00 до 20:00 (Мск)</span>
					</div>
				</div>
				<div class="top_head_favor_bl">
					<div class="top_head_favor">
						<a href="">Избранное</a><span>10</span>
					</div>
				</div>
				<div class="top_head_bt"><a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">Обратный звонок</a></div>
			</div>
		</div>
		<div class="blue_head_info_bl">
			<div class="standart_width clear_after">
				<div class="header_menu_bl">
					<ul class="header_menu">
						<li>
							<a class="menu_lvl1_bt arrow active" href=""><span>Каталог</span></a>
							<ul class="menu_lvl2">
								<li>
									<a class="menu_lvl2_bt arrow active" href="">Учебная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a class="active" href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Детская литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Художественная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Бизнес-литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="menu_lvl1_bt" href=""><span>Акции</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Доставка</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>О компании</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Новости</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Контакты</span></a></li>
					</ul>
				</div>
				<div class="head_search_bl">
					<form>
						<input type="text" placeholder="Поиск ..."/>
						<input type="submit" value="найти"/>
					</form>
				</div>
			</div>
		</div>
		<?if($APPLICATION->GetCurpage() === "/"):?>
		<div class="index_slider_bl">
			<ul class="index_slider">
				<li>
					<div class="index_slider_el" style="background-image:url(./img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="./img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
				<li>
					<div class="index_slider_el" style="background-image:url(./img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="./img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<?endif?>
	</header>

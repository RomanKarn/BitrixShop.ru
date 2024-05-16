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
<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
<body>
	<header>
		<div class="top_head_white_bl">
			<div class="standart_width">
				<div class="top_head_logo"><a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt="" /></a></div>
				<div class="top_head_tel_bl">
					<div class="top_head_tel">
						<a href="tel:+79003002010">8 (900) 300-20-10</a>
						<span> с 8:00 до 20:00 (Мск)</span>
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
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"top_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "3",
							"MENU_CACHE_GET_VARS" => array(0 => "",),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "N",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "Y"
						)
					); ?>
				</div>
				<div class="head_search_bl">
					<form>
						<input type="text" placeholder="Поиск ..." />
						<input type="submit" value="найти" />
					</form>
				</div>
			</div>
		</div>
		<? if ($APPLICATION->GetCurpage() === "/") : ?>
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"slider_main_page",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "N",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PICTURE", "", ""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "1",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "2",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("", ""),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "TIMESTAMP_X",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				)
			); ?>
		<? endif ?>
	</header>
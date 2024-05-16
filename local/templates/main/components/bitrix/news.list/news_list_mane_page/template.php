<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if (!empty($arResult)) : ?>
	<div class="news_list">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<div class="news_el">
				<div class="news_el_img"><a href='<?= $arItem["DETAIL_PAGE_URL"] ?>'><img src='<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>' alt="" /></a></div>
				<div class="news_el_cont">
					<div class="news_el_tit"><a href=""><?= $arItem["NAME"] ?></a></div>
					<div class="news_el_txt"><?= $arItem["PREVIEW_TEXT"] ?></div>
					<div class="news_el_data"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
					<div class="news_el_look"><?= intval($arItem["FIELDS"]["SHOW_COUNTER"]) ?></div>
				</div>
			</div>
		<? endforeach ?>
	</div>
<? endif ?>
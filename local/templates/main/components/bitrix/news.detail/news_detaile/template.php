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

<div class="white_bg">
	<div class="standart_width">
		<h1><?= $arResult["NAME"]?></h1>
		<div class="small_standart_width">
			<img align="center" src='<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>' alt="" />
			<?= $arResult["DETAIL_TEXT"]?>
			<div class="news_det_info clear_after">
				<div class="news_det_data"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
				<div class="news_det_look"><?=$arResult["SHOW_COUNTER"]?></div>
				<div class="news_det_back"><a href="<?=$arResult["LIST_PAGE_URL"]?>">Назад к новостям</a></div>
			</div>
		</div>
	</div>
</div>
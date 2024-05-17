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
		<div class="title"><?=$arResult["NAME"]?></div>
		<div class="small_standart_width">
			<img align="center" src='<?= $arResult["PREVIEW_PICTURE"]["SRC"]?>' alt="" />
			<?=$arResult["PREVIEW_TEXT"]?>
		</div>
	</div>
</div>
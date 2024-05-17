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
		<div class="title">Акции</div>
		<div class="action_list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<a class="action_el" href='<?=$arItem["DETAIL_PAGE_URL"]?>'>
				<span class="action_el_img"><img src='<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>'alt="" /></span>
				<span class="action_el_cont"><?=$arItem["NAME"]?></span>
			</a>
			<?endforeach?>
		</div>
	</div>
</div>
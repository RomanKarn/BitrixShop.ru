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
	<div class="index_slider_bl">
		<ul class="index_slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<li>
				<div class="index_slider_el" style='background-image:url(<?= !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : ""?>);'>
					<div class="standart_width index_slider_cont">
						<div class="ind_slid_txt_bl">
							<div class="ind_slid_tit"><?= $arItem["NAME"] ?? ""?></div>
							<div class="ind_slid_txt"><?= $arItem["PREVIEW_TEXT"] ?? ""?></div>
							<a class="red_bt" href='<?= !empty($arItem["DETAIL_PAGE_URL"]) ? $arItem["DETAIL_PAGE_URL"] :""?>'>Узнать подробнее</a>
						</div>
						<div class="ind_slid_img"><img src="<?= !empty($arItem["DETAIL_PICTURE"]["SRC"]) ? $arItem["DETAIL_PICTURE"]["SRC"] :"" ?>" alt="" /></div>
					</div>
				</div>
			</li>
		<?endforeach?>
		</ul>
	</div>
<? endif ?>
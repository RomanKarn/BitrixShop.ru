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
		<div class="title"><?=$APPLICATION->ShowTitle();?></div>
		<div class="razdel_list">
			<? foreach ($arResult["SECTIONS"] as $arItem) : ?>
				<? if ($arItem["DEPTH_LEVEL"] <= $arResult["SECTIONS"][0]["DEPTH_LEVEL"]) : ?> <!--У по сути это работает, но не думаю что это должно делаться ТАК-->
					<a class="razdel_el" href='<?= $arItem["SECTION_PAGE_URL"] ?>'>
						<span class="razdel_cont">
							<span class="razdel_img"><img src='<?= $arItem["PICTURE"]["SRC"] ?>' alt="" /></span>
							<span class="razdel_tit"><?= $arItem["SEARCHABLE_CONTENT"] ?></span>
						</span>
						<span class="razdel_pop">
							<span class="blue_bt">Перейти в раздел</span>
						</span>
					</a>
				<? endif ?>
			<? endforeach ?>
		</div>
	</div>
</div>
</section>
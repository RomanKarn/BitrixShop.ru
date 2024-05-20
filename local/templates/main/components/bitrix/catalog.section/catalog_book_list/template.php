<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath

 */

$this->setFrameMode(true);
?>


<div class="catalog_list">
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<div class="catalog_el">
			<div class="cat_el_img">
				<a href='<?= $arItem["DETAIL_PAGE_URL"] ?>'><img src='<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>' alt="" /></a>
				<div class="cat_el_status">
					<? if ($arItem["PROPERTIES"]["PROMO"]["VALUE"] == "Y") : ?>
						<div class="red">акция</div>
					<? endif ?>
					<? if ($arItem["PROPERTIES"]["NEW"]["VALUE"] == "Y") : ?>
						<div class="green">новинка</div>
					<? endif ?>
					<? if ($arItem["PROPERTIES"]["BESTSELLER"]["VALUE"] == "Y") : ?>
						<div class="blue">бестселлер</div>
					<? endif ?>
				</div>
			</div>
			<div class="cat_el_star">
				<?
				$collStarsOrande =  (int) $arItem["PROPERTIES"]["RATING"]["VALUE"];
				$collStarsAll = 5;
				while ($collStarsAll > 0) :
				?>
					<? if ($collStarsOrande > 0) :
						$collStarsOrande--;
					?>
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_orange.png" alt="" />
					<? else : ?>
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_gray.png" alt="" />
					<? endif ?>
				<?
					$collStarsAll--;
				endwhile; ?>
			</div>
			<div class="cat_el_price">
				<div class="cat_price"><?= ((!empty($arItem["PRICES"]["PRICES_WHIS_DISCOUNT"])) && ($arItem["PRICES"]["PRICES_WHIS_DISCOUNT"] != "" || $arItem["PRICES"]["PRICES_WHIS_DISCOUNT"] > 0)) ? $arItem["PRICES"]["PRICES_WHIS_DISCOUNT"] :  $arItem["PRICES"]["PRISE"]["VALUE"] ?> руб.</div>
				<? if (!empty($arItem["PRICES"]["PRICES_WHIS_DISCOUNT"])) : ?>
					<div class="cat_old_price">
						<div class="price"><?= $arItem["PRICES"]["PRISE"]["VALUE"] ?> руб.</div>
						<div class="sale">-<?= $arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] ?>%</div>
					</div>
				<? endif ?>
			</div>
			<div class="cat_el_name">
				<div class="cat_el_tit"><a href='<?= $arItem["DETAIL_PAGE_URL"] ?>'><?= $arItem["NAME"] ?></a></div>
				<div class="cat_el_avtor"><?= $arItem["PROPERTIES"]["AUTHORS"]["VALUE_ENUM"][0] ?></div>
			</div>
			<a class="favor_bt" href="">В избранное</a>
		</div>
	<? endforeach ?>
</div>
<a class="ajax-pager-link more_bt" href="">Показать еще 10</a>
<div class="number_bl">
	<a class="prev" href=""></a>
	<a href="">1</a>
	<a class="active" href="">2</a>
	<a href="">3</a>
	<a href="">4</a>
	<span>...</span>
	<a href="">9</a>
	<a class="next" href=""></a>
</div>
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
 * @var string $templateFolder
 */

$this->setFrameMode(true);

?>
<div class="catalog_detail_bl">
	<div class="standart_width">
		<div class="detail_info_bl clear_after">
			<div class="section det_gallery clear_after">
				<ul class="tabs det_tabs not_style">
					<? if (!empty($arResult["PROPERTIES"]["PICTURES"]["PICTURES_SRC"])) : ?>
						<? foreach ($arResult["PROPERTIES"]["PICTURES"]["PICTURES_SRC"] as $photoScr) : ?>
							<li><img src='<?= $photoScr ?>' alt="" /></li>
						<? endforeach ?>
					<? endif ?>
				</ul>
				<div class="det_box_bl">
					<? if (!empty($arResult["PROPERTIES"]["PICTURES"]["PICTURES_SRC"])) : ?>
						<? foreach ($arResult["PROPERTIES"]["PICTURES"]["PICTURES_SRC"] as $photoScr) : ?>
							<div class="box det_box" style="display:none;">
								<a href='<?= $photoScr ?>' data-fancybox="images"><img src='<?= $photoScr ?>' alt="" /></a>
							</div>
						<? endforeach ?>
					<? endif ?>
				</div>
			</div>
			<div class="detail_info">
				<div class="detail_info_top">
					<h1>Серая книга</h1>
					<div class="cat_el_star">
						<?
						$collStarsOrande =  (int) $arResult["PROPERTIES"]["RATING"]["VALUE"];
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
					<div class="det_price_status_bl">
						<div class="det_price_bl">
							<div class="det_price"><?= ((!empty($arResult["PRICES"]["PRICES_WHIS_DISCOUNT"])) && ($arResult["PRICES"]["PRICES_WHIS_DISCOUNT"] != "" || $arResult["PRICES"]["PRICES_WHIS_DISCOUNT"] > 0)) ? $arResult["PRICES"]["PRICES_WHIS_DISCOUNT"] :  $arResult["PRICES"]["PRISE"]["VALUE"] ?> руб.</div>
							<? if (!empty($arResult["PRICES"]["PRICES_WHIS_DISCOUNT"])) : ?>
								<div class="cat_old_price">
									<div class="price"><?= $arResult["PRICES"]["PRISE"]["VALUE"] ?> руб.</div>
									<div class="sale">-<?= $arResult["PROPERTIES"]["DISCOUNT"]["VALUE"] ?>%</div>
								</div>
							<? endif ?>
							<a class="favor_bt <?= (in_array($arResult["ID"],$arParams["FAVORIT"]) ? 'active' : '')?>" data-id="<?=$arResult["ID"]?>" href="javascript:;">В избранное</a>
						</div>
						<div class="det_status_bl">
							<div class="det_status_el green">В наличии</div>
							<div class="det_status_el red">Осталось мало</div>
							<div class="det_status_el blue">Бесплатная доставка</div>
						</div>
					</div>
				</div>
				<div class="detail_info_bottom">
					<div class="detail_option_list">
						<div class="detail_option_el">Автор:
							<? foreach ($arResult["PROPERTIES"]["AUTHORS"]["VALUE_ENUM"] as $name) : ?>
								<a href=""><?= $name ?></a>
							<? endforeach ?>
						</div>
						<div class="detail_option_el">Год издания: <?= $arResult["PROPERTIES"]["PUBLICATIONDATE"]["VALUE"] ?></div>
						<div class="detail_option_el">Издательство:
							<? foreach ($arResult["PROPERTIES"]["PUBLISHER"]["VALUE_ENUM"] as $publesh) : ?>
								<a href=""><?= $publesh ?></a>,
							<? endforeach ?>
						</div>
						<div class="detail_option_el">Количество страниц: <?= $arResult["PROPERTIES"]["PAGECOUNT"]["VALUE"] ?></div>
						<div class="detail_option_el">Артикул: <?= $arResult["PROPERTIES"]["ARTICLE"]["VALUE"] ?></div>
						<div class="detail_option_el">Переплет: <?= $arResult["PROPERTIES"]["BINDING"]["VALUE"] ?></div>
						<div class="detail_option_el">Возрастное ограничение: <?= $arResult["PROPERTIES"]["AGELIMIT"]["VALUE"] ?>+</div>
						<div class="detail_option_el">Формат: <?= $arResult["PROPERTIES"]["FORMAT"]["VALUE"] ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="about_produce_bl">
			<div class="about_produce_tit">О книге «<?= $arResult["NAME"] ?>»</div>
			<div class="about_produce_txt">
				<?= $arResult["PREVIEW_TEXT"] ?>
			</div>
		</div>
	</div>
</div>
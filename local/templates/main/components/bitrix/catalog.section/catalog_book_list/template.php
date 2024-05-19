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

<div class="catalog_list_page">
			<div class="standart_width">
				<div class="title_left">Дополнительное образование</div>
				<div class="content clear_after">
					<div class="content_l">
						<div class="filter_bl">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/filter.png" alt=""/>
						</div>
					</div>
					<div class="content_c">
						<div class="sorting_bl">
							<span>Сортировать:</span>
							<a class="sorting_el active min" href=""><i></i>По цене</a>
							<a class="sorting_el active max" href=""><i></i>По рейтингу</a>
							<a class="sorting_el" href=""><i></i>По новизне</a>
						</div>
						<div class="catalog_list">
							<div class="catalog_el">
								<div class="cat_el_img">
									<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/produce1.png" alt=""/></a>
									<div class="cat_el_status">
										<div class="red">акция</div>
										<div class="green">новинка</div>
										<div class="blue">бестселлер</div>
									</div>
								</div>
								<div class="cat_el_star">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_orange.png" alt=""/>
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_orange.png" alt=""/>
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_orange.png" alt=""/>
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_orange.png" alt=""/>
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/star_gray.png" alt=""/>
								</div>
								<div class="cat_el_price">
									<div class="cat_price">221 руб.</div>
									<div class="cat_old_price">
										<div class="price">287 руб.</div>
										<div class="sale">-22%</div>
									</div>
								</div>
								<div class="cat_el_name">
									<div class="cat_el_tit"><a href="">Красная Книга</a></div>
									<div class="cat_el_avtor">Константин  Красновский</div>
								</div>
								<a class="favor_bt" href="">В избранное</a>
							</div>
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
					</div>
				</div>
			</div>
		</div>
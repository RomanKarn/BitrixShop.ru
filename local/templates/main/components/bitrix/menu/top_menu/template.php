<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

	<ul class="header_menu">
		<? foreach ($arResult as $arItem) : ?>
			<li><a class="menu_lvl1_bt <?= !empty($arItem["SELECTED"]) ? 'active' : '' ?>" href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a></li>
		<? endforeach ?>
	</ul>
<? endif ?>
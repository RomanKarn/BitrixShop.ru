<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

	<ul class="header_menu">
		<? foreach ($arResult as $arItem) : ?>
			<li>
				<a class="menu_lvl1_bt <?= !empty($arItem["SELECTED"]) ? 'active' : '' ?>" href="<?= $arItem["LINK"] ?>"><span><?= $arItem["TEXT"] ?></span></a>
				<? if (!empty($arItem["SUBMENU"])) : ?>
					<ul class="menu_lvl2">
						<? foreach ($arItem["SUBMENU"] as $subMainMenu) : ?>
							<li>
								<a class="menu_lvl2_bt <?= !empty($subMainMenu["SELECTED"]) ? 'active' : '' ?>" href="<?= $subMainMenu["LINK"] ?>"><span><?= $subMainMenu["TEXT"] ?></span></a>
								<? if (!empty($subMainMenu["SUBMENU"])) : ?>
									<ul class="menu_lvl3">
										<? foreach ($subMainMenu["SUBMENU"] as $subMenu) : ?>
											<li>
											<a class="<?= !empty($subMenu["SELECTED"]) ? 'active' : '' ?>" href="<?= $subMenu["LINK"] ?>"><span><?= $subMenu["TEXT"] ?></span></a>
											</li>
										<? endforeach ?>
									</ul>
								<? endif ?>
							</li>
						<? endforeach ?>
					</ul>
				<? endif ?>
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>
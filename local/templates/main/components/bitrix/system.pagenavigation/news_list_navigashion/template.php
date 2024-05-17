<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>
<?
 $ferstEnter=true;
?>
<div class="number_bl">
	<a class="prev" href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] - 1 ?>"></a>
	<? do { ?>
		<? if (($arResult["nStartPage"] != 1) && ($ferstEnter)) : ?>
			<a  href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= 1 ?>" > <!-- Да это волшебные цыфры, но что поделаешь, ведь нужно как-то переходить на первую страницу -->
				<?= 1 ?>
			</a>
			<span>...</span>
		<?
			$ferstEnter = false;
			$arResult["nStartPage"]++;
			continue;
		endif;
		?>
		<? if (($arResult["nStartPage"] == $arResult["nEndPage"]) && ($arResult["nEndPage"] != $arResult["NavPageCount"])) : ?>
			<span>...</span>
			<a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">
				<?= $arResult["NavPageCount"] ?>
			</a>

		<?
			$arResult["nStartPage"]++;
			continue;
		endif;
		?>
		<a class='<?= $arResult["NavPageNomer"] == $arResult["nStartPage"]  ? "active" : "" ?>' href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>">
			<?= $arResult["nStartPage"] ?>
		</a>

		<?
		$ferstEnter = false;
		$arResult["nStartPage"]++;
		?>
	<? } while ($arResult["nStartPage"] <= $arResult["nEndPage"]); ?>
	<a class="next" href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageNomer"] + 1 ?>"></a>
</div>
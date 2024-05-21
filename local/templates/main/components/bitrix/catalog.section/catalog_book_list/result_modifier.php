<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


foreach ($arResult["ITEMS"] as $key => $arItem) {
    if (!empty($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"])&&($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] != 0)) {
        $discaunt = (100 - (int)$arItem["PROPERTIES"]["DISCOUNT"]["VALUE"]) / 100;
        $finalPrise = $arItem["PRICES"]["PRISE"]["VALUE"] * $discaunt;
        $arResult["ITEMS"][$key]["PRICES"]["PRICES_WHIS_DISCOUNT"] = $finalPrise;
    }
}

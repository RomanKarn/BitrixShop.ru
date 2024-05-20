<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();
if (!empty($arResult)) {
    if (!empty($arResult["PROPERTIES"]["DISCOUNT"]["VALUE"]) || ($arResult["PROPERTIES"]["DISCOUNT"]["VALUE"] != 0)) {
        $discaunt = (100 - (int)$arResult["PROPERTIES"]["DISCOUNT"]["VALUE"]) / 100;
        $finalPrise = $arResult["PRICES"]["PRISE"]["VALUE"] * $discaunt;
        $arResult["PRICES"]["PRICES_WHIS_DISCOUNT"] = $finalPrise;
    }

    $valuesId = $arResult["PROPERTIES"]["PICTURES"]["VALUE"];
    if (!empty($valuesId)) {
        foreach ($valuesId as $key => $idPhoto) {
            $arSrc = CFile::GetFileArray($idPhoto);
            if (!empty($arSrc)) {
                $arResult["PROPERTIES"]["PICTURES"]["PICTURES_SRC"][$key] = $arSrc["SRC"];
            }
        }
    }
}

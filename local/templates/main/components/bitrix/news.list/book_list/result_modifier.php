<?

foreach ($arResult["ITEMS"] as $key => $arItem) {
    if (!empty($arItem["PROPERTIES"]["PRISE"]["VALUE"])) {
        $arResult["ITEMS"][$key]["PRICES"]["PRISE"] = $arItem["PROPERTIES"]["PRISE"];
        if (($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] != 0) && !empty($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"])) {
            $discaunt = (100 - (int)$arItem["PROPERTIES"]["DISCOUNT"]["VALUE"]) / 100;
            $finalPrise = (int)$arItem["PROPERTIES"]["PRISE"]["VALUE"] * $discaunt;
            $arResult["ITEMS"][$key]["PRICES"]["PRICES_WHIS_DISCOUNT"] = $finalPrise;
        }
    }
}

<?
global $APPLICATION;
$arRezult = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"DEPTH_LEVEL" => "2",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"SECTION_URL" => "",
		"SEF_BASE_URL" => "/catalog/"
	)
);
foreach($arRezult as $key => $item)
{
	$arRezult[$key][3]["DEPTH_LEVEL"]+=1;
}

$aMenuLinks=array_merge(array_slice($aMenuLinks,0,1),$arRezult,array_slice($aMenuLinks,1));
?>
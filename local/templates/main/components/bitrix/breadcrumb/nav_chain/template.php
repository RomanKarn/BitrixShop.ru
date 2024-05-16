<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .=
'<div class="standart_width">
	<ul class="bread_crumbs not_style">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	if($arResult[$index]["LINK"] <>  "" && $index != $itemSize-1)
	{
		$strReturn .= '<li><a href="' . $arResult[$index]["LINK"]  . '">' . $arResult[$index]["TITLE"] . '</a></li>';
	}
	else
	{
		$strReturn .= '<li>' . $arResult[$index]["TITLE"] . '</li>';
	}
}

$strReturn .= '	</ul>
</div>';

return $strReturn;

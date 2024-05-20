<?
if(!empty($arResult))
{
	$arMenus =[];
	foreach($arResult as $key => $item)
	{
		if($item["DEPTH_LEVEL"]=== 1)
		{
			$arMenus[] = $item;
		}
        elseif($item["DEPTH_LEVEL"] === 2)
        {
            $arMenus[end(array_keys($arMenus))]["SUBMENU"][]=$item; 
        }
		else
		{
			$arMenus[end(array_keys($arMenus))]["SUBMENU"][end(array_keys($arMenus))]["SUBMENU"][]=$item; 
		}
	}
	$arResult =$arMenus;
}
?>
<?     
//Переводим работу элемента с элементов на разделы
unset($arResult['ITEMS']);   
                     
                   
$arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);   
while($ar_result = $db_list->Fetch()) {      
    $arResult['ITEMS'][] =  $ar_result;     
}

foreach($arResult['ITEMS'] as $arItemID => $arItem) {
    $arResult['ITEMS'][$arItemID]['DETAIL_PAGE_URL'] = $arItem['LIST_PAGE_URL'].$arItem['CODE'].'/';  
}
?>
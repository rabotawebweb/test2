<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
//echo '<pre>'; print_r($arParams); echo '</pre>';

$delete = 0;
CModule::IncludeModule('iblock');

$request = \Bitrix\Main\Context::getCurrent()->getRequest();
$city = (int) $request->getQuery("city");
//var_dump($city);

if( $city > 0 ):

$el = new CIBlockElement;
$arLoadProductArray = Array(
  "MODIFIED_BY"    => $USER->GetID(),
  "DETAIL_TEXT"    => "удален");
$res = $el->Update($city, $arLoadProductArray);

var_dump($res);
$delete = 1;
//CIBlock::clearIBlockTagCache( $iblock_id );
CBitrixComponent::clearComponentCache('city2:city2.list');

endif;


if ($this->StartResultCache(3600))
{
    $iblock_id = $arParams['IBLOCK_ID'];
    $arFilter = array('IBLOCK_ID'=>$iblock_id);
    $db_list = CIBlockElement::GetList(array('NAME'=>'ASC'), $arFilter, false, false, array("ID", "NAME", "CODE", "DETAIL_TEXT"));
    while($ar_result = $db_list->GetNext())
    {
        $arResult[] = array(
                    "ID" => $ar_result['ID'],
                    "CODE" => $ar_result['CODE'],
                    "NAME" => $ar_result['NAME'],
					"TEXT" => $ar_result['DETAIL_TEXT'],
                   );
    }
    // echo '<pre>'; print_r($arResult); echo '</pre>';
    $this->IncludeComponentTemplate();
}
?>
<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
 
$arComponentParameters = array(
    'PARAMETERS' => array(
        'IBLOCK_ID' => array(
            'NAME' => 'Id инфоблока',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
            ),
        'CACHE_TIME'  =>  array('DEFAULT'=>3600),
    ),
);
?>
<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "CITIES" => array(
            "NAME" => Loc::getMessage("NAMES_OF_CITIES"),
            "DESCRIPTION" => Loc::getMessage("OUTPUT_NAME_OF_CITIES"),
            "STRING" => "",
            "MULTIPLE" => "Y"
        )
    )
);

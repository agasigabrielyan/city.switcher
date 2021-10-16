<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;

class CitySwitcher extends \CBitrixComponent {

    public function getCurrentCityInCookie() {
        $cityOfSwitcher = "";

        if(isset($_COOKIE['CITY_OF_SWITCHER'])) {
            $cityOfSwitcher = $_COOKIE['CITY_OF_SWITCHER'];
        } else {
            setcookie("CITY_OF_SWITCHER","Москва");
            $cityOfSwitcher = $_COOKIE['CITY_OF_SWITCHER'];
        }
        return $cityOfSwitcher;
    }

    public function getCities() {
        $cities = [];
        foreach ($this->arParams['CITIES'] as $city) {
            if(strlen($city)>0) {
                $cities[] = $city;
            }
        }
        return $cities;
    }

    public function executeComponent()
    {
        $this->arResult['CITY_OF_SWITCHER'] = $this->getCurrentCityInCookie();
        $this->arResult['CITIES'] = $this->getCities();
        $this->includeComponentTemplate();
    }
}
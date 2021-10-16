<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
?>

<label class="header-top__geo-box">
    <img src="/bitrix/templates/teamlight/assets/img/geo-icon.svg" alt="" class="header-top__geo-icon">
    <select class="header-top__geo">
        <?php foreach ($arResult['CITIES'] as $key => $city): ?>
            <option
                    <?= $arResult['CITY_OF_SWITCHER'] === $city ? 'selected' : '' ?>
                    value="<?= $city?>"
                    class="header-top__geo-item">
                <?= $city; ?>
            </option>
        <? endforeach; ?>
    </select>
</label>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<div class="hd_header_area">
    <div class="hd_header">
        <table>
            <tr>
                <td rowspan="2" class="hd_companyname">
                    <h1>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => "/include/logo.php"
                            ),
                            false
                        );?>
                    </h1>
                </td>
                <td rowspan="2" class="hd_txarea">
						<span class="tel"> <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => "/include/phone_top.php"
                                ),
                                false
                            );?></span>	<br/>
                    <?=GetMessage("WORKING_TIME")?><span class="workhours">ежедневно с 9-00 до 19-00</span>
                </td>
                <td style="width:232px">
                    <form action="">
                        <div class="hd_search_form" style="float:right;">
                            <input placeholder="Поиск" type="text"/>
                            <input type="submit" value=""/>
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="padding-top: 11px;">
                    <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
                        "FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
                        "PROFILE_URL" => "/user/profile.php",	// Страница профиля
                        "REGISTER_URL" => "/user/registratsiya.php",	// Страница регистрации
                        "SHOW_ERRORS" => "Y",	// Показывать ошибки
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                        false
                    );?>
                </td>
            </tr>
        </table>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_multi", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => "horizontal_multilevel"
        ),
            false
        );?>
    </div>
</div>

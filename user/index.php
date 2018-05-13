<?
define("NEED_AUTH",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(is_set($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"]) > 0){
    LocalRedirect($backurl);
}
$APPLICATION->SetTitle("Пользователь");
?>
    <p>Вы зарегистрировались и успешно авторизовались</p>
    <a href="<?=SITE_DIR?>">Вернуться на главную</a>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
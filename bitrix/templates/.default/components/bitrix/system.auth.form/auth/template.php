<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>

<?
//	test_dump($arResult,false,true);
	if($arResult["FORM_TYPE"] == "login"):?>

	<?if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR']) ShowMessage($arResult['ERROR_MESSAGE']);?>
	<span class="hd_singin">
		<a id="hd_singin_but_open" href="">Войти на сайт</a>
		<div class="hd_loginform">

			<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
				<?if($arResult["BACKURL"] <> ''):?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?endif?>

				<?foreach ($arResult["POST"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>

				<input type="hidden" name="AUTH_FORM" value="Y" />
				<input type="hidden" name="TYPE" value="AUTH" />

				<input placeholder="<?=GetMessage("AUTH_LOGIN")?>" type="text" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" />
				<input placeholder="<?=GetMessage("AUTH_PASSWORD")?>" type="password" name="USER_PASSWORD"/>

				<noindex>
					<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="hd_forgotpassword" rel="nofollow">
                        <?=GetMessage("AUTH_FORGOT_PASSWORD_2")?>
                    </a>
				</noindex>

				<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                        <div class="head_remember_me" style="margin-top: 10px">
                            <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
                            <label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>">
                                <?echo GetMessage("AUTH_REMEMBER_SHORT")?>
                            </label>
                        </div>
                    <?endif?>

                    <input type="submit" style="margin-top: 20px;"  name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
                </form>
                <span class="hd_close_loginform">Закрыть</span>
            </div>
        </span>
        <br>

        <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
        <noindex>
            <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="hd_signup" rel="nofollow">
                <?=GetMessage("AUTH_REGISTER")?>
            </a>
        </noindex>
        <?endif?>

    <?else:?>

        <span class="hd_sing">
            <?=$arResult["USER_NAME"]?> [<a href="<?=$arResult["PROFILE_URL"]?>"><?=$arResult["USER_LOGIN"]?></a>]
        </span>
        <a href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
     "login",
     "logout",
     "register",
     "forgot_password",
     "change_password"));?>" class="hd_signup"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>

    <?endif?>

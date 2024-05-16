<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="small_standart_width">
<? 
	if ($arResult["OK_MESSAGE"] <> '') 
	{
	?>
	<div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div>
	<?}?>
                <div class="application_form">
                    <form id="contact-form" action="<?= POST_FORM_ACTION_URI ?>" method="post">
					<?= bitrix_sessid_post() ?>
                        <div  class="application_el textarea">
                            <textarea name="MESSAGE" <?= !empty($arResult["ERROR_MESSAGE"]["MESSAGE"]) ? 'class="error"' : 'class="true"' ?> placeholder="Вопрос или сообщение"><?= $arResult["MESSAGE"] ?></textarea>
                        </div>
                        <div class="application_el">
                            <input name="user_name"  <?= !empty($arResult["ERROR_MESSAGE"]["NAME"]) ? 'class="error"' : 'class="true"' ?> type="text" placeholder="Ваше имя" value='<?= $arResult["AUTHOR_NAME"] ?>'>
                        </div>
                        <div class="application_el">
                            <input name="user_email"  <?= !empty($arResult["ERROR_MESSAGE"]["EMAIL"]) ? 'class="error"' : 'class="true"' ?> type="email" placeholder="Email" value='<?= $arResult["AUTHOR_EMAIL"] ?>' />
                        </div>
                        <div class="application_el">
                            <input name="user_phone"  <?= !empty($arResult["ERROR_MESSAGE"]["PHONE"]) ? 'class="error"' : 'class="true"' ?> type="tel" placeholder="Телефон" value='<?= $arResult["AUTHOR_PHONE"] ?>' />
                        </div>
                        <div class="popup_form prava styler">
                            <label>
                                <input type="checkbox" />
                                <span>Я принимаю <a href="">условия передачи данных</a></span>
                            </label>
                        </div>
                        <div class="application_bt">
							<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
							<input class="red_bt" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
                        </div>
                    </form>
                </div>
            </div>
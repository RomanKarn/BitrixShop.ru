<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<section>
    <div class="bread_crumbs_bl">
        <div class="standart_width">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "nav_chain",
                array(
                    "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                ),
                false
            ); ?>
        </div>
    </div>
    <div class="white_bg">
        <div class="standart_width">
            <h1>Контакты</h1>
            <div class="cont_el">
                <i><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/location-pin.png" alt="" /></i>
                <p>Воронежская обл., г.Лиски, ул. 40 лет Октября, 25,</p>
                <div><a href="">Показать на карте</a></div>
            </div>
            <div class="cont_el">
                <i><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/telephone.png" alt="" /></i>
                <p>Телефон:</p>
                <p>
                    <a href="tel:+74953634572">+7 495 363-45-72,</a>
                    <a href="tel:+74732029172">+7 473 202-91-72</a>
                </p>
            </div>
            <div class="cont_el">
                <i><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/email_cont.png" alt="" /></i>
                <p>E-mail:</p>
                <p><a href="mailto:info@salavey.net">info@salavey.net</a></p>
            </div>
            <div>

            </div>
            <div class="gray_bg application_form_bl">
                <div class="standart_width">
                    <div class="title">Консультация</div>
                    <? $APPLICATION->IncludeComponent(
                        "myComponents:main.feedback",
                        "feetback_forms",
                        array(
                            "EMAIL_TO" => "stalker.karnuhov@yandex.ru",
                            "EVENT_MESSAGE_ID" => array("7"),
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "REQUIRED_FIELDS" => array("NAME", "EMAIL", "MESSAGE", "PHONE"),
                            "USE_CAPTCHA" => "N"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="cont_map">
        <img src="./img/yandex_map.png" alt="" />
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
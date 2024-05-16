<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
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
			<h1>Способы доставки</h1>
			<div class="dostavka_el">
				<div class="dostavka_el_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/dostavka1.png" alt="" /></div>
				<div class="dostavka_el_cont">
					<div class="h5">1. Федеральное государственное унитарное предприятие ФГУП «Почта России»</div>
					<p>Ваш заказ будет передан в Почту России. Вы сможете его получить в Вашем почтовом отделении. <br />Обычно, доставка товара по России составляет от 1 недели, но возможны задержки, связанные с расстоянием до получателя.</p>
					<p>Стоимость доставки согласно тарифам <a href="https://www.pochta.ru/parcels">Почты России</a></p>
				</div>
			</div>
			<div class="dostavka_el">
				<div class="dostavka_el_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/dostavka2.png" alt="" /></div>
				<div class="dostavka_el_cont">
					<div class="h5">2. Пункты выдачи</div>
					<p>Вы можете получить Ваш заказ в пунктах выдачи товара в Вашем городе. После того, как заказ будет доставлен в пункт выдачи, оператор свяжется с вами, и сообщит о том, что вы можете забрать товар. Срок доставки товара в пункт выдачи составляет от 1 дня, в зависимости от выбора пункта выдачи. При отсутствии товара на складе его доставка может продлиться от одного до двух месяцев. Товар будет ожидать Вас в течение 14 дней, после чего ваш заказ аннулируется.</p>
					<p>Стоимость доставки - бесплатно.</p>
				</div>
			</div>
		</div>
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
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>

<section>
		<div class="bread_crumbs_bl">
			<div class="standart_width">
				<ul class="bread_crumbs not_style">
					<li><a href="">Главная</a></li>
					<li>О компании</li>
				</ul>
			</div>
		</div>
		<div class="white_bg">
				<div class="standart_width">
				<div class="title">О компании</div>
				<div class="small_standart_width">
					<p>Повседневная практика показывает, что реализация намеченных плановых <br/>заданий обеспечивает актуальность соответствующих условий активизации.</p>
					<p>Предварительные выводы неутешительны: существующая теория однозначно фиксирует необходимость поэтапного и последовательного развития общества. <br/>В частности, курс на социально-ориентированный национальный проект способствует подготовке и реализации системы обучения кадров, соответствующей насущным потребностям.</p>
					<img align="center" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about_img1.png" alt=""/>
					<p>Сложно сказать, почему действия представителей оппозиции призывают нас к новым свершениям, которые, в свою очередь, должны быть смешаны с неуникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Принимая во внимание показатели успешности, экономическая повестка сегодняшнего дня предопределяет высокую востребованность инновационных методов управления процессами. Некоторые особенности внутренней политимки представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть призваны к ответу. Приятно, граждане, наблюдать, как непосредственные участники технического прогресса преданы социально-демократической анафеме. Каждый из нас понимает очевидную вещь: существующая теория, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для своевременного выполнения сверхзадачи. Таким образом, высококачественный прототип будущего проекта требует от нас анализа распределения внутренних резервов и ресурсов.</p>
				</div>
			</div>
		</div>
		<div class="gray_bg application_form_bl">
			<div class="standart_width">
				<div class="title">Отправить заявку</div>
				<div class="small_standart_width">
					<div class="application_form">
						<form>
							<div class="application_el textarea">
								<textarea placeholder="Вопрос или сообщение"></textarea>
							</div>
							<div class="application_el">
								<input type="text" placeholder="Ваше имя"/>
							</div>
							<div class="application_el">
								<input class="error" type="email" placeholder="Email"/>
							</div>
							<div class="application_el">
								<input class="true" type="tel" placeholder="Телефон"/>
							</div>
							<div class="popup_form prava styler">
								<label>
									<input type="checkbox"/>
									<span>Я принимаю <a href="">условия передачи данных</a></span>
								</label>
							</div>
							<div class="application_bt">
								<a class="red_bt" href="">Отправить</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
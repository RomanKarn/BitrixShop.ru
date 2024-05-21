<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
<section>
    <div class="gray_bg">
        <div class="standart_width">
            <div class="title">Популярные товары</div>
            <div class="catalog_list">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "book_list",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "N",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "6",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("AUTHORS", "PROMO", "BESTSELLER", "NEW", "RATING", "DISCOUNT", "PRISE", ""),
                        "SEF_FOLDER" => "/catalog/",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        'FAVORIT' => json_decode($_COOKIE['favorit'])
                    )
                ); ?>
            </div>
        </div>
    </div>
    <div class="white_bg">
        <div class="standart_width">
            <div class="title">Преимущества</div>
            <div class="advantage_list">
                <div class="advantage_el">
                    <div class="advantage_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/advantage1.png" alt="" /></div>
                    <div class="advantage_tit">Первые среди всех.</div>
                    <div class="advantage_txt">А также реплицированные с зарубежных источников, современные исследования могут быть объединены в целые кластеры себе подобных.</div>
                </div>
                <div class="advantage_el">
                    <div class="advantage_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/advantage2.png" alt="" /></div>
                    <div class="advantage_tit">Качественный контент.</div>
                    <div class="advantage_txt">Ясность нашей позиции очевидна: сплоченность команды профессионалов способствует подготовке и реализации новых предложений!</div>
                </div>
                <div class="advantage_el">
                    <div class="advantage_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/advantage3.png" alt="" /></div>
                    <div class="advantage_tit">Знания великих.</div>
                    <div class="advantage_txt">Значимость этих проблем настолько очевидна, что экономическая повестка сегодняшнего дня создает предпосылки для анализа существующих паттернов поведения.</div>
                </div>
                <div class="advantage_el">
                    <div class="advantage_img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/advantage4.png" alt="" /></div>
                    <div class="advantage_tit">Практика.</div>
                    <div class="advantage_txt">Прежде всего, реализация намеченных плановых заданий позволяет выполнить важные задания по разработке укрепления моральных ценностей.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_bl">
        <div class="about_img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about.png" alt="" />
        </div>
        <div class="about_txt">
            <div class="h2">О компании</div>
            <p>Повседневная практика показывает, что реализация намеченных плановых заданий обеспечивает актуальность соответствующих условий активизации.</p>
            <p>Предварительные выводы неутешительны: существующая теория однозначно фиксирует необходимость поэтапного и последовательного развития общества.
                В частности, курс на социально-ориентированный национальный проект способствует подготовке и реализации системы обучения кадров, соответствующей насущным потребностям.</p>
            <a class="blue_bt" href="/o-nas/">Узнать больше</a>
        </div>
    </div>
    <div class="white_bg">
        <div class="standart_width">
            <div class="title">Новости</div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news_list_mane_page",
                array(
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "N",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM", "SHOW_COUNTER", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "3",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
            <div class="all_bt_bl">
                <a class="all_bt" href="/news/">Все новости</a>
            </div>
        </div>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
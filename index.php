<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Компания Alta Group");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "3",	// Код информационного блока
		"IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "81",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Слайдер",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "350",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "mark",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>


        <section class="main-company">
            <header class="main-company__header">
                <h2 class="main-company__title">Компания Alta Group</h2>
            </header>
            <div class="main-company__main">
                <article class="main-company__item">
                    <a href="#" class="main-company__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-company-1.svg" alt="">

                    </a>
                    <a class="main-company__link" href="#">
                        <h3 class="main-company__name">УСобственное производство и склад</h3>
                    </a>
                </article>
                <article class="main-company__item">
                    <a href="#" class="main-company__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-company-2.svg" alt="">

                    </a>
                    <a class="main-company__link" href="#">
                        <h3 class="main-company__name">Научно- исследовательская база и лаборатория</h3>
                    </a>
                </article>
                <article class="main-company__item">
                    <a href="#" class="main-company__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-company-3.svg" alt="">

                    </a>
                    <a class="main-company__link" href="#">
                        <h3 class="main-company__name">Собственные
                            запатентованные
                            разработки</h3>
                    </a>
                </article>
                <article class="main-company__item">
                    <a href="#" class="main-company__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-company-4.svg" alt="">

                    </a>
                    <a class="main-company__link" href="#">
                        <h3 class="main-company__name">Программы
                            с ведущими
                            вузами отрасли</h3>
                    </a>
                </article>
                <article class="main-company__item">
                    <a href="#" class="main-company__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-company-5.svg" alt="">

                    </a>
                    <a class="main-company__link" href="#">
                        <h3 class="main-company__name">Широкая
                            дилерская
                            сеть</h3>
                    </a>
                </article>
            </div>
            <footer class="main-company__footer">
                <p>Компания Alta Group более 10 лет предлагает комплексный подход к водоочистке, являясь российским
                    производителем очистных сооружений для хозяйственно-бытовых, поверхностных и производственных
                    сточных вод, а также продукции для наружных инженерных сетей.</p>
                <a class="main-company__btn" href="#">Подробнее о компании</a>
            </footer>
        </section>

        <section class="main-products">
            <header class="main-products__header">
                <h2 class="main-products__title">Основная продукция</h2>
            </header>
            <div class="main-products__main">
                <article class="main-products__item">
                    <div href="#" class="main-products__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                    </div>

                    <h3 class="main-products__name">Alta Air Master</h3>
                    <p class="main-products__anons">Локальные очистные сооружения</p>
                    <div class="main-products__feature">Производительность</div>
                    <p class="main-products__num">4-10 м³ / сутки</p>
                    <a class="main-products__btn" href="#">Подробнее</a>
                </article>
                <article class="main-products__item">
                    <div href="#" class="main-products__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                    </div>

                    <h3 class="main-products__name">Alta Air Master</h3>
                    <p class="main-products__anons">Локальные очистные сооружения</p>
                    <div class="main-products__feature">Производительность</div>
                    <p class="main-products__num">4-10 м³ / сутки</p>
                    <a class="main-products__btn" href="#">Подробнее</a>
                </article>
                <article class="main-products__item">
                    <div href="#" class="main-products__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                    </div>

                    <h3 class="main-products__name">Alta Air Master</h3>
                    <p class="main-products__anons">Локальные очистные сооружения</p>
                    <div class="main-products__feature">Производительность</div>
                    <p class="main-products__num">4-10 м³ / сутки</p>
                    <a class="main-products__btn" href="#">Подробнее</a>
                </article>
            </div>
        </section>

        <section class="main-equipment">
            <header class="main-equipment__header">
                <h2 class="main-equipment__title">Наше оборудование</h2>
            </header>
            <div class="main-equipment__category">
                <div>
                    <h3 class="access">Для частного дома</h3>
                    <p>— Загородные дома</p>
                    <p>— Коттеджи</p>
                    <p>— Дачи</p>
                </div>
                <div>
                    <h3 class="primary">Для городов и поселков</h3>
                    <p>— Ливневая канализация</p>
                    <p>— Хозяйственно-бытовая канализация</p>
                    <p>— Канализация для паркингов</p>
                    <p>— Системы повторного использования воды для автомоек</p>
                    <p>— Мобильные очистные комплексы для вахтовых посёлков</p>
                </div>
                <div>
                    <h3 class="warning">Для производства</h3>
                    <p>— Птицефабрики</p>
                    <p>— Молокозаводы</p>
                    <p>— Мясокомбинаты</p>
                </div>
            </div>

            <div class="main-equipment__select">
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Очистные сооружения
                        хозяйственно-бытовых
                        и промышленных стоков</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Очистные сооружения
                        поверхностных стоков
                        / ливневых, дождевых /</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Установки
                        обеззараживания сточных
                        вод ультрафиолетом</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Блоки доочистки стока от особо стойких
                        загрязнений</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>

                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Канализационные
                        насосные станции</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Шкафы и блоки
                        управления насосами</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Система удаленного
                        мониторинга /
                        SMS оповещения</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Система контроля
                        раздела уровня сред</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Накопительные
                        ёмкости</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Колодцы</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Жироуловители</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Пескоуловители</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__item">
                    <p class="main-equipment__anons">Муфты</p>
                    <h4 class="main-equipment__name">Alta Air Master</h4>
                </div>
                <div class="main-equipment__group">
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Осаждающая химия</p>
                    </div>
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Биофильтры</p>
                    </div>
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Горловина</p>
                    </div>
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Крышки</p>
                    </div>
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Горловина</p>
                    </div>
                    <div class="main-equipment__item dop">
                        <p class="main-equipment__anons">Крышки</p>
                    </div>
                </div>
                <div class="main-equipment__logo">
                    <h5>Alta Group</h5>
                    <p>Малогабаритное оборудование для биологической
                        и химической очистки бытовых и производственных сточных вод</p>
                </div>
            </div>
        </section>

        <section class="main-news">
            <header class="main-news__header">
                <h2 class="main-news__title">Новости</h2>
            </header>
            <div class="main-news__main">
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark"></div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">16 Апреля 2019</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark"></div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">16 Апреля 2019</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark"></div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">16 Апреля 2019</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark"></div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">16 Апреля 2019</p>
                    </a>
                </article>
            </div>
            <footer class="main-news__footer">
                <a class="main-news__btn" href="#">Больше новостей</a>
            </footer>
        </section>
        <section class="main-news">
            <header class="main-news__header">
                <h2 class="main-news__title">Наши проекты</h2>
            </header>
            <div class="main-news__main">
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark">Алматинская область</div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">Хозяйственно-бытовой сток / Производительность: 2 000 м³</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark">Алматы</div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">Хозяйственно-бытовой сток / Производительность: 2 000 м³</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark">Алматы</div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">Хозяйственно-бытовой сток / Производительность: 2 000 м³</p>
                    </a>
                </article>
                <article class="main-news__item">
                    <a href="#" class="main-news__img">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img//main-news.png" alt="">
                        <div class="main-news__mark">Нур-Султан</div>
                    </a>
                    <a class="main-news__link" href="#">
                        <h3 class="main-news__name">Ужесточение требований к очистке стоков предприятий</h3>
                        <p class="main-news__anons">Хозяйственно-бытовой сток / Производительность: 2 000 м³</p>
                    </a>
                </article>
            </div>
            <footer class="main-news__footer">
                <a class="main-news__btn" href="#">Больше проектов</a>
            </footer>
        </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
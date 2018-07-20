
<!--ссылки соц сетей в футере-->
<!--ссылки способов оплаты в футере-->
<!--ссылки меню в футере--><!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Админка</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE = edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css"><!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
</head>
<body class="about-us-page">
<div class="wrapper">
    <header>
        <div class="header-top">
            <div class="container"><a class="logo header-logo header-nav__link" href="../index.php"><img class="head-logo" src="../static/img/svg/head-logo.png"></a>
                <div class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header__phone header-nav__link" href="tel:375255027943">375 25 502-79-43</a></li>
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-callback">обратный звонок</a></li>
                    </ul>
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-howorder">как заказать
                            <svg class="icon icon-list ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#list"></use>
                            </svg></a></li>
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-howpay">оплата
                            <svg class="icon icon-payment ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#payment"></use>
                            </svg></a></li>
                    </ul>
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header-nav__link" href="javascript:void(0)">войти
                            <svg class="icon icon-login ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#login"></use>
                            </svg></a></li>
                        <li class="header-nav__item"><a class="header-nav__link" href="javascript:void(0)">регистрация
                            <svg class="icon icon-registration ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#registration"></use>
                            </svg></a></li>
                    </ul>
                    <ul class="header-nav__user">
                        <li class="header-nav__item--user">
                            <div class="header-nav__user-icon">
                                <svg class="icon icon-favorites ">
                                    <use xlink:href="../static/img/svg/symbol/sprite.svg#favorites"></use>
                                </svg>
                            </div><a class="header-nav__link-user" href="javascript:void(0)">избранное</a>
                        </li>
                        <li class="header-nav__item--user">
                            <div class="header-nav__user-icon">
                                <svg class="icon icon-basket ">
                                    <use xlink:href="../static/img/svg/symbol/sprite.svg#basket"></use>
                                </svg>
                            </div><a class="header-nav__link-user" href="../pages/main/cart.php">корзина</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/guitars-catalog.php">гитары</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/pianos-catalog.php">клавишные</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/drums-catalog.php">ударные</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/soundequip.php">звуковое оборудование</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/commutation.php">коммутация</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="../pages/main/microphone.php">микрофоны</a></li>
                    </ul>
                    <ul class="main-nav__list">
                        <li class="main-nav__item"><a class="main-nav__link" href="tel:375255027943">375 (25) 502-79-43</a></li>
                    </ul>
                    <div class="header-search search">
                        <content>
                            <input class="hamburger" id="hamburger" type="checkbox">
                            <label class="hamburger" for="hamburger"><i></i>
                                <text>
                                    <close>close</close>
                                    <open>menu</open>
                                </text>
                            </label>
                            <section class="drawer-list">
                                <ul class="hamburger-nav__list">
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="../index.php">Главная</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="#">Войти</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="#">Регистрация</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="#">Отзывы</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="../pages/main/news.php">Новости</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link popup-with-form" href="#form-howorder">Как Заказать</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link popup-with-form" href="#form-howpay">Оплата</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link popup-with-form" href="#form-contacts">контакты</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link popup-with-form" href="#form-callback">Обратный звонок</a></li>
                                </ul>
                            </section>
                        </content>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <form class="zoom-anim-dialog mfp-hide" id="form-callback" method="post">
        <div class="success"><span>Спасибо за заявку!</span></div>
        <input type="hidden" name="project_name" value="Etude">
        <input type="hidden" name="admin_email" value="webdevcoder@mail.ru">
        <input type="hidden" name="form_subject" value="Заявка с сайта">
        <div class="form-header">Оставить Заявку</div>
        <p class="header-callback__text">Оставьте заявку и мы тут же с вами свяжемся</p>
        <input class="input__callback" type="text" name="Имя" placeholder="Ваше имя..." required>
        <input class="input__callback" type="text" name="Телефон" placeholder="Ваш телефон..." required>
        <div class="content-center">
            <button class="g-btn order-button">Отправить</button>
        </div>
    </form>
    <form class="zoom-anim-dialog mfp-hide" id="form-howorder">
        <div class="form-header">Как Заказать?</div>
        <p class="how-order__text">1. Выберите понравившийся вам товар и добавьте его в корзину, нажав на соответствующую кнопку.</p>
        <p class="how-order__text">2. После добавления товара в корзину вы можете продолжить выбирать музыкальные инструменты и звуковое оборудование, нажав на кнопку "В каталог", или приступить к оформлению заказа. Кнопка "В корзину".</p>
        <p class="how-order__text">3. Перейдя в корзину, вы также можете выбрать, что делать дальше: вернуться в каталог или на главную страницу. Вы можете увеличить количество единиц каждого отдельного товара, удалить позиции или приступить к оформлению заказа.</p>
        <p class="how-order__text">4. Чтобы оформить заказ вы можете зарегистрироваться на сайте или оформить покупку как гость, выбрав в корзине "купить в 1 клик". Преимущества регистрации - возможность получать рассылки об актуальных скидках и новостях магазина, а также возможность сохранить свои данные в Личном кабинете и не вводить их повторно при следующем заказе.</p>
        <p class="how-order__text">5. Далее вам необходимо предоставить информацию о себе: ФИО, номер телефона и адрес электронной почты для подтверждения заказа. Пожалуйста, указывайте актуальную и достоверную информацию о себе. В противном случае заказ не будет обработан.</p>
    </form>
    <form class="zoom-anim-dialog mfp-hide" id="form-howpay">
        <div class="form-header">Оплата</div>
        <p class="how-pay__text">В СООТВЕТСТВИИ С ЗАКОНОДАТЕЛЬСТВОМ РЕСПУБЛИКИ БЕЛАРУСЬ, РАСЧЕТ ОСУЩЕСТВЛЯЕТСЯ В БЕЛОРУССКИХ РУБЛЯХ.</p>
        <p class="how-pay__text">1. НАЛИЧНЫМИ ДЕНЬГАМИ производится при бесплатной доставке товара курьером покупателю в г. Гомеле, а также при самовывозе.</p>
        <p class="how-pay__text">2. ПЛАСТИКОВОЙ КАРТОЙ через терминал - при бесплатной доставке товара курьером покупателю в г. Гомеле, а также при самовывозе. При оплате пластиковой картой курьеру, покупатель должен уведомить об этом заранее по телефону или в комментарии к заказу.</p>
        <p class="how-pay__text">3. БАНКОВСКОЙ КАРТОЧКОЙ ЧЕРЕЗ ИНТЕРНЕТ:</p>
        <p class="how-pay__text">Мы принимаем:
            <svg class="icon icon-visa ">
                <use xlink:href="../static/img/svg/symbol/sprite.svg#visa"></use>
            </svg>
        </p>
    </form>
    <form class="zoom-anim-dialog mfp-hide" id="form-contacts">
        <div class="form-header">Контакты</div>
        <div class="contacts__item">
            <p><img class="contacts-img" src="../static/img/svg/support.png" alt="контакты"><a class="contacts__link" href="tel:375255027943">375 (25) 502-79-43</a></p>
            <p><img class="contacts-img" src="../static/img/svg/pin.png" alt="контакты">г.Гомель Пр. Ленина 20/19</p>
        </div>
        <div class="map__item">
            <div class="ymap-container">
                <div class="loader loader-default"></div>
                <div id="map-yandex"></div>
            </div>
        </div>
    </form>
    <div class="content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="../index.php">Главная</a></li>
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="javascript:void(0);">=></a></li>
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="admin.php">Админка</a></li>
                </ul>
            </div>
        </section>
        <section class="admin">
            <div class="container">
                <h2 class="g-section-title">Категории</h2>
                <div class="admin-container">
                <ul class="categories-list">
                    <li class="categories__item active" show-tab="categor__1">Коммутация</li>
                    <li class="categories__item" show-tab="categor__2">Ударные</li>
                    <li class="categories__item" show-tab="categor__3">Гитары</li>
                    <li class="categories__item" show-tab="categor__4">Наушники</li>
                    <li class="categories__item" show-tab="categor__5">Микрофоны</li>
                    <li class="categories__item" show-tab="categor__6">Новинки</li>
                    <li class="categories__item" show-tab="categor__7">Клавишные</li>
                    <li class="categories__item" show-tab="categor__8">Оборудование</li>
                </ul>
                <div class="content-admin__cart">
                    <div class="admin-cont__item categor__1 active">
                        <div class="select-categor__1 select-categor"></div>
                        <input type="hidden" id="gid">
                        <input type="text" placeholder="Наименование" id="gname">
                        <input type="text" placeholder="артикул" id="garticul">
                        <input type="text" placeholder="Торгов. Марка" id="gtradeMark">
                        <input type="text" placeholder="серия" id="gseria3">
                        <input type="text" placeholder="цена" id="gcost">
                        <input type="text" placeholder="наличие" id="gnalichie">
                        <input type="text" placeholder="Глав. изображ №1" id="gmainPhoto1">
                        <input type="text" placeholder="Глав. изображ №2" id="gmainPhoto2">
                        <input type="text" placeholder="Фото для попапа №1" id="gpopupPhoto1">
                        <input type="text" placeholder="Фото для попапа №2" id="gpopupPhoto2">
                        <input type="text" placeholder="Характеристика №1" id="gcharacter1Key">
                        <input type="text" placeholder="Информация" id="gcharacter1Info">
                        <input type="text" placeholder="Характеристика №2" id="gcharacter2Key">
                        <input type="text" placeholder="Информация" id="gcharacter2Info">
                        <input type="text" placeholder="Характеристика №3" id="gcharacter3Key">
                        <input type="text" placeholder="Информация" id="gcharacter3Info">
                        <input type="text" placeholder="Характеристика №4" id="gcharacter4Key">
                        <input type="text" placeholder="Информация" id="gcharacter4Info">
                        <input type="text" placeholder="Изображ. Бренда" id="gbrendPhoto">
                        <textarea placeholder="О бренде" id="gaboutBrend"></textarea>
                        <input type="text" placeholder="Заголовок 1" id="gbrendTitle1">
                        <textarea placeholder="Текст" id="gbrendText1"></textarea>
                        <textarea placeholder="Текст" id="gbrendText2"></textarea>
                        <input type="text" placeholder="Заголовок 2" id="gbrendTitle2">
                        <textarea placeholder="Текст" id="gbrendText3"></textarea>
                        <textarea placeholder="Текст" id="gbrendText4"></textarea>
                        <textarea placeholder="Крат. описание" id="gshortdescr"></textarea>
                        <a class="g-btn add-to-db1">Добавить</a>
                    </div>
                    <div class="admin-cont__item categor__2">
                        <div class="select-categor__2 select-categor"></div>
                        <input type="hidden" id="gid2">
                        <input type="text" placeholder="Наименование" id="gname2">
                        <input type="text" placeholder="артикул" id="garticul2">
                        <input type="text" placeholder="Торгов. Марка" id="gtradeMark2">
                        <input type="text" placeholder="серия" id="gseria32">
                        <input type="text" placeholder="цена" id="gcost2">
                        <input type="text" placeholder="наличие" id="gnalichie">
                        <input type="text" placeholder="Глав. изображ №1" id="gmainPhoto12">
                        <input type="text" placeholder="Глав. изображ №2" id="gmainPhoto22">
                        <input type="text" placeholder="Фото для попапа №1" id="gpopupPhoto12">
                        <input type="text" placeholder="Фото для попапа №2" id="gpopupPhoto22">
                        <input type="text" placeholder="Характеристика №1" id="gcharacter1Key2">
                        <input type="text" placeholder="Информация" id="gcharacter1Info2">
                        <input type="text" placeholder="Характеристика №2" id="gcharacter2Key2">
                        <input type="text" placeholder="Информация" id="gcharacter2Info2">
                        <input type="text" placeholder="Характеристика №3" id="gcharacter3Key2">
                        <input type="text" placeholder="Информация" id="gcharacter3Info2">
                        <input type="text" placeholder="Характеристика №4" id="gcharacter4Key2">
                        <input type="text" placeholder="Информация" id="gcharacter4Info2">
                        <input type="text" placeholder="Изображ. Бренда" id="gbrendPhoto2">
                        <textarea placeholder="О бренде" id="gaboutBrend"></textarea>
                        <input type="text" placeholder="Заголовок 1" id="gbrendTitle12">
                        <textarea placeholder="Текст" id="gbrendText12"></textarea>
                        <textarea placeholder="Текст" id="gbrendText22"></textarea>
                        <input type="text" placeholder="Заголовок 2" id="gbrendTitle22">
                        <textarea placeholder="Текст" id="gbrendText32"></textarea>
                        <textarea placeholder="Текст" id="gbrendText42"></textarea>
                        <textarea placeholder="Крат. описание" id="gshortdescr2"></textarea>
                        <a class="g-btn add-to-db2">Добавить</a>
                    </div>
                    <div class="admin-cont__item categor__3">
                        <div class="select-categor__3 select-categor"></div>
                    </div>
                    <div class="admin-cont__item categor__4">
                        <div class="select-categor__4 select-categor"></div>
                    </div>
                    <div class="admin-cont__item categor__5">
                        <div class="select-categor__5 select-categor"></div>
                    </div>
                    <div class="admin-cont__item categor__6">
                        <div class="select-categor__6 select-categor"></div>
                    </div>
                    <div class="admin-cont__item categor__7">
                        <div class="select-categor__7 select-categor"></div>
                    </div>
                    <div class="admin-cont__item categor__8">
                        <div class="select-categor__8 select-categor"></div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-copyright"><span class="copyright">@ 2018, Кузьменко Н.А.</span>
                    <ul class="social-list footer-social__list">
                        <li class="social-list__item"><a class="social-list__link" href="https://vk.com/id276698275">
                            <svg class="icon icon-vk-social ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#vk-social"></use>
                            </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://www.instagram.com/nikita_unkind_/">
                            <svg class="icon icon-instagram-logo ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#instagram-logo"></use>
                            </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://github.com/WebDevCoder">
                            <svg class="icon icon-github-big-logo ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#github-big-logo"></use>
                            </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://t.me/nikita_unkind">
                            <svg class="icon icon-telegram-logo ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#telegram-logo"></use>
                            </svg></a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <ul class="footer-nav__list">
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link" href="#form-howorder">Как заказать</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link" href="#form-howpay">Оплата</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link">Акции</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link">Новики</a></li>
                    </ul>
                    <ul class="footer-nav__list">
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link">Бренды</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link">ВидеоОбзоры</a></li>
                        <li class="footer-nav__item"><a class="footer-nav__link" href="news.html">Новости</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link" href="#form-contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="payment-nav"><span class="payment-type__title">Мы принимаем</span>
                    <ul class="payment-type__list">
                        <li class="payment-type__item">
                            <svg class="icon icon-visa ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#visa"></use>
                            </svg>
                        </li>
                        <li class="payment-type__item">
                            <svg class="icon icon-yandex-pay-card-logo ">
                                <use xlink:href="../static/img/svg/symbol/sprite.svg#yandex-pay-card-logo"></use>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="../static/js/jquery.js"></script>
<script src="../static/js/libs.min.js"></script>
<script src="../static/js/main.js"></script>
<script src="admin.js"></script>
</body>
</html>
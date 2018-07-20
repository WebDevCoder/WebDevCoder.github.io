<?php
require "../../core/db.php";
?>


<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Отзывы</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE = edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="../../static/css/main.css"><!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
</head>
<body class="about-us-page">
<div id="preloader">
    <div id="loader"></div>
</div>
<div class="wrapper">
    <header>
        <div class="header-top">
            <div class="container"><a class="logo header-logo header-nav__link" href="../../index.php"><img class="head-logo" src="../../static/img/svg/head-logo.png"></a>
                <div class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header__phone header-nav__link" href="tel:375255027943">375 25 502-79-43</a></li>
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-callback">обратный звонок</a></li>
                    </ul>
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-howorder">как заказать
                                <svg class="icon icon-list ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#list"></use>
                                </svg></a></li>
                        <li class="header-nav__item"><a class="header-nav__link popup-with-form" href="#form-howpay">оплата
                                <svg class="icon icon-payment ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#payment"></use>
                                </svg></a></li>
                    </ul>
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a class="header-nav__link" href="/core/login.php">войти
                                <svg class="icon icon-login ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#login"></use>
                                </svg></a></li>
                        <li class="header-nav__item"><a class="header-nav__link" href="/core/signup.php">регистрация
                                <svg class="icon icon-registration ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#registration"></use>
                                </svg></a></li>
                    </ul>
                    <ul class="header-nav__user">
                        <li class="header-nav__item--user">
                            <div class="header-nav__user-icon">
                                <svg class="icon icon-favorites ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#favorites"></use>
                                </svg>
                            </div><a class="header-nav__link-user" href="/pages/main/later.php">избранное</a>
                        </li>
                        <li class="header-nav__item--user">
                            <div class="header-nav__user-icon">
                                <svg class="icon icon-basket ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#basket"></use>
                                </svg>
                            </div><a class="header-nav__link-user" href="/pages/main/cart.php">корзина</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/guitars-catalog.php">гитары</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/pianos-catalog.php">клавишные</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/drums-catalog.php">ударные</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/soundequip.php">звуковое оборудование</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/commutation.php">коммутация</a></li>
                        <li class="main-nav__item"><a class="main-nav__link" href="/pages/main/microphone.php">микрофоны</a></li>
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
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="../../index.php">Главная</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="/core/login.php">Войти</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="/core/signup.php">Регистрация</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="reviews.php">Отзывы</a></li>
                                    <li class="hamburger-nav__item"><a class="hamburger-nav__link" href="news.php">Новости</a></li>
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
                <use xlink:href="/static/img/svg/symbol/sprite.svg#visa"></use>
            </svg>
        </p>
    </form>
    <form class="zoom-anim-dialog mfp-hide" id="form-contacts">
        <div class="form-header">Контакты</div>
        <div class="contacts__item">
            <p><img class="contacts-img" src="../../static/img/svg/support.png" alt="контакты"><a class="contacts__link" href="tel:375255027943">375 (25) 502-79-43</a></p>
            <p><img class="contacts-img" src="../../static/img/svg/pin.png" alt="контакты">г.Гомель Пр. Ленина 20/19</p>
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
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="../../index.php">Главная</a></li>
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="javascript:void(0);">=></a></li>
                    <li class="breadcrumbs-list__item"><a class="breadcrumbs-list__link" href="/core/signup.php">Отзывы</a></li>
                </ul>
            </div>
        </section>
        <section class="about-us review-form">
            <div class="container">
                <h2 class="g-section-title">Отзывы</h2>
                <form id="rew_form" class="rewiews-form">
                    <input type="text" id="nickname">
                    <input id="comment" cols="30" rows="10" type="text">
                    <input type="submit" class="commentbutton g-btn g-btn_rewiews" value="Оставить отзыв">
                </form>
                <div class="reviews-list">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "etude";

                    function connect(){
                        $conn = mysqli_connect("localhost", "root", "", "etude");
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        mysqli_set_charset($conn, "utf8");
                        return $conn;
                    }

                    $conn = connect();
                    $sql = "SELECT nickname, comment FROM reviews ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    if ($result){
                        while ($row = mysqli_fetch_assoc($result)){
                            echo
                                "<h3>&clubs;" . $row['nickname'] ."</h3>" .
                                "<p>". $row['comment']."</p>"
                            ;
                        }
                    }
                    ?>
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
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#vk-social"></use>
                                </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://www.instagram.com/nikita_unkind_/">
                                <svg class="icon icon-instagram-logo ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#instagram-logo"></use>
                                </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://github.com/WebDevCoder">
                                <svg class="icon icon-github-big-logo ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#github-big-logo"></use>
                                </svg></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="https://t.me/nikita_unkind">
                                <svg class="icon icon-telegram-logo ">
                                    <use xlink:href="/static/img/svg/symbol/sprite.svg#telegram-logo"></use>
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
                        <li class="footer-nav__item"><a class="footer-nav__link" href="news.php">Новости</a></li>
                        <li class="footer-nav__item"><a class="popup-with-form footer-nav__link" href="#form-contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="payment-nav"><span class="payment-type__title">Мы принимаем</span>
                    <ul class="payment-type__list">
                        <li class="payment-type__item">
                            <svg class="icon icon-visa ">
                                <use xlink:href="/static/img/svg/symbol/sprite.svg#visa"></use>
                            </svg>
                        </li>
                        <li class="payment-type__item">
                            <svg class="icon icon-yandex-pay-card-logo ">
                                <use xlink:href="/static/img/svg/symbol/sprite.svg#yandex-pay-card-logo"></use>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="../../static/js/jquery.js"></script>
<script src="../../static/js/reviews.js"></script>
<script src="../../static/js/changeval.js"></script>
<script src="../../static/js/libs.min.js"></script>
<script src="../../static/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Доминанта</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="sources/images/favicon.ico">
    <meta name="author" content="rodiosheek">
    <meta name="description" content="Dominanta">


    <link rel="stylesheet" href="{{ asset('sources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sources/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sources/css/style.css') }}">
</head>
<body >
<!-- HEADER -->
<header>
    <div class="main">
        <div class="header">
            <div class="logo"><a href="/"><img src="/sources/image/logo.png"></a> </div>
            <div class="social">
                <a href=""><img class="scale" src="/sources/image/social/vk.png" alt="vk"></a>
                <a href=""><img class="scale" src="/sources/image/social/facebook.png" alt="facebook"></a>
                <a href=""><img class="scale" src="/sources/image/social/youtube.png" alt="youtube"></a>
            </div>
            <div class="header-phone">
                <div class="">Бесплатный звонок по Украине</div>
                <span>8 800 500 1990</span>
            </div>
            <div class="contacts">
                <li><a href=""><img class="scale" src="/sources/image/icons/phone.png"></a>    Перезвонить</li>
                <li><a href=""><img class="scale" src="/sources/image/icons/skype.png"></a>    Skype-консультация</li>
                <li><a href=""><img class="scale" src="/sources/image/icons/mail.png"></a>     Написать нам</li>
            </div>
        </div>
    </div>
</header>
<!-- NAVIGATION -->
<nav>
    <div class="main">
        <div class="navigation">
            <a href="">недвижимость</a>
            <a href="">новострои</a>
            <a href="">доминанта</a>
            <a href="">новости</a>
            <a href="">контакты</a>
            <div class="nav-phone">(048)700-84-84</div>
            <div class="quality">
                <a href="">Служба контроля качества</a>
            </div>
            <div class="request">
                <a href="">Отправить заявку</a>
            </div>
            <div class="leng">
                <a href="">Рус</a>
                <a href="">Eng</a>
                <a href="">Укр</a>
            </div>
        </div>
    </div>
</nav>

<!-- CENTER -->

<div class="center">
    <div class="main">
        <div class="center-left">
            <h4>Сеть офисов «Доминанта»  сегодня:</h4>
            <a href=""><img class="scale" src="/sources/image/center/left.jpg"></a>
        </div>
        <div class="center-bg">
            <div class="center-img">
                <img src="/sources/image/center/center.png">
            </div>
        </div>
    </div>
</div>

<!-- MAIN -->


@yield('content')


<!-- footer -->
<footer>
    <!-- footer image -->
    <div class="footer-bg">
        <div class="footer-bg-left"></div>
        <div class="footer-bg-right"></div>
    </div>
    <div class="footer">
        <!-- footer box -->
        <div class="footer-box">
            <div class="footer-nav">
                <div class="nav-item">
                    <ul>
                        <li>Недвижимость</li>
                        <li><a href="">Каталог обьектов</a> </li>
                        <li><a href="">Новострои</a> </li>
                    </ul>
                </div>
                <div class="nav-item">
                    <ul>
                        <li>Домининанта</li>
                        <li><a href="">О компании</a> </li>
                        <li><a href="">Карьера</a> </li>
                    </ul>
                </div>
                <div class="nav-item">
                    <ul>
                        <li>Новости</li>
                        <li><a href="">Доминанты</a> </li>
                        <li><a href="">Региона</a> </li>
                        <li><a href="">Информиция</a> </li>
                    </ul>
                </div>
                <div class="nav-item">
                    <ul>
                        <li>Контакты</li>
                        <li><a href="">Контакты</a> </li>
                        <li><a href="">Сотрудники</a> </li>
                        <li><a href="">Отзывы</a> </li>
                    </ul>
                </div>
            </div>
            <div class="footer-social">
                <p>Подписывайтесь на наши группы в социальных сетях!</p>
                <a href=""><img class="scale" src="/sources/image/social/vk.png" alt="vk"></a>
                <a href=""><img class="scale" src="/sources/image/social/facebook.png" alt="facebook"></a>
                <a href=""><img class="scale" src="/sources/image/social/youtube.png" alt="youtube"></a>
            </div>
            <div class="footer-down">
                <div class="copyright">
                    &copy; Доминанта, 2016г. Все права защищены.
                </div>
                <div class="footer-menu">
                    <a href="">Политика конфиденциальности</a>
                    <a href="">Использование cookies</a>
                    <a href="">Условия использования</a>
                    <a href="">Юридическая информация</a>
                    <a href="">Карта сайта</a>
                </div>
            </div>
        </div>
        <!-- end footer box -->
    </div>
</footer>

<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script rel="script" src="{{ asset('sources/js/bootstrap.min.js') }}"></script>
<script rel="script" src="{{ asset('sources/js/jquery-1.12.3.js') }}"></script>
<script rel="script" src="{{ asset('sources/js/animsition.min.js') }}"></script>
<script rel="script" src="{{ asset('sources/js/main.js') }}"></script>
<script rel="script" src="{{ asset('sources/js/ajax.js') }}"></script>
<script rel="script" src="{{ asset('sources/js/accounting.min.js') }}"></script>
<script src="http://cdn.jsdelivr.net/momentjs/2.8.4/moment.min.js"></script>
</body>
</html>
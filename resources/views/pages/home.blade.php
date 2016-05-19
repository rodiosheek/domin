@extends('main')

@section('content')


        <!-- MAIN -->

<div class="main">
    <div class="left-sidebar">

        <div class="objects">
            <div class="objects-title">  Обьекты на <span class="date"></span> </div>
            <div class="objects-item"></div>
            <div class="objects-item"></div>
            <div class="objects-item"></div>
            <div class="objects-item"></div>
            <div class="objects-item" style="border-bottom: 1px #aeaeae solid;
    border-radius: 0 0 10px 10px;"></div>

            <div class="objects-li">
                <ul class="left-li">
                    <li><img src="sources/image/triangle.png"><a href="">Квартиры продажа</a>   </li>
                    <li><img src="sources/image/triangle.png"><a href="">Новoстройки</a>   </li>
                    <li><img src="sources/image/triangle.png"><a href="">Элитные квартиры</a>   </li>
                    <li><img src="sources/image/triangle.png"><a href="">Дома, участки</a>   </li>
                    <li><img src="sources/image/triangle.png"><a href="">Коммерческая недвижимость</a>   </li>
                </ul>
                <ul class="right-li">
                    <li>  <a href="" id="flats-sale">9016</a> </li>
                    <li>  <a href="" id="new-builds">34</a> </li>
                    <li>  <a href="" id="elite-builds">234</a> </li>
                    <li>  <a href="" id="build-peaces">125</a> </li>
                    <li>  <a href="" id="commercial-builds">102</a> </li>
                </ul>
            </div>
        </div>

        <div class="news-box">
            <div class="news-title"><a href="">Новости</a> </div>
            <div class="news">
                <div class="news-date">30/03/2016</div>
                <div class="title">
                    <a href="">В Украине изменили правила налогообложения недвижимости: платить будут не все</a>
                </div>
                <div class="content">
                    В 2016 году украинцы будут платить налог на недвижимость по новым правилам,
                    однако одной категории населения удастся избежать обложения сбором на жилье.....
                </div>
                <a href="">Подробнее</a>
            </div>
            <div class="news">
                <div class="news-date">30/03/2016</div>
                <div class="title">
                    <a href="">В Украине изменили правила налогообложения недвижимости: платить будут не все</a>
                </div>
                <div class="content">
                    В 2016 году украинцы будут платить налог на недвижимость по новым правилам,
                    однако одной категории населения удастся избежать обложения сбором на жилье.....
                </div>
                <a href="">Подробнее</a>
            </div>
        </div>
        <div class="partners">
            <div class="partners-title">Наши партнеры</div>
            <ul>
                <li class="scale"><a href=""><img src="sources/image/partners/intostroi.png"></a> </li>
                <li class="scale"><a href=""><img src="sources/image/partners/ostrova.png"></a> </li>
                <li class="scale"><a href=""><img src="sources/image/partners/intostroi.png"></a> </li>
                <li class="scale"><a href=""><img src="sources/image/partners/ostrova.png"></a> </li>
                <li class="scale"><a href=""><img src="sources/image/partners/intostroi.png"></a> </li>
            </ul>
        </div>
    </div>
    <div class="box">
        <!-- search form -->
        <div class="search">
            <form class="search-form" action="search" method="post">
                <div class="form-border">
                    <div class="by-id">
                        <label for="id">Поиск по ID:</label>
                        <input id="id" name="id" class="id" type="text" spellcheck="false">
                    </div>
                    <div class="by-price">
                        <label for="price">Цена:</label>
                        <input id="price" name="min_price" class="price" type="text" placeholder="от" spellcheck="false">
                        <input name="max_price" class="price" type="text" placeholder="до" spellcheck="false">
                    </div>
                    <div class="by-region">
                        <div class="region-label">Выберите регион:</div>
                        <div class="select-region">
                            <a href="#" class="slct-region" >Город</a>
                            <ul class="drop" id="location" data-type="location">
                                <li>Все города</li>
                            </ul>
                            <input type="hidden"  name="region">
                        </div>
                        <div class="select-area">
                            <a href="#" class="slct-area">Район</a>
                            <ul class="drop" id="area">
                            </ul>
                            <input type="hidden"  name="area">
                        </div>
                        <div class="select-rooms">
                            <a href="#" class="slct-rooms">Кол-во комнат</a>
                            <ul class="drop" id="rooms" data-type="rooms">
                                <li>Любое</li>
                            </ul>
                            <input type="hidden"  name="rooms">
                        </div>
                    </div>
                    <div class="by-type">
                        <div class="type-label">Тип недвижимости:</div>
                        <div class="select-apartment">
                            <a href="#" class="slct-apartment">Квартира</a>
                            <ul class="drop">
                                <li>Квартира</li>
                            </ul>
                            <input type="hidden"  name="apartment">
                        </div>
                        <div class="select-type">
                            <a href="#" class="slct-type">Тип</a>
                            <ul class="drop" id="build-type" data-type="build_type">
                                <li>Любой тип</li>
                            </ul>
                            <input type="hidden"  name="type">
                        </div>
                        <div class="select-buy">
                            <a href="#" class="slct-buy">Покупка</a>
                            <ul class="drop">
                                <li>Покупка</li>
                                <li>Съем</li>
                                <li>Продажа</li>
                            </ul>
                            <input type="hidden"  name="buy">
                        </div>
                    </div>
                </div>
                <div class="online scale"><a href="">Online консультация специалиста</a> </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="submit scale" value="поиск">
            </form>
        </div>
        <!-- end search form -->
        <!-- catalog -->
        <div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>
        <div class="catalog">
            <div class="catalog-items">
                <!-- one item -->
                <div class="catalog-item">
                    <div class="item-title">
                        <div class="sum">2580</div>
                        <div><a href="">Квартиры</a></div>
                        <div ><a href="">Одессы</a> и <a href="">Одесской области</a> </div>
                    </div>
                    <ul class="catalog-links">
                        <li><img src="sources/image/triangle-catalog.png"><a href="">квартиры</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">квартиры до 500 тыс. грн</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">квартиры до 1 млн. грн</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">квартиры свыше 1 млн. грн</a> </li>
                    </ul>
                </div>
                <!-- end item -->

                <!-- one item -->
                <div class="catalog-item">
                    <div class="item-title">
                        <div class="sum">594</div>
                        <div><a href="">новостройки</a></div>
                        <div ><a href="">Одессы</a> и <a href="">Одесской области</a> </div>
                    </div>
                    <ul class="catalog-links">
                        <li><img src="sources/image/triangle-catalog.png"><a href="">новостройки «с котлована»</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">новостройки «с ключами»</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">новостройки до 400 тыс. грн</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">нежилые помещенея</a> </li>
                    </ul>
                </div>
                <!-- end item -->

                <!-- one item -->
                <div class="catalog-item">
                    <div class="item-title">
                        <div class="sum">156</div>
                        <div><a href="">Загородная</a></div>
                        <div >в <a href="">Одесской области</a> </div>
                    </div>
                    <ul class="catalog-links">
                        <li><img src="sources/image/triangle-catalog.png"><a href="">дома и дачи недорого</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">пентхаусы и коттеджи</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">в коттеджном поселке</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">участки земли</a> </li>
                    </ul>
                </div>
                <!-- end item -->
            </div>

            <div class="catalog-items">
                <!-- one item -->
                <div class="catalog-item">
                    <div class="item-title">
                        <div class="sum">636</div>
                        <div><a href="">Коммерческая</a></div>
                        <div ><a href="">недвижимость</a> </div>
                    </div>
                    <ul class="catalog-links margin-top-zero">
                        <li><img src="sources/image/triangle-catalog.png"><a href="">офисы</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">торговые площади продажа</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">земля для бизнеса</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">торговые площади аренда</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">логистические комплексы</a> </li>
                    </ul>
                </div>
                <!-- end item -->

                <!-- one item -->
                <div class="catalog-item">

                    <ul class="catalog-links">
                        <img src="sources/image/logo.png">

                    </ul>
                </div>
                <!-- end item -->

                <!-- one item -->
                <div class="catalog-item">
                    <div class="item-title">
                        <div class="sum">52</div>
                        <div><a href="">Зарубежная</a></div>
                        <div >в <a href="">недвижимость</a> </div>
                    </div>
                    <ul class="catalog-links">
                        <li><img src="sources/image/triangle-catalog.png"><a href="">недвижимость в Болгарии</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">недвижимость в Турции</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">недвижимость в Италии</a> </li>
                        <li><img src="sources/image/triangle-catalog.png"><a href="">недвижимость в Испании</a> </li>
                    </ul>
                </div>
                <!-- end item -->
            </div>
        </div>

        <!-- slider -->
        <div class="slider">
            <div class="slider-title"><span>Эксклюзивные предложения</span></div>
            <div class="slider-border">
                <div class="slider-body">
                    <!-- carousel -->


                    <div id="slider-one" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/apartment-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left " href="#slider-one" role="button" data-slide="prev">
                            <img class="slider-left scale slider-one-left" src="sources/image/apartment/left.png">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right " href="#slider-one" role="button" data-slide="next">
                            <img class="slider-right scale" src="sources/image/apartment/right.png">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- end carousel -->
                </div>
            </div>
        </div>
        <!-- end slider -->

        <!-- slider -->
        <div class="slider">
            <div class="slider-title"><span>Новые поступления</span></div>
            <div class="slider-border">
                <div class="slider-body">
                    <!-- carousel -->


                    <div id="slider-two" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-1.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider-items">
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <img src="sources/image/apartment/new-2.png">
                                        <div class="slider-about">
                                            <div class="slider-item-title">2-комнатная квартира</div>
                                            <div class="slider-item-content">Одесса/Приморский
                                                Аркадиевский пер. Общая площадь: 97 м&#178;
                                            </div>
                                            <div class="slider-price">Цена: 3 002 475 UAH<br> 115 000&#36;
                                                <a href="">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left " href="#slider-two" role="button" data-slide="prev">
                            <img class="slider-left scale slider-two-left" src="sources/image/apartment/left.png">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right " href="#slider-two" role="button" data-slide="next">
                            <img class="slider-right scale slider-two-right" src="sources/image/apartment/right.png">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- end carousel -->
                </div>
            </div>
        </div>
        <!-- end slider -->

    </div>
    <div class="banners">
        <div class="banners-title">Акции</div>
        <div class="stoke">
            <a href=""><img src="sources/image/stoke/up.jpg"></a>
        </div>
        <div class="stoke">
            <a href=""><img src="sources/image/stoke/down.jpg"></a>
        </div>
    </div>
</div>

<div class="main">
    <!-- reviews -->
    <div class="reviews">
        <div class="reviews-title"><span>Отзывы о нас</span></div>
        <!-- review item -->
        <div class="reviews-item">
            <div class="review-bg">
                <div class="review-border">
                    <div class="review-img">
                        <img src="sources/image/rewiews/img-1.png">
                    </div>
                </div>
            </div>
            <div class="review-content">
                <h3>Вениамин</h3>
                <h5>Директор</h5>
                <div class="review-text">
                    "Мы уже не один год работаем с Доминантой. Специалисты высокого уровня"
                </div>
            </div>
        </div>
        <!-- end review item -->
        <!-- review item -->
        <div class="reviews-item">
            <div class="review-bg">
                <div class="review-border">
                    <div class="review-img">
                        <img src="sources/image/rewiews/img-2.png">
                    </div>
                </div>
            </div>
            <div class="review-content">
                <h3>Екатерина</h3>
                <h5>Топ-менеджер</h5>
                <div class="review-text">
                    "С Доминантой у меня получилось реализовать практически невозможную сделку,
                    была очень сложная недвижимость! Я очень довольна"
                </div>
            </div>
        </div>
        <!-- end review item -->
        <!-- review item -->
        <div class="reviews-item">
            <div class="review-bg">
                <div class="review-border">
                    <div class="review-img">
                        <img src="sources/image/rewiews/img-3.png">
                    </div>
                </div>
            </div>
            <div class="review-content">
                <h3>Александр</h3>
                <h5>Юрист</h5>
                <div class="review-text">
                    "Сфера недвижимости - тонкий лед. И нужно быть уверенным в тех с кем
                    по нему шагаешь. Ответственность риски очень велики."
                </div>
            </div>
        </div>
        <!-- end review item -->
        <div class="add-review scale"><a href="">Оставить отзыв</a> </div>
    </div>
    <!-- end reviews -->
</div>


@endsection
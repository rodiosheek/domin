@extends('main')

@section('content')


        <!-- MAIN -->

<div class="search-sidebars-form">
    <div class="main">
        <!-- left sidebar -->
        <div class="left-sidebar">
            <div class="objects">
                <div class="objects-title">  Обьекты на <span class="date">04.04.2016</span> </div>
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
                        <li>  <a href="">9016</a> </li>
                        <li>  <a href="">34</a> </li>
                        <li>  <a href="">234</a> </li>
                        <li>  <a href="">125</a> </li>
                        <li>  <a href="">102</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end left sidebar -->
        <div class="box">
            <!-- search form -->
            <div class="search">
                <form class="search-form" id="search-form" action="search"   method="post">
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
                                <a href="#" class="slct-region">Город</a>
                                <ul class="drop region">
                                    <li>Все города</li>
                                    <li>Одесса</li>
                                    <li>Киев</li>
                                </ul>
                                <input type="hidden" id="slct-region" name="region">
                            </div>
                            <div class="select-area">
                                <a href="#" class="slct-area">Район</a>
                                <ul class="drop" id="area">
                                    <li>Все районы</li>
                                </ul>
                                <input type="hidden" id="slct-area" name="area">
                            </div>
                            <div class="select-rooms">
                                <a href="#" class="slct-rooms">Кол-во комнат</a>
                                <ul class="drop">
                                    <li>Любое</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                                <input type="hidden" id="slct-rooms" name="rooms">
                            </div>
                        </div>
                        <div class="by-type">
                            <div class="type-label">Тип недвижимости:</div>
                            <div class="select-apartment">
                                <a href="#" class="slct-apartment">Квартира</a>
                                <ul class="drop">
                                    <li>Квартира</li>
                                    <li>Дом</li>
                                </ul>
                                <input type="hidden" id="slct-apartment" name="apartment">
                            </div>
                            <div class="select-type">
                                <a href="#" class="slct-type">Тип</a>
                                <ul class="drop">
                                    <li>Любой тип</li>
                                    <li>Новострой</li>
                                    <li>Вторичный</li>
                                </ul>
                                <input type="hidden" id="slct-type" name="type">
                            </div>
                            <div class="select-buy">
                                <a href="#" class="slct-buy">Покупка</a>
                                <ul class="drop">
                                    <li>Покупка</li>
                                    <li>Съем</li>
                                    <li>Продажа</li>
                                </ul>
                                <input type="hidden" id="slct-buy" name="buy">
                            </div>
                        </div>
                    </div>
                    <div class="online scale"><a href="">Online консультация специалиста</a> </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <input type="submit" class="submit scale" value="поиск">
                </form>
            </div>
            <!-- end search form -->

        </div>
        <!-- end box -->

        <!-- right sidebar -->
        <div class="banners">
            <div class="small-advertising">
                <a href="">
                    <img src="sources/image/filter/right-1.png">
                </a>
            </div>
        </div>
        <!-- end right sidebar -->
    </div>
    <!-- end main -->
</div>

<!-- links path -->
<div class="main">
    <div class="links-path">
        <a class="main-search-link" href="">Главная - Поиск</a>
    </div>
</div>

<!-- filter result -->
<div class="main">
    <div class="left-box">
        <div class="search-result">
            <div class="main-search">
                <div class="search-filter">
                    <span class="flats">Квартиры</span>
                    <a class="mail-update" href="">
                        <img class="icon-mail" src="sources/image/filter/mail.png">
                        <span>Подписаться на обновление базы</span>
                    </a>
                    Сортировать по:
                <span class="search-active-span">
                    <a class="search-active" href="">цене</a>
                    <a class="search-active" href="">площади</a>
                    <a class="search-active" href="">дате</a>
                </span>
                    Показывать:
                <span class="search-active-sum-active">
                    <a class="search-active-sum" href="">30</a>
                    <a class="search-active-sum" href="">50</a>
                    <a class="search-active-sum" href="">100</a>
                </span>
                </div>
            </div>
        </div>

        <!-- search item -->
        <div class="search-item">
            <div class="item-photo">
                <img src="sources/image/filter/apartment.png">
                <div class="photo-info">
                    <div class="photo-icon scale"><a href=""><img src="sources/image/filter/photos.png"></a> </div>
                    <div class="photo-sum">7</div>
                </div>
            </div>
            <div class="search-item-title">
                <h2><a href="/flat">Купить квартиру в г. Одесса по ул. Балковская</a> </h2>
                <div ><a class="search-item-links" href="">Вторичная недвижимость</a></div>
                <div class="price-info">
                    <div class="price-box-left">
                        <span>Стоимость:&nbsp;</span> <div class="item-price" data-price="89000">89 000</div><span>&nbsp;</span>
                        <span class="show-dollar">&#36;</span>
                        <span class="show-grn" hidden="true"> грн</span>
                        <span class="show-euro" hidden="true">&#8364;</span>
                    </div>
                    <div class="price-box-right">
                        <a class="value" data-curs="grn" href="">грн</a>
                        <a class="value" data-curs="dollar" href="">&#36;</a>
                        <a class="value" data-curs="euro" href="">&#8364;</a>
                    </div>
                </div>
            </div>
            <!-- item info -->
            <div class="search-item-info">
                <div class="item-info-left">
                    <div ><a class="search-item-links" href=""><span class="rooms">3</span></a> комнаты</div>
                    <div ><a class="search-item-links" href=""><span class="floors">5</span></a> этаж</div>
                </div>
                <div class="item-info-center">
                    <div ><a class="search-item-links" href=""><span id="district">Приморский район</span> </a></div>
                    <div ><a class="search-item-links" href=""><span id="location">Центр</span> </a></div>
                </div>
                <div class="item-info-right">
                    <div > Общая - <a class="search-item-links" href=""><span id="overall-space">42.5</span>м&#178; </a></div>
                    <div >Жилая - <a class="search-item-links" href=""><span id="living-space">27.1</span>м&#178; </a></div>
                    <div >Кухня - <a class="search-item-links" href=""><span id="kitchen-space">5.2</span>м&#178; </a></div>
                </div>
            </div>
            <!-- all photo -->
            <div class="view-all-photo">
                <div class="all-photo-links scale">
                    <a href="">Смотреть все фото</a>
                </div>
            </div>
            <!-- item content -->
            <div class="search-item-content">
                3-х комнатная квартира. Предлагается просторная квартира с дизайнерским качественным
                ремонтом из очень дорогих материалов, в отделке использованы оникс и мрамор, посеребренный
                паркет, встроенные видеокамеры. Все люстры и бра - хрусталь Сваровски. Кухня со всей
                необходимой техникой куперсбуш и либхер. Просторная гостиная. 2 спальни, 2 гардеробных
                комнаты, 2 санузла. В каждом санузле установлен бойлер и собственная система очистки воды.
                Застекленная лоджия и балкон. Квартира полностью меблирована дорогой дизайнерской мебелью (Италия).
                Ремонт был сделан собственниками для себя за 450 000 долл. США, мебель куплена за 350 000 долл.
                США. Огороженная территория, охрана, видеонаблюдение. Имеется машиноместо (вмещает 2 машины) в
                подземном паркинге за дополнительную стоимость.
            </div>
            <!-- item footer -->
            <div class="search-item-footer">
                <div class="on-map scale">
                    <a class="search-footer-link" href="">
                        <div class="on-map-img"><img src="sources/image/filter/on-map.png"> </div>
                        <div class="search-link">На карте</div>
                    </a>
                </div>
                <div class="ask-question scale">
                    <a class="search-footer-link" href="">
                        <div class="question-img"><img src="sources/image/filter/question.png"> </div>
                        <div class="search-link">Задать вопрос</div>
                    </a>
                </div>
                <div class="add-favorites scale">
                    <a class="search-footer-link" href="">
                        <div class="link-img"><img src="sources/image/filter/like.png"> </div>
                        <div class="search-link">Добавить в избранное</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end search item -->


        <!-- page navigation -->
        <div class="page-navigation">
            <div class="page-button"><a href="">1</a> </div>
            <div class="page-button"><a href="">2</a> </div>
            <div class="page-button"><a href="">3</a> </div>
            <div class="page-button"><a href="">4</a> </div>
            <div class="page-button"><a href="">5</a> </div>
            <div class="page-next"><a href=""><img></a> </div>
        </div>

    </div>
    <!-- end left box -->

    <!-- search right banners -->
    <div class="search-banners">
        <div class="banners-title-black">
            <span id="object-sum">355</span>   обьектов
        </div>
        <!-- maps -->
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2747.3593036759776!2d30.732887665591925!3d46.481197365512685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1461228650041" width="262" height="513" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- show map link -->
        <div class="show-on-map">
            <a class="search-map-link scale" target="_blank" href="https://maps.google.com/maps?ll=46.481183,30.732051&z=16&t=m&hl=ru-RU&gl=UA&mapclient=embed">
                <div class="on-map-img"><img src="sources/image/filter/on-map.png"> </div>
                <div class="search-link-map">Показать на большой карте</div>
            </a>
        </div>
        <!-- fast search -->
        <div class="fast-search">
            <div class="fast-search-title">Быстрый поиск</div>
            <div class="fast-search-links">
                <div ><a href="">Все однокомнатные квартиры</a></div>
                <div ><a href="">Все двухкомнатные квартиры</a></div>
                <div ><a href="">Все трехкомнатные квартиры</a></div>
                <div ><a href="">Все обьекты в Приморском районе</a></div>
            </div>
        </div>
        <!-- viewed -->
        <div class="viewed">
            <div class="viewed-title">Вы недавно смотрели</div>
            <!-- viewed item -->
            <a  href="">
                <div class="viewed-item scale">
                    <div class="viewed-item-img"><img src="sources/image/filter/apartment-small.png"></div>
                    <div class="viewed-item-info">
                        <div class="viewed-item-price">89000 &#36;</div>
                        <div class="viewed-item-address">
                            <div >г. Одесса</div>
                            <div >ул. Балковская</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- viewed item -->
            <a  href="">
                <div class="viewed-item scale">
                    <div class="viewed-item-img"><img src="sources/image/filter/apartment-small.png"></div>
                    <div class="viewed-item-info">
                        <div class="viewed-item-price">89000 &#36;</div>
                        <div class="viewed-item-address">
                            <div >г. Одесса</div>
                            <div >ул. Балковская</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- viewed item -->
            <a  href="">
                <div class="viewed-item scale">
                    <div class="viewed-item-img"><img src="sources/image/filter/apartment-small.png"></div>
                    <div class="viewed-item-info">
                        <div class="viewed-item-price">89000 &#36;</div>
                        <div class="viewed-item-address">
                            <div >г. Одесса</div>
                            <div >ул. Балковская</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--- big advertising -->
        <div class="big-advertising">
            <a href=""><img src="sources/image/filter/right-2.png"></a>
        </div>
    </div>
    <!-- end search right banners -->

</div>
<!-- end filter result -->









@endsection
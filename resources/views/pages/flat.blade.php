@extends('main')

@section('content')


        <!-- MAIN -->

<!-- links path -->
<div class="main">
    <div class="links-path">
        <a class="main-search-link" href="">Главная - Продажа двухкомнатной квартиры - Одесса</a>
    </div>
    <div  class="go-back scale"><a href="">Вернуться к списку</a> </div>
</div>

<!--- card --->

<div class="main">
    <!-- card -->
    <div class="card">
        <div class="card-title">
            <div class="card-title-left">
                <h1>Продажа двухкомнатной квартиры в Одессе по ул. Балковская</h1>
                <div class="card-title-button">
                    <div class="add-favorites-left scale">
                        <a class="search-footer-link" href="">
                            <div class="link-img"><img src="sources/image/filter/like.png"> </div>
                            <div class="search-link">Добавить в избранное</div>
                        </a>
                    </div>
                    <div class="auction scale"><a href="">Предложить торг</a> </div>
                </div>
            </div>
            <div class="card-title-right">
                <div class="card-price"><span class="price-box" data-price="89000">89000</span><span>&nbsp;</span>
                    <span class="show-dollar">&#36;</span>
                    <span class="show-grn" hidden="true"> грн</span>
                    <span class="show-euro" hidden="true">&#8364;</span>
                </div>
                <div class="price-square">1100 <span id="show-dollar">&nbsp;&#36;</span> за м&#178;</div>
                <div class="card-price-convert">
                    <a class="value" data-curs="grn" href="">грн</a>
                    <a class="value" data-curs="dollar" href="">&#36;</a>
                    <a class="value" data-curs="euro" href="">&#8364;</a>
                </div>
            </div>
        </div>
        <div class="card-info-left">
            <!-- photo box -->
            <div class="photo-box">

                <div class="carousel-border">
                    <!-- carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="main-photo">
                                    <img src="sources/image/card/photo.png">
                                    <div class="photo-info">
                                        <div class="photo-icon scale"><a href=""><img src="sources/image/filter/photos.png"></a> </div>
                                        <div class="photo-sum">7</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-photo">
                                    <img src="sources/image/card/photo.png">
                                    <div class="photo-info">
                                        <div class="photo-icon scale"><a href=""><img src="sources/image/filter/photos.png"></a> </div>
                                        <div class="photo-sum">7</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-photo">
                                    <img src="sources/image/card/photo.png">
                                    <div class="photo-info">
                                        <div class="photo-icon scale"><a href=""><img src="sources/image/filter/photos.png"></a> </div>
                                        <div class="photo-sum">7</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="controls">
                            <a class="left" href="#carousel-example-generic" role="button" data-slide="prev">
                                <img src="sources/image/card/carousel/left.png">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right" href="#carousel-example-generic" role="button" data-slide="next">
                                <img src="sources/image/card/carousel/right.png">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <div class="photo-small">
                    <div class="photo-small-item active" data-target="#carousel-example-generic" data-slide-to="0">
                        <a href=""><img src="sources/image/card/photo-small.png"></a>
                    </div>
                    <div class="photo-small-item" data-target="#carousel-example-generic" data-slide-to="1">
                        <a href=""><img src="sources/image/card/photo-small.png"></a>
                    </div>
                    <div class="photo-small-item" data-target="#carousel-example-generic" data-slide-to="2">
                        <a href=""><img src="sources/image/card/photo-small.png"></a>
                    </div>
                </div>
                <!-- end carousel -->
            </div>
            <!-- card links -->
            <div class="card-links">
                <div class="apartment-info">
                    <div class="card-links-left">
                        <div class="apartment-link scale">
                            <a class="a-links" href="">
                                <div class="a-img"><img src="sources/image/card/house.png"></div>
                                <div class="link-text">двухкомнатные квартиры</div>
                            </a>
                        </div>
                        <div class="apartment-link scale">
                            <a class="a-links" href="">
                                <div class="a-img"><img src="sources/image/card/detail.png"></div>
                                <div class="link-text">4-й этаж 9-этажного дома, кирпичный</div>
                            </a>
                        </div>
                        <div class="apartment-link scale">
                            <a class="a-links" href="">
                                <div class="a-img"><img src="sources/image/card/location.png"></div>
                                <div class="link-text">Приморский район</div>
                            </a>
                        </div>
                    </div>
                    <div class="card-links-right">
                        <div class="apartment-area">
                            <span>Общая - </span>
                            <a href=""><span>42.5</span><span class="space">&nbsp;</span> <span class="square-meter">m&#178;</span> </a>
                        </div>
                        <div class="apartment-area">
                            <span>Жилая - </span>
                            <a href=""><span>27.1</span><span class="space">&nbsp;</span><span class="square-meter">m&#178;</span> </a>
                        </div>
                        <div class="apartment-area">
                            <span>Кухня - </span>
                            <a href=""><span>5.2</span><span class="space">&nbsp;</span><span class="square-meter">m&#178;</span> </a>
                        </div>
                        <div class="small-info">
                            балкон, окна/двор, санузел: раздельный освобождение до продажи
                        </div>
                    </div>
                </div>
                <div class="apartment-info">
                    <div class="card-links-left">
                        <a href="" class="download-pdf scale">
                            <div class="pdf"><img src="sources/image/card/pdf.png"></div>
                            <div class="pdf-text">Скачать буклет в pdf</div>
                        </a>
                    </div>
                    <div class="card-links-right">
                        <div class="apartment-id">
                            <div >id:</div>
                            <div class="id-box">5894255</div>
                        </div>
                        <div class="views" ><a href="">Просмотров всего:<span>24</span></a></div>
                        <div class="views" ><a href="">Просмотров в этом месяце:<span>8</span></a></div>
                    </div>
                </div>
            </div>
            <!-- end card links -->
            <div class="apartment-content">
                <h1>Описание</h1>
                <div class="apartment-text">
                    Продается! Свободная от всего!!! Быстрый выход на сделку. Один собственник,
                    Полная сумма в ДКП. Хорошенькая квартирка в 10 мин. от м. Преображенская площадь.
                    В доме пассажирский лифт, домофон, мусоропровод. Общая площадь: 42,5 кв.м. Жилая
                    площадь: 27,1 кв.м. (комнаты 9,5 кв.м. и 17,6, кв.м., изолированные, линейка).
                    Кухня: 5,2 кв.м. Раздельный санузел, балкон не застеклен. Окна деревянные, вид из
                    окон во двор. Квартира ТРЕБУЕТ РЕМОНТА. Район очень развит: магазины, детсады, школы,
                    поликлиники, банк, все то, что необходимо для жизни в пешей доступности. Тихий зеленый
                    двор. Поблизости расположены парки Лосиный остров и Сокольники. Квартира в собственности
                    более 3-х лет, наследство, 1 взрослый собственник. Оперативный показ.
                    БЫТРЫЙ ВЫХОД НА СДЕЛКУ, СВОБОДНАЯ ПРОДАЖА (юридически и фактически свободна),
                    т.е. в квартире никто не зарегистрирован
                </div>
                <div class="height-roof">Высота потолков:<span>2.5</span>м</div>
            </div>
            <div class="apartment-info-footer">
                <div class="send-request">
                    <span>Хотите узнать об обьекте больше подробностей?</span>
                    <span><a href="">Пришлите запрос в офис продаж</a> </span>
                    <span>или позвоните по телефону</span>
                    <span><a href="">8 800 500 1990</a> </span>
                </div>
                <div class="apartment-info-footer-links">
                    <div class="add-favorites-left scale">
                        <a class="search-footer-link" href="">
                            <div class="link-img"><img src="sources/image/filter/like.png"> </div>
                            <div class="search-link">Добавить в избранное</div>
                        </a>
                    </div>
                    <div class="next-object scale">
                        <a href="">
                            <div class="next-text">Следующий обьект</div>
                            <div class="next-icon"></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end apartment content -->
        </div>
        <!-- right panel -->
        <div class="card-info-right">
            <div class="right-panel">
                <div class="contact-form-border">
                    <div class="contact-form-title">
                        <a href="">Филиал №1</a>
                    </div>
                    <div  class="expert-info">
                        <div class="expert-photo">
                            <img src="sources/image/card/expert-photo.png">
                        </div>
                        <div class="expert">
                            <div class="our-expert">Ваш эксперт</div>
                            <div class="expert-name">Татьяна Певтиева</div>
                        </div>
                        <div class="expert-phone-numbers">
                            <div class="expert-phone-number">
                                <div class="phone-icon">
                                    <img  src="sources/image/card/phone.png">
                                </div>
                                <div style="margin-left: 10px;">+38 (049) 702-83-82</div>
                            </div>
                            <div class="expert-phone-number">
                                <div class="mobile-icon">
                                    <img  src="sources/image/card/mobile.png">
                                </div>
                                <div style="margin-left: 13px;line-height: 25px;">+38 (067) 486-30-46</div>
                            </div>
                        </div>
                        <div class="work-time">
                            <li>Время работы офиса:</li>
                            <li>пн-пт: с 09:00 до 21:00</li>
                            <li>сб-вс: с 10:00 до 18:00</li>
                        </div>
                    </div>
                    <!-- end expert info -->
                    <!-- contact form -->
                    <div class="contact-form-box">
                        <form class="contact-form" action="" method="post">
                            <!-- name -->
                            <div class="form-field">
                                <div class="input-img"><img src="sources/image/card/user.png"> </div>
                                <div class="input-field">
                                    <input name="name" type="text" id="name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="form-field">
                                <div class="input-img"><img src="sources/image/card/phone.png"> </div>
                                <div class="input-field">
                                    <input name="phone" type="text" id="phone" placeholder="Номер телефона">
                                </div>
                            </div>
                            <!-- mail -->
                            <div class="form-field">
                                <div class="input-img"><img src="sources/image/card/mail.png"> </div>
                                <div class="input-field">
                                    <input name="email" type="text" id="email" placeholder="Эл. почта">
                                </div>
                            </div>
                            <!-- massage -->
                            <div class="form-text-area">
                                <div class="input-img"><img src="sources/image/card/message.png"> </div>
                                <div class="input-area">
                                    <textarea id="textarea" name="message" placeholder="Интересует продажа двухкомнатной квартиры в Одессе по ул. Балковская"></textarea>
                                </div>
                            </div>
                            <!-- submit -->
                            <div class="form-submit scale">
                                Свяжитсь со мной
                            </div>
                        </form>
                    </div>
                    <!-- end contact form -->
                </div>
                <!-- map -->
                <div class="card-map">
                    <div class="banners-title-black">
                        Обект на карте
                    </div>
                    <div class="card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5494.72005815506!2d30.732050999999995!3d46.48118300000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1461577982891" width="378" height="485" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- end map -->
                <div class="all-object">
                    <h2>Все обекты поблизости:</h2>
                    <div class="location-link scale">
                        <a href="">
                            <div class="location-icon"><img src="sources/image/card/location.png" ></div>
                            <div class="location-text">Вывести списком </div>
                        </a>
                    </div>
                    <div class="location-link scale">
                        <a href="">
                            <div class="location-icon"><img src="sources/image/card/location.png" ></div>
                            <div class="location-text">Показать на карте </div>
                        </a>
                    </div>
                </div>
                <!-- end all object -->

            </div>
        </div>
        <!-- end right panel -->
    </div>
    <!-- end card -->
</div>

<div class="more-apartment">
    <div class="main">
        <div class="more-apartment-box">
            <div class="more-title">
                <h1>Квартиры до 1 млн. грн</h1>
            </div>
            <!-- more apartment item -->
            <div class="more-item">
                <div class="more-item-img">
                    <a href=""><img src="sources/image/card/photo-small.png"></a>
                    <div class="more-item-like">
                        <a class="scale" href=""><img src="sources/image/card/like.png"></a>
                    </div>
                </div>
                <div class="more-item-info">
                    <div class="more-info-item">
                        <li><a href=""><span class="">г. Одесса</span> </a></li>
                        <li><a href=""><span class="">ул. Балковская</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">2-х комнатная</span> </a></li>
                        <li><a href=""><span class="">квартира</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">Приморский район. Центр</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href="">Общая - <span class="">44</span>м&#178; </a></li>
                        <li><a href="">Жилая - <span class="">27.1</span> м&#178;</a></li>
                        <li><a href="">Кухня - <span class="">5.2</span> м&#178;</a></li>
                    </div>
                </div>
            </div>
            <!-- end more apartment item -->
            <!-- more apartment item -->
            <div class="more-item">
                <div class="more-item-img">
                    <a href=""><img src="sources/image/card/photo-small.png"></a>
                    <div class="more-item-like">
                        <a class="scale" href=""><img src="sources/image/card/like.png"></a>
                    </div>
                </div>
                <div class="more-item-info">
                    <div class="more-info-item">
                        <li><a href=""><span class="">г. Одесса</span> </a></li>
                        <li><a href=""><span class="">ул. Балковская</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">2-х комнатная</span> </a></li>
                        <li><a href=""><span class="">квартира</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">Приморский район. Центр</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href="">Общая - <span class="">44</span>м&#178; </a></li>
                        <li><a href="">Жилая - <span class="">27.1</span> м&#178;</a></li>
                        <li><a href="">Кухня - <span class="">5.2</span> м&#178;</a></li>
                    </div>
                </div>
            </div>
            <!-- end more apartment item -->

            <!-- more apartment item -->
            <div class="more-item">
                <div class="more-item-img">
                    <a href=""><img src="sources/image/card/photo-small.png"></a>
                    <div class="more-item-like">
                        <a class="scale" href=""><img src="sources/image/card/like.png"></a>
                    </div>
                </div>
                <div class="more-item-info">
                    <div class="more-info-item">
                        <li><a href=""><span class="">г. Одесса</span> </a></li>
                        <li><a href=""><span class="">ул. Балковская</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">2-х комнатная</span> </a></li>
                        <li><a href=""><span class="">квартира</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href=""><span class="">Приморский район. Центр</span> </a></li>
                    </div>
                    <div class="more-info-item">
                        <li><a href="">Общая - <span class="">44</span>м&#178; </a></li>
                        <li><a href="">Жилая - <span class="">27.1</span> м&#178;</a></li>
                        <li><a href="">Кухня - <span class="">5.2</span> м&#178;</a></li>
                    </div>
                </div>
            </div>
            <!-- end more apartment item -->

        </div>
        <div class="apartment-right">
            <div class="contact-form-box-small">
                <div class="contact-form-border">
                    <div class="contact-form-title">
                        <a href="">Филиал №1</a>
                    </div>
                    <div  class="expert-info">
                        <div class="expert-photo">
                            <img src="sources/image/card/expert-photo.png">
                        </div>
                        <div class="expert">
                            <div class="our-expert">Ваш эксперт</div>
                            <div class="expert-name">Татьяна Певтиева</div>
                        </div>
                        <div class="expert-phone-numbers">
                            <div class="expert-phone-number">
                                <div class="phone-icon">
                                    <img  src="sources/image/card/phone.png">
                                </div>
                                <div style="margin-left: 10px;">+38 (049) 702-83-82</div>
                            </div>
                            <div class="expert-phone-number">
                                <div class="mobile-icon">
                                    <img  src="sources/image/card/mobile.png">
                                </div>
                                <div style="margin-left: 13px;line-height: 25px;">+38 (067) 486-30-46</div>
                            </div>
                        </div>
                        <div class="work-time">
                            <li>Время работы офиса:</li>
                            <li>пн-пт: с 09:00 до 21:00</li>
                            <li>сб-вс: с 10:00 до 18:00</li>
                        </div>
                    </div>
                    <!-- end expert info -->
                    <!-- contact form -->
                    <div class="contact-form-box">
                        <form class="contact-form" action="" method="post">
                            <!-- name -->
                            <div class="form-field">
                                <div class="input-img"><img src="sources/image/card/user.png"> </div>
                                <div class="input-field">
                                    <input name="name" type="text" id="name" placeholder="Ваше имя">
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="form-field">
                                <div class="input-img"><img src="sources/image/card/phone.png"> </div>
                                <div class="input-field">
                                    <input name="phone" type="text" id="phone" placeholder="Номер телефона">
                                </div>
                            </div>
                            <!-- submit -->
                            <div class="form-submit scale">
                                Заказать звонок
                            </div>
                        </form>
                    </div>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
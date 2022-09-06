@extends('templates.'.$template)

@section('content')
     
<div id="main" class="mbg">
    <div class="container">  
        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">
                <img class="imgcat pull-left hidden-xs" src="/assets/images/cat/{{ $category->img }}" alt="{{ $category->name }}">  
                <h1>{{ $category->name }}</h1>  
                @if(isset($category->description))
                    <p>{{ $category->description }}</p>
                @endif
                <ul class="row tree1">
                    @foreach($category->supcategories as $supcategory)
                        <li class="col-xs-6 col-sm-5 col-md-4 colp">
                            <div class="tree-l sp-now pos-rel">
                                <a href="{{ url('/category', [$supcategory->id]) }}" class="pos-rel b-f">{{ $supcategory->name }}</a>
                                <span class="count-tree1 b-f pos-abs c-a s13">{{ $supcategory->amount }}</span>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
                <div id="search_form_cat" class="block_search pos-rel">
                    <div class="btn btn-default colsearch visible-xs" data-toggle="collapse" data-target="#colsearch">Все параметры</div>
                    <div id="colsearch" class="collapse in">
                        <form id="block_search" name="block_search" method="GET" action="/search/">
                            <input type="hidden" name="add_cat" class="add_cat" value="1">
                            <input type="hidden" name="add_region" class="add_region" value="">
                            <input type="hidden" name="map" class="add_map" value="">
                            <div class="block_search_ajax">
                                <div class="row search_fields bl-table yamm">
                                    <script>$(".radio-value").on("click",function(){var a="( ";$(this).find("input[type=radio]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-radio").text(a)});
                                        $(".checkbox-value").on("click",function(){var a="( ";$(this).find("input[type=checkbox]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-checkbox").text(a)});
                                    </script>
                               
                                    @foreach($category->filters as $filter)
                                        <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                            <select size="1" name="filter_option_id_{{ $filter->id }}" id="filter_id_{{ $filter->id }}" class="form-control">
                                                <option value="">{{ $filter->name }}</option>
                                                @foreach($filter->options as $options)
                                                    <option value="{{ $options->name }}">{{ $options->name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    @endforeach
                                    <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                        <div class="dropdown yamm-fw">
                                            <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar">
                                                <div class="sp-now-w">Цена</div>
                                            </div>  
                                        
                                            <div class="dropdown-menu">
                                                <div class="slider-inputs">
                                                    <div class="slider-cont" data-id="f_27" data-min="37050" data-max="9660000">
                                                        <div class="input-range">
                                                            <span class="bl-inl rateloc s13 c-5">От</span>
                                                            <input class="from form-control bl-inl al-top" type="text" name="f_27[from]">
                                                            <span class="bl-inl rateloc s13 c-5">До</span>
                                                            <input class="to form-control bl-inl al-top" type="text" name="f_27[to]">
                                                        </div>
                                                        <input type="hidden" class="rate_value" name="f_27[rate]" value="1">
                                                        <div class="rates-range btn-group">
                                                            <div class="rate btn s13 btn-default active" data-rate="1" data-id="1">руб.</div>
                                                            <div class="rate btn s13 btn-default" data-rate="65.52" data-id="2">usd</div>
                                                            <div class="rate btn s13 btn-default" data-rate="71.24" data-id="3">eur</div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>                     
                                    </div>
                                </div>
                            </div>
                            <div class="text-right search-ajax-btn">
                                <span class="linkreset bl-inl al-top pull-left c-7 point a-hov" style="display:none">
                                    Сбросить 
                                    <span class="resetclose s22 pos-rel">×</span>
                                </span>
                                <a href="#" class="gotomap btn btn-default def2 btn-block" title="Объявления на карте">Объявления на карте</a>
                                <input type="submit" class="btn btn-primary btn-block" value="Показать">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="filter-panel bl-tb">
                    <div class="filter-mes btn-group">
                        <a class="btn btn-default active-btn disabled" role="button" href="?filter[shop]=all" rel="nofollow">
                            Все 
                            <span class="c-7 s13">(11)</span>
                        </a>
                        <a class="btn btn-default" role="button" href="?filter[shop]=only" rel="nofollow">
                            От магазинов 
                            <span class="c-7 s13">(3)</span>
                        </a>
                        <a class="btn btn-default" role="button" href="?filter[shop]=none" rel="nofollow">
                            Частные 
                            <span class="c-7 s13">(8)</span>
                        </a>
                    </div>
                    <div class="filter-sort pull-right" id="listsort_cont">
                        <select id="listsort" class="selectpicker select_redirect form-control" data-style="btn-select" data-width="auto">
                            <option value="">Сортировать</option>
                            <option value="?filter[sort]=date_asc">Старые</option>
                            <option selected="" value="?filter[sort]=date_desc">Новые</option>
                            <option value="?filter[sort]=price_asc">Дешевле</option>
                            <option value="?filter[sort]=price_desc">Дороже</option>
                        </select>
                    </div>
                    <form class="changelist btn-group pull-right" name="changelist" action="" method="POST">
                        <button class="btn btn-default spiskom disabled" type="submit" name="changelist" value="spiskom" data-toggle="tooltip" data-placement="top" title="Выводить списком с фото"></button>
                        <button class="btn btn-default blokami " type="submit" name="changelist" value="blokami" data-toggle="tooltip" data-placement="top" title="Показать с большими фото"></button>
                        <input type="hidden" name="_csrf" value="57aea4374f54556fa399cad6415126651662241955">
                    </form>
                    <div class="current-list pos-rel bl-tb">
                        <div class="dropdown-toggle bl-inl al-top c-7 br3 point" data-toggle="dropdown">
                            <a href="#" class="current">
                                <span>Валюта</span>
                            </a> 
                        </div>
                        <ul class="dropdown-menu">
                            <li class="active dropdown-item">
                                <a href="?filter[currency]=" rel="nofollow">валюта пользователя</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="?filter[currency]=1" rel="nofollow">
                                    <span class="currency">₽</span>
                                    руб.
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="?filter[currency]=2" rel="nofollow">
                                    <span class="currency">$</span>
                                    usd
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="?filter[currency]=3" rel="nofollow">
                                    <span class="currency">€</span>
                                    eur
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offerlist">
                    <div class="cl-line pos-rel"></div>
                    <div id="message_30" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="Диски колесные алюминиевые R17-20" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="Диски колесные алюминиевые R17-20" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">Диски колесные алюминиевые R17-20</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">Автозапчасти и принадлежности<br> Москва</div>
                            <div class="magazin-l">
                                <a class="btn btn-default s13" href="/shops/7-zapchasti-all.html" title="Запчасти ALL">Запчасти ALL</a>
                            </div>  
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:28</span>
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span>
                                39 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_29" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="Haval Jolion 2021" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 2 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Haval Jolion 2021" src="/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_0.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Haval Jolion 2021" src="/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="Haval Jolion 2021" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">Haval Jolion 2021</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">
                                Легковые
                                <br>
                                 Москва
                            </div>
                            <div class="magazin-l">
                                <a class="btn btn-default s13" href="/shops/6-avilon-ford-volgogradskij.html" title="АВИЛОН Ford Волгоградский">АВИЛОН Ford Волгоградский</a>
                            </div>  
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:28</span> 
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span>
                                1 899 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_27" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="Федеральная сеть станций послегарантийного обслуживания." href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Федеральная сеть станций послегарантийного обслуживания." src="/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Федеральная сеть станций послегарантийного обслуживания." src="/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_0.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="Федеральная сеть станций послегарантийного обслуживания." href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html">Федеральная сеть станций послегарантийного об...</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">
                                Автосервис и услуги
                                <br> 
                                Москва
                            </div>
                            <div class="magazin-l">
                                <a class="btn btn-default s13" href="/shops/5-avtoservis-fit-service.html" title="Автосервис FIT SERVICE">Автосервис FIT SERVICE</a>
                            </div>  
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:27</span> 
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">не указана</div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="27" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_17" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="BRP Can-Am Spyder Roadster" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="BRP Can-Am Spyder Roadster" src="/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="BRP Can-Am Spyder Roadster" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">
                                Мототехника и другие средства
                                <br> 
                                Москва
                            </div>
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:25</span>  
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span> 
                                670 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_2" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="Продаю CFMoto CF500" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Продаю CFMoto CF500" src="/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Продаю CFMoto CF500" src="/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_1.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="Продаю CFMoto CF500" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">Продаю CFMoto CF500</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">
                                Мототехника и другие средства
                                <br> 
                                Москва
                            </div>
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:25</span>  
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span> 
                                205 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="2" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_11" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="BRP Ski-Doo Summit 850" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="BRP Ski-Doo Summit 850" src="/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="BRP Ski-Doo Summit 850" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">Мототехника и другие средства<br> Москва</div>
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:25</span>  
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span>
                                1 250 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                    <div class="cl-line pos-rel"></div>
                    <div id="message_15" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="Gac GS8 2022 GT 2 поколение" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/Legkovye/15-gac-gs8-2022-gt-2-pokolenie.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 2 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9641333bdd9a85aea3681e9517220357_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Gac GS8 2022 GT 2 поколение" src="/uploads/usr/0/ts_9641333bdd9a85aea3681e9517220357_35_0.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9641333bdd9a85aea3681e9517220357_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Gac GS8 2022 GT 2 поколение" src="/uploads/usr/0/ts_9641333bdd9a85aea3681e9517220357_35_1.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="Gac GS8 2022 GT 2 поколение" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/Legkovye/15-gac-gs8-2022-gt-2-pokolenie.html">Gac GS8 2022 GT 2 поколение</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">Легковые<br> Санкт-Петербург</div>
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">14 февраля 2022 в 21:24</span> 
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span>
                                2 718 000
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="15" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                    <!--/bl-tb offer-->
                </div><!--/offerlist-->

                <div class="pagination-bar bl-tb">            
                    <ul class="pagination pull-left">
                        <li>
                            <a href="/Avtotransport/page1.html">1</a>
                        </li>
                        <li>
                            <a href="/Avtotransport/page2.html">2</a>
                        </li>
                    </ul>  
                    <div class="pagination-btn pull-right">
                        <span class="btn btn-default disabled s13">Предыдущая</span>
                        <a class="btn btn-default s13" href="page2.html" title="">Следующая</a>      
                    </div>  
                
                </div>
                <div class="c-7 s13 f-l page-pokaz text-right">Показано: 7 из 11 объявлений
                </div>
                <div class="promo-subscribe bl-tb hidden-xs">
                    <div class="promo-subscribe-text pull-left">Получайте новые объявления<br>из категории Автотранспорт</div>
                    <a class="btn btn-primary s13 pull-right" href="/users/subscribe/">Подписаться</a>
                </div>  

            </div>
                
            <div class="bl-cell al-top bl-right">
                <div class="sidebar_right pos-rel">    
                    <div class="block-specials lateral-specials b-f br3">
                        <div class="block-v pos-rel dropdown point dropdown-hover s15 f-m">
                            <h2 class="bl-inl al-top s15">VIP-объявления</h2> 
                            <span class="us-bl bl-inl pull-right"></span>
                            <div class="dropdown-menu service-presets-vip" style="display: none;">
                            <span class="s18 f-r service-presets-tit bl-bl">VIP-объявление</span>
                            <div class="s13 f-r service-presets-desc">Ваше объявление будет отображаться в специальном блоке на страницах категорий и объявлений.</div> 
                            <a class="btn btn-primary bl-bl f-r" href="/users/order/?service=b">Подключить</a>
                        </div>  
                    </div>
                    <div class="bl-specials-offer-slider">
                        <div class="specials-container ov-h">
                            <div class="lSSlideOuter ">
                                <div class="lSSlideWrapper usingCss" style="transition-duration: 400ms; transition-timing-function: ease;">
                                <ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1416px; transform: translate3d(-236px, 0px, 0px); height: 236.422px; padding-bottom: 0%;">
                                    <li class="specials-offer pos-rel clone left" style="width: 236px; margin-right: 0px;">
                                        <a title="" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div> 
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class="active"></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                                    </div>
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>BRP Ski-Doo Summit 850</h4>
                                        </a>
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>  
                                        <div class="sp-now">
                                            <span class="s15">
                                                <span class="currency">₽</span>
                                                1 250 000
                                            </span>
                                            <span class="reg_cat s13 c-7 f-l">Москва</span>
                                        </div>
                                    </li>
                                    <li class="specials-offer pos-rel lslide active" style="width: 236px; margin-right: 0px;">
                                        <a title="" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/mototeh/22-yamaha-xvs-650.html">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class="active"></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Yamaha XVS 650</h4>
                                        </a>
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="22" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span> 
                                        <div class="sp-now">
                                            <span class="s15"><span class="currency">₽</span> 
                                                320 000
                                            </span>
                                            <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                        </div>
                                    </li> 
                                    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
                                        <a title="" href="https://universal.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class="active"></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_2.webp" style="display: none;">
                                                    </div>
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Продам 1-к квартиру, 4...</h4>
                                        </a>
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="1" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>  
                                        <div class="sp-now">
                                            <span class="s15">
                                                <span class="currency">₽</span>3 000 000</span>
                                                <span class="reg_cat s13 c-7 f-l">Москва</span>
                                        </div>
                                    </li> 
                                    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
                                        <a title="" href="https://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sdam/14-arenda-bez-posrednikov-sdam.html">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class="active"></div>
                                                    </div></div>
                                                    <div class="image-wrap">
                                                        <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_ce2eadcdb46c5d93cc0ea237b01be776_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                        <img alt="" src="/uploads/usr/0/ts_ce2eadcdb46c5d93cc0ea237b01be776_35_1.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Аренда, без посреднико...</h4>
                                        </a>
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="14" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>  
                                        <div class="sp-now">
                                            <span class="s15"><span class="currency">₽</span>15 000</span>
                                            <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                        </div>
                                    </li> 
                                    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
                                        <a title="" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div> 
                                                <div class="tmb-wrap"><div class="tmb-wrap-table">
                                                    <div class="active"></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="image-wrap">
                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img alt="" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                                </div>
                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div
                                    ><h4>BRP Ski-Doo Summit 850</h4>
                                </a>
                                <span class="notepad-fav">
                                    <span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                </span>  
                                <div class="sp-now">
                                    <span class="s15"><span class="currency">₽</span>1 250 000</span>
                                    <span class="reg_cat s13 c-7 f-l">Москва</span>
                                </div>
                            </li>
                            <li class="specials-offer pos-rel clone right" style="width: 236px; margin-right: 0px;">
                                <a title="" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/mototeh/22-yamaha-xvs-650.html">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                            </div></div>
                                            <div class="image-wrap">
                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img alt="" src="/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp" style="display: none;">
                                                </div>
                                            </div>
                                        </div>
                                        <h4>Yamaha XVS 650</h4>
                                    </a>
                                    <span class="notepad-fav">
                                        <span class="notepad ic-star" data-id="22" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                    </span>  
                                    <div class="sp-now">
                                        <span class="s15">
                                            <span class="currency">₽</span> 320 000
                                        </span>
                                        <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="lSAction">
                                <a class="lSPrev"></a>
                                <a class="lSNext"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
        </div> 
  

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

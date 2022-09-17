@extends('templates.'.$template)

@section('content')

<div id="main" class="mbg">
    <div class="container">  
        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">
                <h1>{{ $search }}</h1>  
                <script>
                    var must = new Array();
                    var cond = new Array();
                    var off = new Array();
                    var sort_by = '';
                    var desc = '';

                </script>
                <div class="result-bl b-f5 br3 s15">Показаны результаты для всех категорий</div>
                <div class="block_search search-map">
                    <form name="block_search" method="GET" action="/search">
                        <div class="search_fields row search-category"> 
                            <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                <h5 class="list-title f-l s15">
                                    Все рубрики
                                </h5>  
                                <select class="form-control" size="1" name="category_id">
                                    <option value="">Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                <h5 class="list-title f-l s15">Все регионы</h5> 
                                <select class="form-control" size="1" name="region_id">
                                    <option value="">Выберите регион</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div> 
                        <div class="search_fields get-text row">
                            <div class="col-xs-12 col-sm-6 col-md-8 colp2">
                                <input class="autocomplete-cat form-control" placeholder="Что вы ищете?" value="{{ $search }}" type="text" name="search" autocomplete="off">
                            </div>
                        </div>
                        <div class="block_search_ajax">
                            <div class="row search_fields bl-table yamm">
                                <script>$(".radio-value").on("click",function(){var a="( ";$(this).find("input[type=radio]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-radio").text(a)});
                                    $(".checkbox-value").on("click",function(){var a="( ";$(this).find("input[type=checkbox]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-checkbox").text(a)});
                                </script>
                                <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                    <div class="dropdown yamm-fw radio-value">
                                        <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control">
                                            <div class="sp-now-w">Сортировать по полю 
                                                <span class="selected-radio"></span>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="btn-group">
                                                <div class="btn btn-default cl-radio" role="button">
                                                    <input id="sort_by1" name="sort_by" type="radio" value="date_add">
                                                    <label for="sort_by1">Дата</label>
                                                </div>
                                                <div class="btn btn-default cl-radio" role="button">
                                                    <input class="form-check" id="f_271" name="sort_by" type="radio" value="price">
                                                    <label for="f_271">Цена</label>
                                                </div>
                                            </div>
                                            <div class="sort-desc">
                                                <div class="bl-inl al-top cl-check">
                                                    <input class="form-check" id="desc1" name="desc" type="checkbox" value="yes">
                                                    <label for="desc1">В обратном порядке</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                    <div class="dropdown yamm-fw">
                                        <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar">
                                            <div class="sp-now-w">Цена</div>
                                        </div>  
                                        <div class="dropdown-menu">
                                            <div class="slider-inputs">
                                                <div class="slider-cont" data-id="f_27" data-min="1140" data-max="9660000"> 
                                                    <div class="input-range">
                                                        <span class="bl-inl rateloc s13 c-5">От</span>
                                                        <input class="from form-control bl-inl al-top" type="number" name="price_from">
                                                        <span class="bl-inl rateloc s13 c-5">До</span>
                                                        <input class="to form-control bl-inl al-top" type="number" name="price_to">
                                                    </div>
                                                    
                                                    <div class="rates-range btn-group">
                                                        <div class="rate btn s13 btn-default active" data-rate="1" data-id="1">руб.</div>
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>  
                                    </div>     
                                </div>
                            </div>
                        </div> 
                        <div class="text-center">
                            <br>
                            <input type="submit" class="btn btn-primary s16 btn-block" value="Показать">
                        </div>
                    </form>
                </div>
                <link href="/templates/universal/css/style-search.css" rel="stylesheet">
                <br>
                @if(count($adverts) == 0)
                    <div class="alert alert-warning">Нет объявлений</div>
                    @else
                    <div class="filter-panel bl-tb cl-s-fil">  
                        <span class="count-s pull-left">Всего: {{ count($adverts) }} объявление</span>  
                        <div class="current-list pos-rel bl-tb">
                        </div>
                    </div>
                    <div class="offerlist">
                        @foreach($adverts as $advert)

                        <div class="cl-line pos-rel"></div>
                            <div id="message_30" class="offer bl-tb">
                                <div class="offer-photo bl-cell al-top pos-rel">
                                    <div class="pos-rel ov-h">
                                        <a title="{{ $advert->title }}" href="#">
                                            <div class="carousel-img br3 brazzers-daddy">
                                                <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class="active"></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    @if($advert->test == true)
                                                        @foreach($advert->images as $image)
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/{{$image->name}}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                <img alt="{{ $advert->title }}" src="/assets/uploads/usr/0/{{$image->name}}" style="display: none;">
                                                            </div>
                                                        @endforeach
                                                        @elseif($advert->test == false)
                                                            @foreach($advert->images as $image)
                                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/storage/images/{{$image->name}}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                    <img alt="{{ $advert->title }}" src="/storage/images/{{$image->name}}" style="display: none;">
                                                                </div>
                                                            @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>  
                                <div class="offer-title bl-cell al-top pos-rel">
                                    <h3>
                                        <a class="f-m a-hov" title="{{ $advert->title }}" href="#">{{ $advert->title }}</a>
                                    </h3>
                                    <div class="offer-location s13 f-l c-7">
                                        
                                            {{ $advert->category->name }}
                                        
                                        <br> Москва</div>
                                    <div class="magazin-l">
                                        <a class="btn btn-default s13" href="/shops/7-zapchasti-all.html" title="Запчасти ALL">Запчасти ALL</a>
                                    </div>  
                                    <div class="offer-details pos-abs">
                                        @if($advert->created_at != null)
                                            <span class="offer-date bl-inl al-top s13 f-l c-7">{{ $advert->created_at }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="offer-price bl-cell al-top pos-rel text-right">
                                    <div class="price bl-inl al-top s16 f-m">
                                        <span class="currency">₽</span>
                                        {{ $advert->price }}
                                    </div>
                                    <div class="offer-actions pos-abs">
                                        <div class="flex-btnss">
                                            
                                            <!-- <a href="#deleteAdvert" data-toggle="modal" class="btn btn-primary delete-btn" data-id="{{$advert->id}}">
                                                удалить
                                            </a>
                                            <a href="/cabinet/updateadvert/{{$advert->id}}" class="btn btn-primary">
                                                редактировать
                                            </a> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div><!--/offerlist-->
                    <div class="mt-3">
                       
                    </div>
                    
                @endif
                {{ $adverts->withQueryString()->links() }} 
            </div> 
            <div class="bl-cell al-top bl-right">
                <div class="sidebar_right pos-rel"> 
                    <div class="block-specials lateral-specials b-f br3">
                        <div class="block-v pos-rel dropdown point dropdown-hover s15 f-m">
                            <h2 class="bl-inl al-top s15">VIP-объявления</h2> 
                            <span class="us-bl bl-inl pull-right"></span>
                            <div class="dropdown-menu service-presets-vip">
                                <span class="s18 f-r service-presets-tit bl-bl">VIP-объявление</span>
                                <div class="s13 f-r service-presets-desc">Ваше объявление будет отображаться в специальном блоке на страницах категорий и объявлений.</div> 
                                    <a class="btn btn-primary bl-bl f-r" href="/users/order/?service=b">Подключить</a>
                                </div> 
                            </div> 
                            <div class="bl-specials-offer-slider">
                                <div class="specials-container ov-h">
                                    <div class="lSSlideOuter ">
                                        <div class="lSSlideWrapper usingCss" style="transition-duration: 400ms; transition-timing-function: ease;">
                                        <ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1416px; transform: translate3d(-472px, 0px, 0px); height: 236.422px; padding-bottom: 0%;">
                                            <li class="specials-offer pos-rel clone left" style="width: 236px; margin-right: 0px;">
                                                <a title="" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                                    <div class="carousel-img br3 brazzers-daddy">
                                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div> 
                                                        <div class="tmb-wrap">
                                                            <div class="tmb-wrap-table">
                                                                <div class="active"></div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="image-wrap">
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                <img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;">
                                                            </div>
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                <img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp" style="display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4>BRP Can-Am Spyder Road...</h4>
                                                </a>
                                                <span class="notepad-fav">
                                                    <span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                                </span>  
                                                <div class="sp-now">
                                                    <span class="s15">
                                                        <span class="currency">₽</span> 670 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Москва</span>
                                                </div>
                                            </li>
                                            <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
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
                                                        <span class="currency">₽</span>1 250 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Москва</span>
                                                </div>
                                            </li> 
                                            <li class="specials-offer pos-rel lslide active" style="width: 236px; margin-right: 0px;">
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
                                                        <span class="currency">₽</span>3 000 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Москва</span>
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
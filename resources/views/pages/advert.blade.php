@extends('templates.'.$template)

@section('content')
<div id="main" class="mbg">
    <div class="container">
        <ol class="breadcrumb s13 f-l bread-product">
            <li><a class="btn-back bl-inl" title="Вернуться назад" href="javascript:history.back()">назад</a></li>
            <li><a title="" href="/">Главная</a></li>
            
            <li><a title="" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/">{{ $advert->category->name}}</a></li> 
            
        </ol>  
        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">
                <div class="product pos-rel">
                    <div class="product_header bl-tb">
                        <div class="bl-cell al-top">
                            <div class="s19 f-m">
                                <h1>{{ $advert->title }}</h1>
                            </div>
                            <div class="product_header_info">
                                <div class="product_header_btn bl-inl al-mid">
                                    <span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить в избранные"></span>
                                    <a class="print bl-inl al-mid bd-d3 br3 b-f5-h hidden-xs" data-toggle="tooltip" data-placement="top" title="" href="" onclick="go('/print/17'); return false;" data-original-title="Печать объявления"></a>
                                    <span class="bl-inl al-mid point" data-toggle="tooltip" data-placement="top" title="" data-original-title="Предложить свою цену">
                                        <div data-toggle="modal" data-target="#bid" class="bid"></div>
                                    </span>
                                    <span class="bl-inl al-mid point" data-toggle="tooltip" data-placement="top" title="" data-original-title="Пожаловаться на это объявление">
                                        <div data-toggle="modal" data-target="#abuse" class="abuse"></div>
                                    </span>
                                </div>
                                <div class="product-services bl-inl al-mid">
                                    <a class="premium_modal us-col bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=m&amp;message_id=17" data-toggle="tooltip" data-placement="top" title="Выделить цветом"></a>
                                    <a class="premium_modal us-top bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=r&amp;message_id=17" data-toggle="tooltip" data-placement="top" title="" data-original-title="Топ-объявление"></a>
                                    <a class="premium_modal us-bl bl-inl al-mid br3 bd-d3 b-f5-h" href="/services.html?service=b&amp;message_id=17" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vip-объявление"></a>
                                </div> 
                            </div>
                        </div>
                        <div class="bl-cell al-top text-right bl-cell-price">
                            <div class="product_price">
                                <span class="price-item s20 f-m">
                                    <span class="currency">₽</span> {{$advert->price}}
                                </span>
                            </div>
                            <div class="product_header_count c-7 s13">
                                <span data-toggle="tooltip" data-placement="top" title="Добавлено 14.02.2022 в 21:25 – Будет удалено 24.09.2025 в 00:00" class="data">{{ $advert->created_at}}</span>  
                                
                            </div>
                        </div>
                    </div><!--product_header-->
                    <div class="product_block">
                        <div class="product_block_header bl-tb">
                            <div class="product_block_user bl-cell al-top pos-rel">
                                <span class="user-avatar text-up text-center bl-inl al-top br100 c-f f-m" id="avatar">А</span>
                                <div class="user-info bl-inl al-top">
                                    <div class="email-conf bl-inl pos-abs br20" data-toggle="tooltip" data-placement="top" title="" data-original-title="Пользователь подтверждён"></div>
                                        <a class="c-20 a-hov" data-toggle="tooltip" data-placement="top" title="Перейти в профиль" href="/userinfo/1/">
                                            <span class="user-info-name f-m s16" id="name">Админ</span>
                                        </a>
                                    <div class="product_region s13">Москва</div>
                                </div>
                            </div>
                            <div class="product_block_contacts bl-cell al-mid text-right">
                                <a class="contact_modal btn btn-default def2 s15" href="/sendmail/?messageid=17&amp;userid=1" title="">Написать</a>
                                <a class="btn-phone btn btn-primary s15" href="#" id="f_32_17">
                                    <span>Показать 
                                        <span>Телефон</span>
                                    </span>
                                </a>
                            </div> 
                        </div>
                        <div class="product_block_body">
                            <div class="text-center">
                                <div class="fotorama_container product_fotorama pos-rel bl-inl al-top">
                                    <style>.fotorama1662926256459 .fotorama__nav--thumbs .fotorama__nav__frame{
                                                                                                                padding:2px;
                                                                                                                height:64px}
                                                                                                                .fotorama1662926256459 .fotorama__thumb-border{
                                                                                                                height:60px;
                                                                                                                border-width:2px;
                                                                                                                margin-top:2px
                                                                                                                }
                                    </style>
                                    <div class="fotorama--hidden"></div>
                                    <div class="fotorama fotorama1662926256459" data-nav="thumbs" data-fit="scaledown" data-thumbwidth="90" data-allowfullscreen="true" data-zoomtofit="false" data-width="100%" data-maxwidth="858" data-ratio="858/380">
                                        <div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls" style="width: 100%; min-width: 0px; max-width: 858px;">
                                            <div class="fotorama__stage" style="width: 858px; height: 380px;">
                                                <div class="fotorama__fullscreen-icon" tabindex="0" role="button"></div>
                                                <div class="fotorama__stage__shaft" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 858px; margin-left: 0px;">
                                                    @foreach($advert->images as $image)
                                                    <div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active" style="left: 0px;">
                                                        <img src="/assets/images/{{$image->name}}" class="fotorama__img" style="width: 569.822px; height: 380px; left: 144.089px; top: 0px;">
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="product_params">
                                <div class="product_params_title s17 f-m">Параметры объявления</div>
                                <ul class="product_params_list row">
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Характер объявления:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_1=2">Предложение</a>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Год выпуска:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_4=160">2010</a>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Пробег:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_7=178">10 000</a>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>КПП:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_8=185">Механика</a>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Опции:</span> 
                                        <a class="c-20 a-hov" href="/sort/?f_9[]=189">Усилитель руля</a>, 
                                        <a class="c-20 a-hov" href="/sort/?f_9[]=188">Подогрев передних сидений</a>, 
                                        <a class="c-20 a-hov" href="/sort/?f_9[]=186">ABS</a>
                                    </li> 
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Торг:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_28=314">Возможен</a>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Доставка:</span> 
                                        <a class="c-20 a-hov" title="" href="/sort/?f_29=316">Курьер</a>
                                    </li> 
                                    <li class="col-xs-12 col-sm-6 col-md-6">
                                        <span>Место осмотра (адрес):</span> ул. Ленина
                                    </li>
                                </ul>  
                            </div> 
                            <div class="product_description">
                                <div class="product_description_title s17 f-m">Описание продавца</div>
                                <div class="product_description_text">{{ $advert->description }}
                                </div>
                                
                            </div><!--product_description-->
                            <div class="modal fade" id="bid" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="/bid/?messageid=17&amp;userid=1"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="abuse" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-abuse-header text-center s18 f-m">Жалоба на объявление</div>
                                            <div id="complaint-result"></div>
                                            <div id="complaint">
                                                <form id="complaint-form">
                                                    <div class="form-group complaint-form-email">
                                                        <input type="email" name="email" required="" value="" placeholder="Ваш e-mail" class="form-control">
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema1" value="Товар продан" type="radio" required="">
                                                        <label for="tema1">Товар продан</label>
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema2" value="Неверная цена" type="radio">
                                                        <label for="tema2">Неверная цена</label>
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema3" value="Неверное описание, фото" type="radio">
                                                        <label for="tema3">Неверное описание, фото</label>
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema4" value="Неверный адрес" type="radio">
                                                        <label for="tema4">Неверный адрес</label>
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema5" value="Мошенник" type="radio">
                                                        <label for="tema5">Мошенник</label>
                                                    </div>
                                                    <div class="form-group cl-radio2">
                                                        <input name="abuse" id="tema6" value="Другая причина" type="radio">
                                                        <label class="field_label" for="tema6">Другая причина</label>
                                                    </div>
                                                    <input name="url" type="hidden" value="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                                    <div class="text-center">
                                                        <input type="submit" value="Отправить" class="btn btn-primary s15">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="comments" class="blogs-comments-area text-center pos-rel">
                                <div class="add-comment br3 b-f5">
                                    <span class="bl-inl al-top">Нет комментариев</span>
                                </div> 
                                <div class="blogs-comment-respond" id="respond">
                                    <div class="bl-inl" id="add-comment">
                                        <div class="comment-avtoris pos-abs" data-toggle="tooltip" data-placement="top" title="Оставлять комментарии могут только зарегистрированные пользователи!"></div>
                                    </div> 
                                </div>
                            </div>  
                        </div><!--product_block_body_container-->
                    </div><!--product_block-->


                    <div class="product_list">
                        <h3 class="product_list-title s17 f-m">Похожие объявления</h3>
                        <div class="wrapper-scroll">
                            <ul class="wrapper-scroll-bl row">
                                <li class="product_list-item col-sm-6 col-md-3">
                                    <a class="product_list-imag bl-bl" title="Продаю CFMoto CF500" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">
                                        <div class="imgLiquidFill imgLiquid br3 imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                            <img alt="Продаю CFMoto CF500" src="/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp" style="display: none;">
                                        </div>
                                        <div class="product_list-tit sp-now c-20 s15">Продаю CFMoto CF500</div>
                                    </a>
                                    <div class="product_list-region s13 f-l sp-now">Москва</div>
                                    <div class="product_list-price s16">
                                        <span class="currency">₽</span> 205 000
                                    </div>
                                </li>
                                <li class="product_list-item col-sm-6 col-md-3">
                                    <a class="product_list-imag bl-bl" title="Продаю соболиную шубу" href="https://universal.elite-board.org/Russia/spb/Lichnye-veshi/women/3-prodaju-sobolinuju-shubu.html">
                                        <div class="imgLiquidFill imgLiquid br3 imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_93cbcbfc4abf91495cdc26b57cb27e32_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                            <img alt="Продаю соболиную шубу" src="/uploads/usr/0/ts_93cbcbfc4abf91495cdc26b57cb27e32_35_0.webp" style="display: none;">
                                        </div>
                                        <div class="product_list-tit sp-now c-20 s15">Продаю соболиную шубу</div>
                                    </a>
                                    <div class="product_list-region s13 f-l sp-now">Санкт-Петербург</div>
                                    <div class="product_list-price s16">
                                        <span class="currency">₽</span>95 000
                                    </div>
                                </li>
                                <li class="product_list-item col-sm-6 col-md-3">
                                    <a class="product_list-imag bl-bl" title="Продаю 3-х комнатную квартиру, 80 кв.м." href="https://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
                                        <div class="imgLiquidFill imgLiquid br3 imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                            <img alt="Продаю 3-х комнатную квартиру, 80 кв.м." src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_0.webp" style="display: none;">
                                        </div>
                                        <div class="product_list-tit sp-now c-20 s15">Продаю 3-х комнатную...</div>
                                    </a>
                                    <div class="product_list-region s13 f-l sp-now">Санкт-Петербург</div>
                                    <div class="product_list-price s16">
                                        <span class="currency">₽</span>3 200 000
                                    </div>
                                </li>
                                <li class="product_list-item col-sm-6 col-md-3">
                                    <a class="product_list-imag bl-bl" title="Продаю Honda CBR 1000 RR/RA Fireblade" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/13-prodaju-honda-cbr-1000-rr-ra-fireblade.html">
                                        <div class="imgLiquidFill imgLiquid br3 imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_381cba623b965965a50257243bf7e3e5_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                            <img alt="Продаю Honda CBR 1000 RR/RA Fireblade" src="/uploads/usr/0/ts_381cba623b965965a50257243bf7e3e5_35_0.webp" style="display: none;">
                                        </div>
                                        <div class="product_list-tit sp-now c-20 s15">Продаю Honda CBR 1000 RR/RA...</div>
                                    </a>
                                    <div class="product_list-region s13 f-l sp-now">Москва</div>
                                    <div class="product_list-price s16">
                                        <span class="s14">Цена не указана</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--product-->
                <div class="modal fade" id="contact_autor_div" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header pos-rel">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="modal-header-user-name bl-tb text-center s20">Написать сообщение</div>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body-user text-center">
                                    <div class="modal-body-user-info">Чтобы начать диалог с продавцом, авторизуйтесь на сайте, 
                                        <br>либо пройдите процедуру регистрации
                                    </div>
                                    <div class="modal-body-user-btn">
                                        <a class="btn btn-default def2 btn-block" href="/users/login/">Войти</a>
                                        <a class="btn btn-primary btn-block" href="/users/register/">Регистрация</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="premium_div" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <iframe id="premium_iframe" src=""></iframe>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">var stringToColor=function(a){},name="Админ",letter=name.substr(0,1),elementAvatar=document.getElementById("avatar"),elementName=document.getElementById("name");elementName.innerHTML=name;elementAvatar.innerHTML=letter;</script>   
                <script type="text/javascript">function go(addr) {window.open(addr,"MyWin", "scrollbars=yes,menubar=yes,width=700,height=668");}</script>
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
                                        <ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1416px; transform: translate3d(-236px, 0px, 0px); height: 236.422px; padding-bottom: 0%;">
                                            <li class="specials-offer pos-rel clone left" style="width: 236px; margin-right: 0px;">
                                                <a title="" href="https://universal.elite-board.org/Russia/spb/Muzyka-iskusstvo/instrumenti/5-jelektrogitara-fgn-eel-hm.-japan-s-kejsom.html">
                                                    <div class="carousel-img br3 brazzers-daddy">
                                                        <div class="tmb-wrap">
                                                            <div class="tmb-wrap-table">
                                                                <div class="active"></div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="image-wrap">
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp" style="display: none;"></div>
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp" style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                    <h4>Электрогитара FGN EEL-...</h4>
                                                </a>
                                                <span class="notepad-fav">
                                                    <span class="notepad ic-star" data-id="5" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                                </span>  
                                                <div class="sp-now">
                                                    <span class="s15">
                                                        <span class="currency">₽</span>75 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                                </div>
                                            </li>
                                            <li class="specials-offer pos-rel lslide active" style="width: 236px; margin-right: 0px;">
                                                <a title="" href="https://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sdam/14-arenda-bez-posrednikov-sdam.html">
                                                    <div class="carousel-img br3 brazzers-daddy">
                                                        <div class="tmb-wrap">
                                                            <div class="tmb-wrap-table">
                                                                <div class="active"></div>
                                                            </div>
                                                        </div>
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
                                                    <span class="s15">
                                                        <span class="currency">₽</span>15 000
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
                                                        <span class="currency">₽</span>3 000 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Москва</span>
                                                </div>
                                            </li> 
                                            <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
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
                                                <a title="" href="https://universal.elite-board.org/Russia/spb/Muzyka-iskusstvo/instrumenti/5-jelektrogitara-fgn-eel-hm.-japan-s-kejsom.html">
                                                    <div class="carousel-img br3 brazzers-daddy">
                                                        <div class="tmb-wrap">
                                                            <div class="tmb-wrap-table">
                                                                <div class="active"></div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                        <div class="image-wrap">
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                <img alt="" src="/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp" style="display: none;">
                                                            </div>
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                                <img alt="" src="/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp" style="display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4>Электрогитара FGN EEL-...</h4>
                                                </a>
                                                <span class="notepad-fav">
                                                    <span class="notepad ic-star" data-id="5" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                                </span>  
                                                <div class="sp-now">
                                                    <span class="s15">
                                                        <span class="currency">₽</span>75 000
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                                </div>
                                            </li>
                                            <li class="specials-offer pos-rel clone right" style="width: 236px; margin-right: 0px;">
                                                <a title="" href="https://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sdam/14-arenda-bez-posrednikov-sdam.html">
                                                    <div class="carousel-img br3 brazzers-daddy">
                                                        <div class="tmb-wrap">
                                                            <div class="tmb-wrap-table">
                                                                <div class="active"></div>
                                                            </div>
                                                        </div>
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
                                                    <span class="s15">
                                                        <span class="currency">₽</span>15 000
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
                    <div class="headerblock br3 b-f ">
                        <div class="headercontent">
                            <p class="text-center" style="margin:0">
                                <a href="https://elite-board.org/dizain.html" target="_blank " title=""><img alt="" src="/images/cat/design.png"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('templates.'.$template)

@section('content')
     
<div id="main">
    <div class="container">  
        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">
                <div class="text-center">
                    <h1 class="ind-h1 s25">Платформа Объявлений</h1>
                    <p class="s17 c-4">Совершайте быструю продажу и выгодную покупку в вашем регионе!</p>
                </div>

                <div class="bl-tb bltree-ind">
                    <div class="bl-cell al-top">
                        <div class="categories">
                            <ul class="row tree4 wrapper-scroll-tree4"> 
                                @foreach($categories as $category)
                                    @if($category->parent_id == null)
                                        <li class="categories-item col-xs-6 col-sm-4 col-md-4">
                                            <a href="{{ url('/category', [$category->id]) }}" class="c-4 bl-bl b-f br3 pos-rel sp-now">
                                                <span class="img-circ pull-left">
                                                    <img src="/assets/images/cat/{{ $category->img }}" alt="{{ $category->name }}">
                                                </span> 
                                                <span class="name-cat s15 bl-bl sp-now">{{ $category->name }}</span>
                                                <span class="count-tree c-7 s12 bl-bl sp-now">{{ $category->amount }} объявлений</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div> 
                    </div>
  
                    <div class="bl-cell al-top blsection-services">
                        <div class="section-services">
                            <div class="section-services-item-bl">
                                <a href="/assets/uslugi_saita/">
                                    <div class="ssi-bl1 s16 f-m c-20">Продвижение объявлений</div>
                                    <span class="c-7 s13">Специальные услуги позволят значительно ускорить продажу вашего объявления.</span>
                                </a>
                            </div>
                            <div class="section-services-item-bl">
                                <a href="/assets/users/shop/">
                                    <div class="ssi-bl2 s16 f-m c-20">Свой магазин</div>
                                    <span class="c-7 s13">Подробная информация о компании повысит доверие к вашему бизнесу со стороны клиентов.</span>
                                </a>
                            </div>
                            <div class="section-services-item-bl">
                                <a href="/assets/reklama-na-saite/">
                                    <div class="ssi-bl3 s16 f-m c-20">Реклама на сайте</div>
                                    <span class="c-7 s13">Эффективный способ привлечь новых клиентов и вывести бизнес на новый уровень.</span>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- Начало блока вип обьявлений -->
                <div class="list-block-ind row">
                    <div class="title-name s19 col-sm-12">
                        VIP-объявления 
                        <a class="a-all s13 c-7 f-l" href="/allmessvip/">Все объявления</a>
                    </div>

                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">
                            <!-- Начало обьявления -->
                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">
                                    <div class="message_block_imag br3 pos-rel">
                                        <a title="Yamaha XVS 650" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/mototeh/22-yamaha-xvs-650.html">
                                            <div class="carousel-img brazzers-daddy">
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img alt="Yamaha XVS 650" src="/assets/uploads/usr/0/ts_d77f0ea9cafe2413c3f3677775a3993c_35_1.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>  
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="22" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span> 
                                    </div>  
                                    <div class="message_block_tit pos-rel">
                                        <h3>
                                            <a class="c-20 s14" title="Yamaha XVS 650" href="https://universal.elite-board.org/Russia/spb/Avtotransport/sale/mototeh/22-yamaha-xvs-650.html">Yamaha XVS 650</a>
                                        </h3>
                                        <div class="sp-now">
                                            <span class="s15">
                                                <span class="currency">₽</span>
                                                 320 000
                                            </span>
                                            <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Конец обьявления -->
                            <!-- Начало обьявления с 2 фото -->
                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">
                                    <div class="message_block_imag br3 pos-rel">
                                        <a title="Электрогитара FGN EEL-HM. Japan, с кейсом" href="https://universal.elite-board.org/Russia/spb/Muzyka-iskusstvo/instrumenti/5-jelektrogitara-fgn-eel-hm.-japan-s-kejsom.html">
                                            <div class="carousel-img brazzers-daddy">
                                                <div class="tmb-wrap">
                                                    <div class="tmb-wrap-table">
                                                        <div class=""></div>
                                                        <div class="active"></div>
                                                    </div>
                                                </div>
                                                <div class="image-wrap">
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: none;">
                                                        <img alt="Электрогитара FGN EEL-HM. Japan, с кейсом" src="/assets/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_0.webp" style="display: none;">
                                                    </div>
                                                    <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img alt="Электрогитара FGN EEL-HM. Japan, с кейсом" src="/assets/uploads/usr/0/ts_cb488031628829f119a39d2de5c22ff8_35_1.webp" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>                                         
                                        <span class="notepad-fav">
                                            <span class="notepad ic-star" data-id="5" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                    </div>                                          
                                    <div class="message_block_tit pos-rel">
                                        <h3>
                                            <a class="c-20 s14" title="Электрогитара FGN EEL-HM. Japan, с кейсом" href="https://universal.elite-board.org/Russia/spb/Muzyka-iskusstvo/instrumenti/5-jelektrogitara-fgn-eel-hm.-japan-s-kejsom.html">Электрогитара FGN EEL-HM. Japan, с кейсом</a>
                                        </h3>
                                        <div class="sp-now">
                                            <span class="s15">
                                                <span class="currency">₽</span>
                                                    75 000
                                                </span>
                                            <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Конец обьявления с 2 фото -->
                                        
                                        <div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div class="b-f br3">
                                        
                                        <div class="message_block_imag br3 pos-rel">
                                        <a title="Продам 1-к квартиру, 41 м², 9/24 эт." href="https://universal.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html">
                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div class=""></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;"><img alt="Продам 1-к квартиру, 41 м², 9/24 эт." src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_2.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: none;"><img alt="Продам 1-к квартиру, 41 м², 9/24 эт." src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp" style="display: none;"></div></div></div>
                                        </a>  
                                        
                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="1" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
                                        
                                        </div>  
                                        
                                        <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Продам 1-к квартиру, 41 м², 9/24 эт." href="https://universal.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html">Продам 1-к квартиру, 41 м², 9/24 эт.</a></h3>

                                        <div class="sp-now">
                                        <span class="s15"><span class="currency">₽</span>3 000 000</span>
                                        <span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        
                                        </div>
                                        </div></div>
                                        
                                        <div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div class="b-f br3">
                                        
                                        <div class="message_block_imag br3 pos-rel">
                                        <a title="BRP Can-Am Spyder Roadster" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                        <div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div class=""></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;"><img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: none;"><img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp" style="display: none;"></div></div></div>
                                        </a>  
                                        
                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
                                        
                                        </div>  
                                        
                                        <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Can-Am Spyder Roadster" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a></h3>

                                        <div class="sp-now">
                                        <span class="s15"><span class="currency">₽</span> 670 000</span>
                                        <span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        
                                        </div>
                                        </div></div>
                                        
                                        <div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div class="b-f br3">
                                        
                                        <div class="message_block_imag br3 pos-rel">
                                        <a title="BRP Ski-Doo Summit 850" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
                                        <div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div class=""></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;"><img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: none;"><img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp" style="display: none;"></div></div></div>
                                        </a>  
                                        
                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить в избранные"></span></span>  
                                        
                                        </div>  
                                        
                                        <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Ski-Doo Summit 850" href="https://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a></h3>

                                        <div class="sp-now">
                                        <span class="s15"><span class="currency">₽</span>1 250 000</span>
                                        <span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        
                                        </div>
                                        </div></div>
                                        
                                        </div></div></div>


<!-- Начало блока свежего -->
<div id="list_message_block" class="list-block-ind row">
    
<div class="title-name s19 col-sm-12">Свежие объявления <a class="a-all s13 c-7 f-l" href="/assets/allmess/">Все объявления</a></div><div class="wrapper-scroll"><div class="wrapper-scroll-bl">
  


<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_4" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Комбинезон с шортами из шифона" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Lichnye-veshi/women/4-kombinezon-s-shortami-iz-shifona.html">
<div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Комбинезон с шортами из шифона" src="/assets/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_0.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="4" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
<a href="/assets/shops/1-dzhinsy-iz-ameriki.html" data-toggle="tooltip" data-placement="top" title="Джинсы из Америки" class="magazin-b">Джинсы из Америки</a>  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Комбинезон с шортами из шифона" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Lichnye-veshi/women/4-kombinezon-s-shortami-iz-shifona.html">Комбинезон с шортами из шифона</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>1 200</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_30" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Диски колесные алюминиевые R17-20" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
<a href="/assets/shops/7-zapchasti-all.html" data-toggle="tooltip" data-placement="top" title="Запчасти ALL" class="magazin-b">Запчасти ALL</a>  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Диски колесные алюминиевые R17-20" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">Диски колесные алюминиевые R17-20</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>39 000</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_29" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Haval Jolion 2021" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 2 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Haval Jolion 2021" src="/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_0.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Haval Jolion 2021" src="/assets/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
<a href="/assets/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН Ford Волгоградский</a>  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Haval Jolion 2021" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">Haval Jolion 2021</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>1 899 000</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_27" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Федеральная сеть станций послегарантийного обслуживания." href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Федеральная сеть станций послегарантийного обслуживания." src="/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Федеральная сеть станций послегарантийного обслуживания." src="/assets/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_0.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="27" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
<a href="/assets/shops/5-avtoservis-fit-service.html" data-toggle="tooltip" data-placement="top" title="Автосервис FIT SERVICE" class="magazin-b">Автосервис FIT SERVICE</a>  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Федеральная сеть станций послегарантийного обслуживания." href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html">Федеральная сеть станций послегарантийного обслуживания.</a></h3>
<div class="sp-now">
<span class="s15">  
не указана</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_46" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Джинсы светлые Турция" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html">
<div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_50099e885751753071a571bb8fd71ec5_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Джинсы светлые Турция" src="/assets/uploads/usr/0/ts_50099e885751753071a571bb8fd71ec5_35_1.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="46" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
<a href="/assets/shops/1-dzhinsy-iz-ameriki.html" data-toggle="tooltip" data-placement="top" title="Джинсы из Америки" class="magazin-b">Джинсы из Америки</a>  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Джинсы светлые Турция" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html">Джинсы светлые Турция</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>1 500</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_17" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="BRP Can-Am Spyder Roadster" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="BRP Can-Am Spyder Roadster" src="/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="BRP Can-Am Spyder Roadster" src="/assets/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_4.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="BRP Can-Am Spyder Roadster" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span> 670 000</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_20" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Джинсы mango" href="/assetshttps://universal.elite-board.org/Russia/spb/Lichnye-veshi/women/20-dzhinsy-mango.html">
<div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_47e9cd76f084786f27e35dc9bc4d6353_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Джинсы mango" src="/assets/uploads/usr/0/ts_47e9cd76f084786f27e35dc9bc4d6353_35_0.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="20" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Джинсы mango" href="/assetshttps://universal.elite-board.org/Russia/spb/Lichnye-veshi/women/20-dzhinsy-mango.html">Джинсы mango</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>1 600</span>
<span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_14" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Аренда, без посредников сдам" href="/assetshttps://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sdam/14-arenda-bez-posrednikov-sdam.html">
<div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_ce2eadcdb46c5d93cc0ea237b01be776_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Аренда, без посредников сдам" src="/assets/uploads/usr/0/ts_ce2eadcdb46c5d93cc0ea237b01be776_35_1.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="14" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Аренда, без посредников сдам" href="/assetshttps://universal.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sdam/14-arenda-bez-posrednikov-sdam.html">Аренда, без посредников сдам</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>15 000</span>
<span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_2" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="Продаю CFMoto CF500" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Продаю CFMoto CF500" src="/assets/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_0.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="Продаю CFMoto CF500" src="/assets/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_1.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="2" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="Продаю CFMoto CF500" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">Продаю CFMoto CF500</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span> 205 000</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>



<div class="list_message_block col-xs-6 col-sm-4 col-md-3"><div id="message_11" class="b-f br3">
 
<div class="message_block_imag br3 pos-rel">
   
<a title="BRP Ski-Doo Summit 850" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
<div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="BRP Ski-Doo Summit 850" src="/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="BRP Ski-Doo Summit 850" src="/assets/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp" style="display: none;"></div></div></div>
</a>
  
<span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
  
  
</div>
  
<div class="message_block_tit pos-rel">
<h3><a class="c-20 s14" title="BRP Ski-Doo Summit 850" href="/assetshttps://universal.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a></h3>
<div class="sp-now">
<span class="s15">  
<span class="currency">₽</span>1 250 000</span>
<span class="reg_cat s13 c-7 f-l">Москва</span></div>
  
</div>
</div></div>


</div></div></div>
<!-- Начало блока статей -->
<div class="articles-ind list-block-ind row">
<div class="title-name s19 col-sm-12">Последние статьи <a class="a-all s13 c-7 f-l" href="/assets/articles/">Все статьи</a>
<div class="bl-tb art-ind-cat"><a title="" class="c-5 s13 br20 bl-inl al-top" href="/assetsarticles/Zdorove/">Здоровье</a><a title="" class="c-5 s13 br20 bl-inl al-top" href="/assetsarticles/Nauka-i-tehnika/">Наука и техника</a><a title="" class="c-5 s13 br20 bl-inl al-top" href="/assetsarticles/Puteshestviya/">Путешествия</a><a title="" class="c-5 s13 br20 bl-inl al-top" href="/assetsarticles/Finansy-i-investicii/">Финансы и инвестиции</a></div></div>

<div class="wrapper-scroll"><div class="wrapper-scroll-bl">
<div class="list-art-item col-xs-6 col-sm-4 col-md-3">
<a title="" class="list-art br3 bl-bl pos-rel" href="/assets/articles/Finansy-i-investicii/Bitrubl">
<div class="article_imag br3 imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/images/kv2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/assets/uploads/images/kv2.webp" style="display: none;"></div><div class="list-art-bl pos-abs br3 c-f"><div class="list-art-title s16 f-m">Битрубль. Какой надеется быть первая...</div><div class="list-art-cont"> Первая российская криптовалюта надеется стать самой настоящей! Основанной на технологии блокчейн. И законной! Т. е....</div></div></a>
</div><div class="list-art-item col-xs-6 col-sm-4 col-md-3">
<a title="" class="list-art br3 bl-bl pos-rel" href="/assets/articles/Zdorove/Glavnye-principy-zdorovogo-obraza-zhizni">
<div class="article_imag br3 imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/images/sd1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/assets/uploads/images/sd1.webp" style="display: none;"></div><div class="list-art-bl pos-abs br3 c-f"><div class="list-art-title s16 f-m">Главные принципы здорового образа жизни</div><div class="list-art-cont"> Любой человек, смотря в зеркало, находил недостатки в своей фигуре. В большинстве случаев, эти недостатки связаны с...</div></div></a>
</div><div class="list-art-item col-xs-6 col-sm-4 col-md-3">
<a title="" class="list-art br3 bl-bl pos-rel" href="/assets/articles/Nauka-i-tehnika/Izobreteniya-kotorye-oblegchayut-zhizn">
<div class="article_imag br3 imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/images/is1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/assets/uploads/images/is1.webp" style="display: none;"></div><div class="list-art-bl pos-abs br3 c-f"><div class="list-art-title s16 f-m">Изобретения которые облегчают жизнь</div><div class="list-art-cont"> Ежедневно ученые изобретают десятки вещей, которые должны облегчать нам жизнь. Большинство из них бессмысленны. Но...</div></div></a>
</div><div class="list-art-item col-xs-6 col-sm-4 col-md-3">
<a title="" class="list-art br3 bl-bl pos-rel" href="/assets/articles/Puteshestviya/Pochemu-Turciya-tak-populyarna-u-turistov">
<div class="article_imag br3 imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/images/tyr1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/assets/uploads/images/tyr1.webp" style="display: none;"></div><div class="list-art-bl pos-abs br3 c-f"><div class="list-art-title s16 f-m">Почему Турция так популярна у туристов</div><div class="list-art-cont"> Уже более десяти лет самой популярной летней страной для пляжного отдыха россиян, белорусов и украинцев является...</div></div></a>
</div></div></div>
</div>


</div>
                

</div>
</div></div>

@endsection

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="Оксана Соболева">
    <meta name="description" content="Шаблон Universal для сайта объявлений Elite-Board.">
    <meta name="keywords" content="купить шаблон для сайта объявлений, купить шаблон доски объявлений, дизайн доски объявлений, дизайн сайта объявлений, шаблон elite-board, cms доска объявлений, Здоровье, Наука и техника, Путешествия, Финансы и инвестиции">
    <meta name="copyright" content="Оксана Соболева">
    <link rel="manifest" href="/assets/pwa/manifest.json">
    <meta name="msapplication-TileColor" content="#E6E6FA">
    <meta name="msapplication-TileImage" content="/assets/templates/universal/assets/ico/fav192.png">
    <meta name="theme-color" content="#E6E6FA">
    <script async="" src="/assets/tag.js"></script>
   
    <link rel="shortcut icon" href="/assets/images/cat/logo.png" type="image/png">
    <title>Universal</title>
    <link href="/assets/templates/universal/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/templates/universal/css/style-main.css" rel="stylesheet">
    <link href="/assets/templates/universal/css/light.css" rel="stylesheet">
    <link href="/assets/templates/universal/css/glyphicon.css" rel="stylesheet">
    <link href="/assets/templates/universal/carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/templates/universal/carousel/owl.theme.default.min.css" rel="stylesheet">  
    <script>
        var TPL_PATH = "/";
        var TPL_PATH_THEME = '/assets/templates/universal/';
        var TPL_REGION_ID = 0;
        var TPL_AUTOROTATE = 2000;
        var TPL_L_00 = '[после регистрации]';
        var TPL_L_01 = 'Отменить';
        var TPL_L_02 = 'Применить';
        var TPL_L_03 = 'Вы уверены?';
        var TPL_L_04 = '[ Ваш выбор ]';
        var TPL_L_05 = '[ Выбрано ]';
        var TPL_L_06 = 'Необходимо выбрать хотя бы одно объявление';
        var TPL_L_07 = 'Показать ещё';
        var TPL_L_08 = 'Скрыть';
        paceOptions = {
        elements: true
        };        
        var fields = new Array();
        var yamaps = new Array();
    </script>
    <script src="/assets/cron.js" defer=""></script>
    <meta property="og:title" content="Universal">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/assets">
    <meta property="og:description" content="Шаблон Universal для сайта объявлений Elite-Board.">
    <meta property="og:image" content="/assets/images/cat/logo.png">
    <style type="text/css">.imgLiquid img {visibility:hidden}</style>
</head>
  
<body> 
    <div id="header" class="header b-f">
        <div class="header-top">
            <div class="container">
                <div class="bl-tb">  
                    <div class="bl-cell al-mid header-top-link">
                        <a href="/" class="logo-title c-20 pos-rel">
                            <span class="logo-icon">
                                <img alt="Оксана Соболева" src="/assets/images/cat/logo.png">
                            </span>
                            <span class="logo-text al-mid s22 f-b">Universal</span>
                        </a> 
                        {!! $widget_regions !!}
                    </div>
    
                    <div class="bl-cell al-mid text-right">
                        <div class="mobile-menu bl-inl"> 
                            <!-- <a class="mob-shop c-20 s15" href="/assets/shops/">Магазины</a> -->
                            @if(Auth::user() != null)
                                <a class="btn-notepad bl-inl al-mid c-20 s15" title="Избранных объявлений: 0" href="/cabinet/favorite">Избранное 
                                    <span class="n_count bl-inl al-top pos-rel br100 s11 text-center">{{ count(Auth::user()->favoriteadverts) }}</span>
                                </a>
                            
                            
                                <a class="btn-user bl-inl al-mid c-20 br20 b-f s15" href="/cabinet">
                                @if(isset(Auth::user()->avatar))
                                    <img src="/storage/avatars/{{ Auth::user()->avatar}}" alt="" width="32" height="32" class="rounded-circle me-2">
                                @endif
                                    
                                    <strong>{{ Auth::user()->name }}</strong>
                                </a>
                                <a href="/logout" class="btn btn-primary"  data-toggle="tooltip" data-placement="bottom">Выйти</a> 
                                @else
                                <a class="btn-user bl-inl al-mid c-20 br20 b-f s15" href="/login">Личный кабинет</a>
                                
                            @endif
                            
                            <a class="mob-btnadd btn btn-primary btn-add br30" href="/add-new-advert">Подать объявление</a>
                            <span class="mbtn-close visible-xs pos-abs">×</span>
                        </div><!-- /mobile-menu -->
    
                        
                        <div class="mobile-btn bl-inl al-top pos-abs"></div> 
    
                    </div> <!-- /bl-cell al-mid text-right -->

                </div>
            </div>
        </div>
                
        <div class="header-bottom b-f">
            <div class="container">
                <div class="row">  
                    <!-- Поиск -->  
                    <div class="col-xs-4 col-md-6">  
                        <form class="header-seach f-l bl-inl al-top br30" name="top_seach" method="GET" action="/search/">
                            <div class="bl-tb al-top">
                                <!-- <div class="pos-rel locationicon bl-cell al-top">
                                    <input type="text" id="autocomplete-ajax" value="" class="form-control locinput input-rel searchtag-input" placeholder="Ваш город..." autocomplete="off">
                                    <input name="add_region" value="" type="hidden" id="ajax_region_id">
                                    <input type="hidden" name="add_cat" value="0">
                                </div> -->
                                <div class="pos-rel inputtext bl-cell al-top">
                                    <input type="text" name="text" id="autocomplete-text" class="form-control" placeholder="Что вы ищете?" value="" autocomplete="off">
                                </div>
                                <button class="btn br100"></button>
                            </div>
                        </form>  
                    </div>
                    <!-- Поиск -->

                    <div class="header-menu col-xs-8 col-md-6 text-right"> 
                        {!! $widget_menu_category !!}
                        @if(Auth::user() == null)
                            <!-- <a class="btn-shop bl-inl al-mid c-20 s15 hidden-xs" href="/assets/shops/">Магазины</a>  -->
                            <a class="btn btn-primary btn-add br30 hidden-xs" href="/add-new-advert">Подать объявление</a>
                            @else
                            <!-- <a class="btn-shop bl-inl al-mid c-20 s15 hidden-xs" href="/assets/shops/">Магазины</a>  -->
                            <a class="btn btn-primary btn-add br30 hidden-xs" href="/cabinet/new-advert">Подать объявление</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if(isset($flag) && $flag == true)
            {!! $widget_header_carousel !!}
        @endif
    </div><!-- /header -->




    @yield('content')


    <div id="footer">
        <div class="container">
            @if(isset($flag) && $flag == true)
                {!! $widget_footer_promo !!}
            @endif
            <div class="footer">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul>
                            <li class="footer-logo">
                                <a class="logo-title s22 f-b c-20" href="/" title="Оксана Соболева">
                                    <img alt="Оксана Соболева" src="/assets/images/cat/logo.png">Universal
                                </a>
                            </li>
                            <li class="footer-social c-7 s13">
                                <a href="/assets/" data-toggle="tooltip" data-placement="top" title="vkontakte" class="s-vk">
                                    <img alt="Оксана Соболева" src="/assets/templates/universal/images/svk.svg">
                                </a>
                                <a href="/" data-toggle="tooltip" data-placement="top" title="odnoklassniki" class="s-od">
                                    <img alt="Оксана Соболева" src="/assets/templates/universal/images/sod.svg">
                                </a>
                                <a href="/" data-toggle="tooltip" data-placement="top" title="twitter" class="s-tw">
                                    <img alt="Оксана Соболева" src="/assets/templates/universal/images/stw.svg">
                                </a> 
                            </li>  
                            <li class="footer-instr">
                                <div class="btn-group btn-group-xs">
                                    <a role="button" class="btn btn-default" href="/assets/rss.xml">Rss</a>
                                    <a role="button" class="btn btn-default" href="/assets/sitemap.xml">Map</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link">
                            <li class="footer-tit text-up">Платные услуги</li>
                            <li>
                                <a href="/partnerskaya-programma/" title="" class="c-4">Партнерская программа</a>
                            </li>
                            <li>
                                <a href="/reklama-na-saite/" title="" class="c-4">Реклама на сайте</a>
                            </li>  
                            <li>
                                <a href="/uslugi_saita/" title="" class="c-4">Платные услуги</a>
                            </li>
                            <li>
                                <a href="/mail/" title="" class="c-4">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link resp-line">
                            <li class="footer-tit text-up">Информация</li>
                            <li>
                                <a href="/assets/politika-konfidencialnosti/" title="" class="c-4">Политика конфиденциальности</a>
                            </li>
                            <li>
                                <a href="/assets/pravila/" title="" class="c-4">Правила сайта</a>
                            </li>
                            <li>
                                <a href="/assets/help/" title="" class="c-4">Помощь</a>
                            </li>
                            <li>
                                <a href="/assets/articles/" title="" class="c-4">Статьи</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link resp-line">
                            <li class="footer-tit text-up">Пользователю</li>
                            <li>
                                <a href="/assets/users/shop/" title="" class="c-4">Создать магазин</a>
                            </li>
                            <li>
                                <a href="/assets/users/login/" title="" class="c-4">Личный кабинет</a>
                            </li>  
                            <li>
                                <a href="/assets/users/register/" title="" class="c-4">Регистрация</a>
                            </li>
                            <li>
                                <a href="/assets#" onclick="pwa(); return false;" class="c-4" data-toggle="tooltip" data-placement="top" title="Установить мобильное приложение">Установить приложение</a>
                            </li>
                        </ul>
                    </div>  
                </div>

                <div class="footer-copyright c-7 s13 text-center">© 2022 universal.elite-board.org – доска бесплатных объявлений
                    <div class="c-20 s14">
                        <br>© Автор шаблона Оксана Соболева 
                        <a href="https://elite-board.org/" title="" target="_blank">Шаблоны для доски объявлений</a>
                    </div>
                </div> 
    
            </div>  
        </div>
    </div>

    <div class="menu-overly-mask mbtn-close"></div>

    <script>
        var parent_region = 0;
        var back_region = 0;
        var current_region = TPL_REGION_ID;
    </script>
    
    <script src="/assets/templates/universal/js/jquery/3.2.1/jquery.min.js"></script>
    <script src="/assets/templates/universal/js/jquery.cookie.js"></script>
    
    <script src="/assets/templates/universal/carousel/owl.carousel.min.js"></script>
    <script>$('.header-carousel').owlCarousel({center:true,dots:false,loop:true,margin:16,nav:true,autoplay:true,autoplayTimeout:6000,autoplayHoverPause:true,responsive:{0:{items:1},900:{items:2}}})</script>
    <script src="/assets/templates/universal/js/lightslider.min.js"></script>
    <link href="/assets/templates/universal/css/lightslider.min.css" rel="stylesheet">
    <script>$(document).ready(function(){$(".specials-offer-slider").lightSlider({item:1,slideMargin:0,loop:!0,pager:!1,pauseOnHover:!0,auto:!0,pause:4E3,});});</script>

    <script>$(document).ready(function(){$(".carousel-img").brazzersCarousel()});</script>
    <script src="/assets/templates/universal/js/script.min.js"></script>
    <link rel="stylesheet" href="/assets/templates/universal/css/jquery-ui.css">

    <script>
        $(".mobile-btn").click(function(){$(".mobile-menu").addClass("open"); $(".menu-overly-mask").addClass("open");});
        $(".mbtn-close").click(function(){$(".mobile-menu").removeClass("open"); $(".menu-overly-mask").removeClass("open");});
    </script>
    <script>$(document).ready(function() {$(".imgLiquidFill").imgLiquid();});</script>
    <script src="/assets/templates/universal/js/imgLiquid-min.js"></script>  
    <script src="/assets/templates/universal/js/script.js"></script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
    <!-- Yandex.Metrika counter --> 
    <script type="text/javascript"> (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(56456398, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="/assetshttps://mc.yandex.ru/watch/56456398" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    <!-- Дизайн сайта: Оксана Соболева -->
    <script>
    var _csrf = document.cookie.split("_csrf=");
        if(_csrf[1] !== undefined){
            _csrf = _csrf[1].split(";");
            _csrf = _csrf[0]
            $("form[method=post]").each(function(){
                    $("<input>").attr("type", "hidden").attr("name", "_csrf").attr("value", _csrf).appendTo($(this));
            });
        }
    </script>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
</body>
</html>
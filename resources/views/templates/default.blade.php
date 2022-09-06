<html lang="ru"><head>
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
<script>
    if('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js');
      });
    }
        var pwaReq = null;
    window.addEventListener('beforeinstallprompt', (e) => {
        pwaReq = e
    });
    function pwa() {
        if (pwaReq) {
            pwaReq.prompt();
            pwaReq.userChoice.then(function(choiceResult) {
                pwaReq = null
            })
        }
    }
</script>
<link rel="shortcut icon" href="/assets/templates/universal/images/favicon.png" type="image/png">
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
<meta property="og:url" content="https://universal.elite-board.org/">
<meta property="og:description" content="Шаблон Universal для сайта объявлений Elite-Board.">
<meta property="og:image" content="/assets/images/cat/logo.png"><style type="text/css">.imgLiquid img {visibility:hidden}</style></head>
  
<body>
  
<div id="header" class="header b-f">
  
<div class="header-top"><div class="container"><div class="bl-tb">  
<div class="bl-cell al-mid header-top-link">
<a href="/assets/" class="logo-title c-20 pos-rel">
<span class="logo-icon"><img alt="Оксана Соболева" src="/assets/images/cat/logo.png"></span>
<span class="logo-text al-mid s22 f-b">Universal</span></a> 
<a href="#selectRegion" data-toggle="modal" class="selectRegion bl-inl al-mid c-20 s15">
<span class="hidden-xsm bl-inl al-mid sp-now regw">Все регионы</span></a></div>
  
<div class="bl-cell al-mid text-right">
<div class="mobile-menu bl-inl"> 
<a class="mob-shop c-20 s15" href="/assets/shops/">Магазины</a><a class="btn-notepad bl-inl al-mid c-20 s15" title="Избранных объявлений: 0" href="/assets/notepad/">Избранное <span class="n_count bl-inl al-top pos-rel br100 s11 text-center">0</span></a>  
<a class="btn-user bl-inl al-mid c-20 br20 b-f s15" href="/login">Личный кабинет</a>
<a class="mob-btnadd btn btn-primary btn-add br30" href="/assets/add/">Подать объявление</a>
<span class="mbtn-close visible-xs pos-abs">×</span>
</div><!-- /mobile-menu -->
  
<a href="/assets#" class="theme-type th-d bl-inl al-mid br100" data-id="dark" data-toggle="tooltip" data-placement="bottom" title="Тёмная тема"></a> 
<div class="mobile-btn bl-inl al-top pos-abs"></div> 
  
</div> <!-- /bl-cell al-mid text-right -->

</div>
</div></div>
  
<div class="header-bottom b-f"><div class="container"><div class="row">    
<div class="col-xs-4 col-md-6">  
<form class="header-seach f-l bl-inl al-top br30" name="top_seach" method="GET" action="/search/"><div class="bl-tb al-top">
<div class="pos-rel locationicon bl-cell al-top">
<input type="text" id="autocomplete-ajax" value="" class="form-control locinput input-rel searchtag-input" placeholder="Ваш город..." autocomplete="off">
<input name="add_region" value="" type="hidden" id="ajax_region_id">
<input type="hidden" name="add_cat" value="0"></div>
<div class="pos-rel inputtext bl-cell al-top"><input type="text" name="text" id="autocomplete-text" class="form-control" placeholder="Что вы ищете?" value="" autocomplete="off"></div>
<button class="btn br100"></button>
</div></form>  
</div>
  
<div class="header-menu col-xs-8 col-md-6 text-right">  
<div class="navigation-menu dropdown bl-inl al-mid"><div data-toggle="dropdown" class="btn-nav point a-hov sp-now s15">Категории</div>
<div class="dropdown-menu lihover"><ul>
<li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Avtotransport/" class="sp-now">
<img src="/assets/images/cat/avto-cat.png" alt="Автотранспорт">Автотранспорт</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Avtotransport/sale/">Продажа авто <span class="cat-count b-f c-7">9</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Avtotransport/buy/">Покупка авто <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Avtotransport/autoservis/">Автосервис и услуги <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Avtotransport/autozap/">Автозапчасти и принадлежности <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Avtotransport/Avtosalony/">Автосалоны <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Nedvizhimost/" class="sp-now">
<img src="/assets/images/cat/nedv-cat.png" alt="Недвижимость">Недвижимость</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/garag/">Гаражи и Стоянки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/datcha/">Дачи, Коттеджи  <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/zarubeg/">Зарубежная недвижимость <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/lands/">Земельный участок  <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/komnedvig/">Комерческая недвижимость <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/apartmen/">Комнаты, Квартиры <span class="cat-count b-f c-7">5</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/office/">Офисы <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Nedvizhimost/other/">Прочее <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Rabota/" class="sp-now">
<img src="/assets/images/cat/obr-cat.png" alt="Работа">Работа</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Rabota/Vakansii/">Вакансии <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Rabota/obrazovanie/">Образование <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Rabota/rezume/">Резюме: поиск работы <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Rabota/drugoe/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Lichnye-veshi/" class="sp-now">
<img src="/assets/images/cat/od-cat.png" alt="Личные вещи">Личные вещи</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/women/">Для женщин <span class="cat-count b-f c-7">4</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/men/">Для мужчин <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/deti/">Всё для детей  <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/remont/">Ремонт одежды и обуви <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/clock/">Часы <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/yuvelir/">Ювелирные изделия <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/aksesuari/">Аксессуары <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Lichnye-veshi/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Mebel-interer/" class="sp-now">
<img src="/assets/images/cat/meb-cat.png" alt="Мебель, интерьер">Мебель, интерьер</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Mebel-interer/interer/">Мебель и интерьер <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Mebel-interer/obihod/">Предметы обихода <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Mebel-interer/remont/">Ремонт и сервис <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Mebel-interer/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Znakomstva/" class="sp-now">
<img src="/assets/images/cat/snak-cat.png" alt="Знакомства">Знакомства</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Znakomstva/girls/">Девушки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Znakomstva/men/">Мужчины <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Znakomstva/family/">Семейные пары  <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Zhivotnye/" class="sp-now">
<img src="/assets/images/cat/anim-cat.png" alt="Животные">Животные</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Zhivotnye/cats/">Кошки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Zhivotnye/dogs/">Собаки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Zhivotnye/plant/">Комнатные Растения <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Zhivotnye/other/">Другие животные <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Stroi-materialy/" class="sp-now">
<img src="/assets/images/cat/mat-cat.png" alt="Строй материалы">Строй материалы</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Stroi-materialy/varnish/">Лаки, Краски <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Stroi-materialy/saw/">Пиломатериалы <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Stroi-materialy/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/" class="sp-now">
<img src="/assets/images/cat/music-cat.png" alt="Музыка, искусство">Музыка, искусство</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/audio/">Аудио-, видеозаписи <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/kollekciya/">Коллекционирование <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/instrumenti/">Музыкальные инструменты <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/proizvedeniya/">Произведения искусства <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/restavraciya/">Реставрация и сервис <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Muzyka-iskusstvo/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/" class="sp-now">
<img src="/assets/images/cat/el-cat.png" alt="Бытовая техника">Бытовая техника</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/audio/">Аудио, Видео <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/games/">Игры, игровые приставки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/gps/">GPS-навигаторы <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/pilesosi/">Пылесосы <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/stiralnie/">Стиральные машины <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/kuhonnaya/">Кухонная техника <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/glagka/">Швейное оборудование <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/klimat/">Климатическая техника <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/remont/">Ремонт и сервис <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Bytovaya-tehnika/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Biznes/" class="sp-now">
<img src="/assets/images/cat/bis-cat.png" alt="Бизнес">Бизнес</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Biznes/offers/">Предложения <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Biznes/credits/">Кредиты <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Biznes/tenders/">Тендеры <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Biznes/partners_search/">Поиск Партнеров <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Biznes/sale_and_buying/">Продажа и Покупка Бизнеса <span class="cat-count b-f c-7">1</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Uslugi/" class="sp-now">
<img src="/assets/images/cat/ycl-cat.png" alt="Услуги">Услуги</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/webdesign/">Web дизайн <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/accounting/">Бухгалтерские <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/medical/">Медицинские <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/nursemaids/">Няни, Сиделки <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/translation/">Перевод текстов <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/printing/">Полиграфия <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/advancement_site/">Продвижение сайта <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/advertisment/">Реклама <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/travel/">Туризм, Путешествия, Отдых <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Uslugi/other/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Telefony/" class="sp-now">
<img src="/assets/images/cat/tel-cat.png" alt="Телефоны">Телефоны</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/telephone/">Телефоны <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/accessory/">Аксессуары <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/content/">Контент <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/racii/">Переговорные устройства <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/remont/">Ремонт и сервис <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Telefony/drugoe/">Другое <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li class="dropdown dropdown-hover dropdown-submenu">
<a href="/assetshttps://universal.elite-board.org/Tovary/" class="sp-now">
<img src="/assets/images/cat/tovar-cat.png" alt="Товары">Товары</a>
<ul class="dropdown-menu hidden-xs"><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/cd_dvd/">CD, DVD Диски <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/children/">Детские товары <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/office/">Канцелярские товары <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/beauty/">Красота и Здоровье <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/furniture/">Мебель <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/oil/">Нефтепродукты и ГСМ <span class="cat-count b-f c-7">0</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/sport_stock/">Спорт инвентарь <span class="cat-count b-f c-7">1</span></a>
</li><li><a class="sp-now" href="/assetshttps://universal.elite-board.org/Tovary/other/">Прочее <span class="cat-count b-f c-7">0</span></a>
</li></ul></li><li>
<a href="/assetshttps://universal.elite-board.org/Oborudovanie/" class="sp-now">
<img src="/assets/images/cat/obor-cat.png" alt="Оборудование">Оборудование</a>
</li></ul></div></div>
<a class="btn-shop bl-inl al-mid c-20 s15 hidden-xs" href="/assets/shops/">Магазины</a> 
<a class="btn btn-primary btn-add br30 hidden-xs" href="/assets/add/">Подать объявление</a>
</div> 
</div></div></div>

  
<div id="header-carousel"><div class="header-carousel owl-carousel owl-theme owl-loaded owl-drag">




<div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0.25s ease 0s; width: 7676px; transform: translate3d(-2398px, 0px, 0px);"><div class="owl-item cloned" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg4"><div class="item-img item-img4 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Сервисы сайта</div><div class="item-desc s16">Помогут быстрее продать ваш товар или услугу</div><a class="btn btn-default br20" href="/assets/uslugi_saita/">Подробнее</a></div></div></div><div class="owl-item cloned" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg3"><div class="item-img item-img3 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Интересные статьи</div><div class="item-desc s16">Познавательные статьи на различные темы</div><a class="btn btn-default br20" href="/assets/articles/">Читать</a></div></div></div><div class="owl-item" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg1"><div class="item-img item-img1 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Бесплатная подача</div><div class="item-desc s16">Размещайте объявление легко и быстро</div><a class="btn btn-default br20" href="/assets/add/">Подать объявление</a></div></div></div><div class="owl-item active center" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg2"><div class="item-img item-img2 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Быстрая регистрация</div><div class="item-desc s16">Регистрируйтесь и начинайте продавать</div><a class="btn btn-default br20" href="/assets/users/register/">Зарегистрироваться</a></div></div></div><div class="owl-item active" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg4"><div class="item-img item-img4 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Сервисы сайта</div><div class="item-desc s16">Помогут быстрее продать ваш товар или услугу</div><a class="btn btn-default br20" href="/assets/uslugi_saita/">Подробнее</a></div></div></div><div class="owl-item" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg3"><div class="item-img item-img3 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Интересные статьи</div><div class="item-desc s16">Познавательные статьи на различные темы</div><a class="btn btn-default br20" href="/assets/articles/">Читать</a></div></div></div><div class="owl-item cloned" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg1"><div class="item-img item-img1 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Бесплатная подача</div><div class="item-desc s16">Размещайте объявление легко и быстро</div><a class="btn btn-default br20" href="/assets/add/">Подать объявление</a></div></div></div><div class="owl-item cloned" style="width: 943.5px; margin-right: 16px;"><div class="item pos-rel item-bg2"><div class="item-img item-img2 pos-abs"></div><div class="bl-inl al-top pos-rel"><div class="item-h s24">Быстрая регистрация</div><div class="item-desc s16">Регистрируйтесь и начинайте продавать</div><a class="btn btn-default br20" href="/assets/users/register/">Зарегистрироваться</a></div></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div></div>
</div><!-- /header -->




@yield('content')


<div id="footer"><div class="container"><div class="text-center"><h2 class="s20 text-up foot-h2">Удачный выбор для всех и для каждого!</h2>Найди свое среди тысяч товаров, опубликованных на нашем сайте</div>  
<div class="section-promo text-center row">
<div class="col-xs-6 col-sm-6 col-md-3 bs-r"><div class="section-promo-number s-p-n1 f-m s18">26 объявлений</div>
<div class="section-promo-text s13 c-7">Объявления от частных лиц и организаций</div></div>
<div class="col-xs-6 col-sm-6 col-md-3 bs-r"><div class="section-promo-number s-p-n2 f-m s18">108 рубрик</div>
<div class="section-promo-text s13 c-7">Размещайте объявление на любую тематику легко и быстро</div></div>
<div class="col-xs-6 col-sm-6 col-md-3 bs-r"><div class="section-promo-number s-p-n3 f-m s18">95 регионов</div>
<div class="section-promo-text s13 c-7">Находите выгодные предложения в соседних регионах</div></div>
<div class="col-xs-6 col-sm-6 col-md-3"><div class="section-promo-number s-p-n4 f-m s18">7 магазинов</div>
<div class="section-promo-text s13 c-7">Информация о компании повысит доверие к вашему бизнесу</div></div></div><div class="footer">
<div class="row">
<div class="col-xs-6 col-sm-3 col-md-3"><ul>
<li class="footer-logo"><a class="logo-title s22 f-b c-20" href="/assets/" title="Оксана Соболева">
<img alt="Оксана Соболева" src="/assets/images/cat/logo.png">Universal</a></li>
<li class="footer-social c-7 s13">
<a href="/assets/" data-toggle="tooltip" data-placement="top" title="vkontakte" class="s-vk"><img alt="Оксана Соболева" src="/assets/templates/universal/images/svk.svg"></a>
<a href="/assets/" data-toggle="tooltip" data-placement="top" title="odnoklassniki" class="s-od"><img alt="Оксана Соболева" src="/assets/templates/universal/images/sod.svg"></a>
<a href="/assets/" data-toggle="tooltip" data-placement="top" title="twitter" class="s-tw"><img alt="Оксана Соболева" src="/assets/templates/universal/images/stw.svg"></a> 
</li>  
<li class="footer-instr"><div class="btn-group btn-group-xs">
<a role="button" class="btn btn-default" href="/assets/rss.xml">Rss</a>
<a role="button" class="btn btn-default" href="/assets/sitemap.xml">Map</a>
</div></li>
</ul></div>
<div class="col-xs-6 col-sm-3 col-md-3"><ul class="footer-link">
<li class="footer-tit text-up">Платные услуги</li>
<li><a href="/assets/partnerskaya-programma/" title="" class="c-4">Партнерская программа</a></li>
<li><a href="/assets/reklama-na-saite/" title="" class="c-4">Реклама на сайте</a></li>  
<li><a href="/assets/uslugi_saita/" title="" class="c-4">Платные услуги</a></li>
<li><a href="/assets/mail/" title="" class="c-4">Контакты</a></li>
</ul></div>
<div class="col-xs-6 col-sm-3 col-md-3"><ul class="footer-link resp-line">
<li class="footer-tit text-up">Информация</li>
<li><a href="/assets/politika-konfidencialnosti/" title="" class="c-4">Политика конфиденциальности</a></li>
<li><a href="/assets/pravila/" title="" class="c-4">Правила сайта</a></li>
<li><a href="/assets/help/" title="" class="c-4">Помощь</a></li>
<li><a href="/assets/articles/" title="" class="c-4">Статьи</a></li>
</ul></div>
<div class="col-xs-6 col-sm-3 col-md-3"><ul class="footer-link resp-line">
<li class="footer-tit text-up">Пользователю</li>
<li><a href="/assets/users/shop/" title="" class="c-4">Создать магазин</a></li><li><a href="/assets/users/login/" title="" class="c-4">Личный кабинет</a></li>  
<li><a href="/assets/users/register/" title="" class="c-4">Регистрация</a></li>
<li><a href="/assets#" onclick="pwa(); return false;" class="c-4" data-toggle="tooltip" data-placement="top" title="Установить мобильное приложение">Установить приложение</a></li>
</ul></div>  
</div>

<div class="footer-copyright c-7 s13 text-center">© 2022 universal.elite-board.org – доска бесплатных объявлений
<div class="c-20 s14"><br>© Автор шаблона Оксана Соболева <a href="/assetshttps://elite-board.org/" title="" target="_blank">Шаблоны для доски объявлений</a></div>
</div> 
  
</div>  
</div></div>

<div class="menu-overly-mask mbtn-close"></div>

<script>
var parent_region = 0;
var back_region = 0;
var current_region = TPL_REGION_ID;
</script>
<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog"><div class="modal-content modal-content-region"><div class="modal-body">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
<h4 class="modal-title text-center s18" id="exampleModalLabel">Выбор региона</h4> 
<div class="bl-regionlist br3">
<div class="region_current"><a href="/assets#" id="region_select_current"><span id="region_select_current_name"></span></a></div>  
<div class="RegionFilter pos-rel"><input type="text" id="region-modal-filter" value="" class="form-control" placeholder="Фильтр по названию..." autocomplete="off"><a id="region-modal-clear" class="pos-abs bl-bl s16 point c-a  text-center">×</a></div>
<ul id="regionlist" style=""><li><a href="#" class="" id="rl1">Россия</a></li><li><a href="#" class="" id="rl104">Украина</a></li><li><a href="#" class="" id="rl105">Белоруссия</a></li><li><a href="#" class="" id="rl114">Грузия</a></li><li><a href="#" class="" id="rl113">Туркмения</a></li><li><a href="#" class="" id="rl112">Узбекистан</a></li><li><a href="#" class="" id="rl111">Таджикистан</a></li><li><a href="#" class="" id="rl110">Молдавия</a></li><li><a href="#" class="" id="rl109">Киргизия</a></li><li><a href="#" class="" id="rl108">Казахстан</a></li><li><a href="#" class="" id="rl107">Армения</a></li><li><a href="#" class="" id="rl106">Азербайджан</a></li><li><a href="#" class="" id="rl115">Другое</a></li></ul></div>
<div id="region_loader_img" style="display:none;"><div>Пожалуйста, подождите...</div></div>
<div class="region_control"><a href="/assets#" id="region_select_back" class="btn btn-default btn-xs">Назад</a>
<a href="/assets#" id="region_select_all" class="btn btn-default btn-xs pull-right">Все регионы</a></div>  
</div></div></div></div>
<script src="/assets/templates/universal/js/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/templates/universal/js/jquery.cookie.js"></script>
  
<script src="/assets/templates/universal/carousel/owl.carousel.min.js"></script>
<script>$('.header-carousel').owlCarousel({center:true,dots:false,loop:true,margin:16,nav:true,autoplay:true,autoplayTimeout:6000,autoplayHoverPause:true,responsive:{0:{items:1},900:{items:2}}})</script>
<script src="/assets/templates/universal/js/lightslider.min.js"></script><link href="/assets/templates/universal/css/lightslider.min.css" rel="stylesheet">
<script>$(document).ready(function(){$(".specials-offer-slider").lightSlider({item:1,slideMargin:0,loop:!0,pager:!1,pauseOnHover:!0,auto:!0,pause:4E3,});});</script>

<script>$(document).ready(function(){$(".carousel-img").brazzersCarousel()});</script><script src="/assets/templates/universal/js/script.min.js"></script>
<link rel="stylesheet" href="/assets/templates/universal/css/jquery-ui.css">

<script>
$(".mobile-btn").click(function(){$(".mobile-menu").addClass("open"); $(".menu-overly-mask").addClass("open");});
$(".mbtn-close").click(function(){$(".mobile-menu").removeClass("open"); $(".menu-overly-mask").removeClass("open");});
</script>
<script>$(document).ready(function() {$(".imgLiquidFill").imgLiquid();});</script>
<script src="/assets/templates/universal/js/imgLiquid-min.js"></script>  
<script src="/assets/templates/universal/js/script.js"></script>
<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(56456398, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="/assetshttps://mc.yandex.ru/watch/56456398" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
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
<div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div><div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div></body></html>
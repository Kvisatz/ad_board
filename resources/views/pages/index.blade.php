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
                                                <span class="count-tree c-7 s12 bl-bl sp-now">{{ count($category->advertisment) }} объявлений</span>
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
                        <a class="a-all s13 c-7 f-l" href="/allmessvip">Все объявления</a>
                    </div>

                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">
                            <!-- Начало обьявления -->
                            @foreach($vipAdverts as $advert)
                                @if($advert->vip == true)
                                    <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                        <div class="b-f br3">
                                            <div class="message_block_imag br3 pos-rel">
                                                <a title="{{ $advert->title }}" href="{{ url('/advert', $advert->id)}}">
                                                    <div class="carousel-img brazzers-daddy">
                                                    
                                                        <div class="image-wrap">
                                                            @foreach($advert->images as $image)
                                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/{{ $image->name }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                
                                                                <img alt="{{ $advert->title }}" src="/assets/uploads/usr/0/{{ $image->name }}" style="display: none;">
                                                                
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </a>  
                                                <span class="notepad-fav">
                                                    <span class="notepad ic-star" data-id="22" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                                </span> 
                                            </div>  
                                            <div class="message_block_tit pos-rel">
                                                <h3>
                                                    <a class="c-20 s14" title="{{ $advert->title }}" href="{{ url('/advert', $advert->id)}}">{{ $advert->title }}</a>
                                                </h3>
                                                <div class="sp-now">
                                                    <span class="s15">
                                                        <span class="currency">₽</span>
                                                        {{ $advert->price }}
                                                    </span>
                                                    <span class="reg_cat s13 c-7 f-l">{{ $advert->region->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Конец обьявления -->
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                
            <!-- Свежее -->
            <div class="list-block-ind row">
                <div class="title-name s19 col-sm-12">
                    Свежие объявления  
                    <a class="a-all s13 c-7 f-l" href="/freshadvert">Все объявления</a>
                </div>

                <div class="wrapper-scroll">
                    <div class="wrapper-scroll-bl">
                        <!-- Начало обьявления -->
                        @foreach($freshAdverts as $advert)
                            @if($advert->fresh == true)
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                    <div class="b-f br3">
                                        <div class="message_block_imag br3 pos-rel">
                                            <a title="{{ $advert->title }}" href="{{ url('/advert', $advert->id)}}">
                                                <div class="carousel-img brazzers-daddy">
                                                
                                                    <div class="image-wrap">
                                                        @foreach($advert->images as $image)
                                                        <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/{{ $image->name }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                            
                                                            <img alt="{{ $advert->title }}" src="/assets/uploads/usr/0/{{ $image->name }}" style="display: none;">
                                                            
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </a>  
                                            <span class="notepad-fav">
                                                <span class="notepad ic-star" data-id="22" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                            </span> 
                                        </div>  
                                        <div class="message_block_tit pos-rel">
                                            <h3>
                                                <a class="c-20 s14" title="{{ $advert->title }}" href="{{ url('/advert', $advert->id)}}">{{ $advert->title }}</a>
                                            </h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">₽</span>
                                                    {{ $advert->price }}
                                                </span>
                                                <span class="reg_cat s13 c-7 f-l">{{ $advert->region->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Конец обьявления -->
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>




@endsection

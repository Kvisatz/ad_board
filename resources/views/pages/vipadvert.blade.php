@extends('templates.'.$template)

@section('content')

<div id="main" class="mbg"><div class="container">  
  
   
<div class="bl-tb container-tb">
<div class="bl-cell al-top bl-center">
   
  
  
  
<h1>VIP-объявления</h1>  
  

<div class="filter-panel bl-tb">  

  
  

</div>



<div class="count-a pad">Всего: {{ count($adverts) }} объявлений</div>
<div class="offerlist">
 
    
<div class="cl-line pos-rel"></div>

<!-- Начало обьявления -->
@foreach($adverts as $advert)
    <div id="message_17" class="offer bl-tb">
        <div class="offer-photo bl-cell al-top pos-rel"><div class="pos-rel ov-h">
<a title="{{ $advert->title }}" href="/advert/{{ $advert->id }}">
<div class="carousel-img br3 brazzers-daddy"><div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div></div></div><div class="image-wrap">
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
</div></div></a></div>
</div>  
   
<div class="offer-title bl-cell al-top pos-rel">
<h3><a class="f-m a-hov" title="{{ $advert->title }}" href="/advert/{{ $advert->id }}">{{ $advert->title }}</a></h3>
<div class="offer-location s13 f-l c-7">{{ $advert->category->name }} <br> {{ $advert->region->name }}</div>
  
<div class="offer-details pos-abs">
 
<span class="offer-date bl-inl al-top s13 f-l c-7">{{ $advert->created_at }}</span>  
</div>
</div>
  
<div class="offer-price bl-cell al-top pos-rel text-right">
<div class="price bl-inl al-top s16 f-m">
<span class="currency">₽</span> {{ $advert->price }}</div>
<div class="offer-actions pos-abs">
<div class="btn-group"></div>
<span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
</div></div>

</div><!--/bl-tb offer-->
@endforeach
  
 
    

@endsection
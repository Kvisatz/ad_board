@extends('templates.'.$template)

@section('content')






<div id="main" class="mbg">
    
    <div class="container page-add text-center">
        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">
                <h1>Личные данные</h1>  
                
                <div class="text-center">
                    <div class="bl-inl text-left form-add">
                        <form name="add" action="?" method="post" id="main_form">  
                            <input type="hidden" name="form_id" id="form_id" value="c8fc9bd10ee5447ab227812dd162299c"><input type="hidden" name="add_cat" id="add_cat" value=""><span class="visible-xs item-tooltip striped-brand child"></span>
                            <input type="hidden" name="add_region" id="add_region" value=""><input name="post_filter" type="hidden" value="false">
                            <!-- <div class="section-title f-m s15">Личные данные</div>  -->
                            <div class="bl-tb add-tb pos-rel input-wrap">
                                <div class="bl-celln bl-cell al-mid">
                                    <label for="name">Ваше имя</label>
                                </div>
                                <div class="bl-cellf bl-cell al-top">
                                    <input name="name" placeholder="{{ Auth::user()->name }}" value="" class="form-control input-dis" required="" type="text" disabled>
                                    <span class="icon-info" data-original-title="Представьтесь, пожалуйста" data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>
                            <div class="bl-tb add-tb pos-rel input-wrap">
                                <div class="bl-celln bl-cell al-mid">
                                    <label for="email">Ваш e-mail</label>
                                </div>
                                <div class="bl-cellf bl-cell al-top">
                                    <input name="email" value="" placeholder="{{ Auth::user()->email }}" class="form-control input-dis" required="" type="email" disabled>
                                    <span class="icon-info" data-original-title="Будет использоваться в качестве логина для входа в систему На этот адрес будут приходить ответы на Ваше объявление. Адрес будет защищён от спам-ботов." data-placement="top" data-toggle="tooltip"></span>
                                </div>
                            </div>
                            <div class="bl-tb add-tb pos-rel input-wrap">
                                <div class="bl-celln bl-cell al-top">
                                    <label for="password1">Пароль</label>
                                </div>
                                <div class="bl-cellf bl-cell al-top">
                                    <div class="pos-rel">
                                        <input name="password1" id="password1" value="" class="form-control show-pas1 input-dis" required="" type="password" disabled="disabled">
                                        <span class="masked1 bl-bl pos-abs point"></span>
                                    </div>
                                    <div class="pos-rel">
                                        <input name="password2" id="password2" value="" class="form-control password2 show-pas2" placeholder="Повторите пароль" required="" type="password" style="display:none;">
                                        <span class="masked2 bl-bl pos-abs point"></span>
                                    </div>
                                    <div class="alert alert-success text-center form-alert" style="display: none;" id="password_success">Пароли совпали!</div>
                                    <div class="alert alert-warning text-center form-alert" style="display: none;" id="password_warning">Пароли не совпадают!</div>
                                    <div class="alert alert-info form-alert" style="display: none;" id="password_info">Пароль слишком короткий!</div>
                                        <span class="icon-info" data-original-title="Укажите пароль для регистрации, не меньше 6-ти символов" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                
                        </form>
                        <div class="text-center">
                            <a class="btn btn-primary btn-add br30 hidden-xs remover-btn" href="/assets/add/">Изменить данные</a>
                        </div>
                       
                    </div>
                </div>
                <link href="/templates/universal/style.css " rel="stylesheet">
            </div>
                
            <div class="bl-cell al-top bl-right">
                <div class="sidebar_right pos-rel">
                    <!-- Sidebar начало -->
    
                    <div class="container">

                        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                            
                            <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                Личные данные
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                Products
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                Customers
                                </a>
                            </li>
                            </ul>
                            <hr>
                            <div class="dropdown">
                            
                                <form action="/logout" method="GET">
                                    @csrf
                                    <input type="submit" value="Выйти">
                                </form>
                            
                            </div>
                        </div>

                        </div>
                        <script src="/assets/sidebar/sidebars.js"></script>
                        <!-- Sidebar конец -->
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
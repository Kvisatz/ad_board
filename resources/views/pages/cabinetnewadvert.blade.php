@extends('templates.'.$template)

@section('content')




<link href="/assets/templates/universal/css/style.css " rel="stylesheet">

<div id="main" class="mbg">
    
    <div class="container page-add ">
        <div class="bl-tb container-tb">
            <!-- Начало контента -->
            <div class="col-md-9">

            <div class="bl-cell al-top bl-center">                
                <div class="text-center">
                    <h1>Добавить объявление</h1>
                </div>   
                    <script>
                        var form_id = '175758acefebd8e130e05edc64566453';
                
                    </script>
                    <script>
                    
                    
                    </script>
                    @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)

                            <div class="alert alert-danger">
                                <button class="close" data-dismiss="alert">×</button>
                                {{ $error }}
                            </div>
                        @endforeach

                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            <strong>Ок!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                    @endif
                    <div class="text-center">
                        <div class="bl-inl text-left form-add">
                            <form name="add" action="advert-request" method="post" id="main_form" enctype='multipart/form-data'> 
                                @csrf
                                <input type="hidden" name="form_id" id="form_id" value="175758acefebd8e130e05edc64566453">
                                <input type="hidden" name="user_id" id="add_cat" value="{{Auth::user()->id}}">
                                <span class="visible-xs item-tooltip striped-brand child"></span>
                                <input type="hidden" name="add_region" id="add_region" value="">
                                <input name="post_filter" type="hidden" value="false">
                                <div class="section-title f-m s15">Личные данные</div>  
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label for="name">Ваше имя</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <input name="name" value="{{ $user->name }}" class="form-control" required="" type="text" disabled>
                                        <span class="icon-info" data-original-title="Представьтесь, пожалуйста" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>  
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label for="email">Ваш e-mail</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <input name="email" value="{{ $user->email }}" class="form-control" required="" type="email" disabled>
                                        <span class="icon-info" data-original-title="Будет использоваться в качестве логина для входа в систему На этот адрес будут приходить ответы на Ваше объявление. Адрес будет защищён от спам-ботов." data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-top siz">
                                        <label for="password1">Пароль</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <div class="pos-rel">
                                            <input name="password" id="password1" value="" class="form-control show-pas1" required="" type="password">
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
                                <div class="section-title f-m s15">Размещение объявления</div> 
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label class="control-label" for="title">Заголовок объявления</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <input value="" placeholder="Заголовок не более 100 символов" maxlength="100" name="title" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" required="" type="text">
                                        <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>  
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label class="control-label" for="title">Прикрепите картинки</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <input value="" maxlength="100" name="image" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" required="" type="file">
                                        <span class="icon-info" data-original-title="Добавьте картинки" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label class="control-label" for="title">Цена руб.</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <input value="" placeholder="Цена" maxlength="100" name="price" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" required="" type="number">
                                        <span class="icon-info" data-original-title="Задайте цену товара" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>  
                                <div class="bl-tb add-tb pos-rel zizz">
                                    <div class="bl-celln bl-cell al-mid siz">
                                        <label for="timing">Срок публикации</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <select size="1" name="timing" class="form-control" required="">
                                            <option>[ Ваш выбор ]</option>
                                            <option value="week">1 неделя</option>
                                            <option value="month">1 месяц</option>
                                            <option value="year">1 год</option>
                                        </select>
                                        <span class="icon-info" data-original-title="Выберите срок размещения объявления. Если объявление не потеряет своей	актуальности, Вы сможете продлить его размещение до окончания этого срока." data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>   
                                <div class="bl-tb add-tb pos-rel multiselect_cont zizz">
                                    <div class="bl-celln bl-cell al-top siz">
                                        <label>Выберите регион</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <div class="multiselect" data-action="" data-name="region" data-default="">
                                            <div>
                                                <select class="form-control" size="1" name="region">
                                                    <option value="">[ Ваш выбор ]</option>
                                                    @foreach($regions as $region)
                                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="alert alert-success text-center form-alert" id="alert_region_success" style="display: none;">[ Выбрано ]</div>
                                        <div class="alert alert-warning text-center form-alert" id="alert_region_warning" style="display: none;">Продолжите выбор</div>
                                        <span class="icon-info" data-original-title="Выберите регион, к которому относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div> 
                                <div class="bl-tb add-tb pos-rel multiselect_cont zizz">
                                    <div class="bl-celln bl-cell al-top siz">
                                        <label>Выберите рубрику</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top zis">
                                        <div class="multiselect" data-action="load" data-name="cat" data-default="">
                                            <div>
                                                <select class="form-control" size="1" name="category">
                                                    <option value="">[ Ваш выбор ]</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="alert alert-success text-center form-alert" id="alert_cat_success" style="display: none;">[ Выбрано ]</div>
                                        <div class="alert alert-warning text-center form-alert" id="alert_cat_warning" style="display: none;">Продолжите выбор</div>
                                        <span class="icon-info" data-original-title="Выберите категорию, к которой относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div> 
                                <div id="fields"></div>
                                <div class="add-tb pos-rel zizz">
                                    <div class="section-title_2 f-m s15">Описание объявления</div> 
                                    <div class="text_field bl-cellf pos-rel">
                                        <textarea required="" placeholder="Описание не более 2000 символов" maxlength="2000" class="form-control calcletters" name="content" rows="5"></textarea>
                                        <span class="icon-info" data-original-title="Максимум символов в сообщении: 2000" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="add-tb zizz">
                                    <div class="section-title_2 f-m s15">Теги быстрого поиска</div>
                                    <div class="pos-rel tag-ic">
                                        <div class="bl-cellf">
                                            <input name="tagsinput" placeholder="" type="text" value="" id="tagsinput" class="form-control">
                                        </div>
                                        <div id="tag_block"></div>
                                        <span class="icon-info" data-original-title="Введите через запятую ключевые слова соответствующие тематике Вашего объявления или выберите из списка ниже. Вы можете использовать до 10 ключевых слов или словосочетаний. Длина каждого слова или словосочетания не должна превышать 30 символов." data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <input type="submit" value="Опубликовать" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>

           
            <!-- Конец контента -->

            <div class="col-md-3">
                <div class="bl-cell al-top bl-right">
                    <div class="sidebar_right pos-rel">
                        <!-- Sidebar начало -->
        
                        <div class="container">

                            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                                <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                                    <li role="presentation"><a href="/cabinet">Личные данные</a></li>
                                    <li role="presentation" class="active"><a href="/cabinet/new-advert">Подать обьявление</a></li>
                                    <li role="presentation"><a href="/cabinet/favorite">Избранное</a></li>
                                    <li role="presentation"><a href="/cabinet/my-adverts">Мои обьявления</a></li>
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
</div>






@endsection


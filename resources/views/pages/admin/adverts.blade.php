@extends('templates.'.$template)

@section('content')


    <!-- Modal delete -->
        <div class="modal fade" id="deleteAdvertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteAdvertModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAdvertModalLabel">Удаление обьявления</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Вы точно хотите удалить данное обьявление?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="/delete-advert" method="post">
                        @csrf
                        <input type="hidden" name="advert_id" class="id_advert">
                        <button type="submit" class="btn btn-primary">Удалить</button>
                    </form>
                </div>
                </div>
            </div>
        </div>


    <!-- Modal update -->
    <div class="modal fade" id="updateAdvertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateAdvertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateAdvertModalLabel">Редактирование обьявления</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Редактировать обьявление?
        </div>
        <div class="modal-footer">
            
            <form name="redact" action="change-advert-request" method="post" id="main_form" enctype='multipart/form-data'> 
                @csrf
                <input type="hidden" name="form_id" id="advert_id" class="id_advert" value="">
                <input type="hidden" name="user_id" id="user_id" class="user_id" value="">
                
                <div class="section-title f-m s15">Личные данные</div>  
                <div class="bl-tb add-tb pos-rel zizz">
                    <div class="bl-celln bl-cell al-mid siz">
                        <label for="name">Пользователь</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <input name="name" value="" class="user_name" class="form-control" required="" type="text">
                        <span class="icon-info" data-original-title="Представьтесь, пожалуйста" data-placement="top" data-toggle="tooltip"></span>
                    </div>
                </div>  
                <div class="bl-tb add-tb pos-rel zizz">
                    <div class="bl-celln bl-cell al-mid siz">
                        <label for="email">E-mail пользователя</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <input name="email" value="" class="form-control user_email" required="" type="email">
                        <span class="icon-info" data-original-title="Будет использоваться в качестве логина для входа в систему На этот адрес будут приходить ответы на Ваше объявление. Адрес будет защищён от спам-ботов." data-placement="top" data-toggle="tooltip"></span>
                    </div>
                </div>
                
                <div class="section-title f-m s15">Размещение объявления</div> 
                <div class="bl-tb add-tb pos-rel zizz">
                    <div class="bl-celln bl-cell al-mid siz">
                        <label class="control-label" for="title">Заголовок объявления</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <input value="" placeholder="Заголовок не более 100 символов" maxlength="100" name="title" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters advert_title" required="" type="text">
                        <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                    </div>
                </div>  
                <div class="bl-tb add-tb pos-rel zizz">
                    <div class="bl-celln bl-cell al-mid siz">
                        <label class="control-label" for="title">Прикрепите картинки</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <input value="" maxlength="100" name="image" data-original-title="Добавьте картинки" class="form-control calcletters" type="file" accept="image">
                        <span class="icon-info" data-original-title="Добавьте картинки" data-placement="top" data-toggle="tooltip"></span>
                    </div>
                </div>
                <div class="bl-tb add-tb pos-rel zizz">
                    <div class="bl-celln bl-cell al-mid siz">
                        <label class="control-label" for="title">Цена руб.</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <input value="" placeholder="Цена" maxlength="100" name="price" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters advert_price" required="" type="number">
                        <span class="icon-info" data-original-title="Задайте цену товара" data-placement="top" data-toggle="tooltip"></span>
                    </div>
                </div>  
                
                <div class="bl-tb add-tb pos-rel multiselect_cont zizz">
                    <div class="bl-celln bl-cell al-top siz">
                        <label>Выберите регион</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <div class="multiselect" data-action="" data-name="region" data-default="">
                            <div>
                                
                                <select class="form-control advert_region" size="1" name="region">
                                    
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
                        <label>Выберите категорию</label>
                    </div>
                    <div class="bl-cellf bl-cell al-top zis">
                        <div class="multiselect" data-action="load" data-name="cat" data-default="">
                            <div>
                                <select class="form-control advert_category" size="1" name="category">
                                    
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
                        <textarea required="" placeholder="Описание не более 2000 символов" maxlength="2000" class="form-control calcletters advert_description" name="content" rows="5"></textarea>
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
                <input type="submit" value="Редактировать" class="btn btn-primary">
            </form>
            
            
        </div>
        
        </div>
    </div>
    </div>
        
    
    <!--start content-->
    <main class="page-content">
        @if(session('success'))
            <div class="alert alert-success">
                <strong>Ок!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
        @endif

        @if(count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    {{ $error }}
                </div>
            @endforeach

        @endif
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Обьявления</li>
                </ol>
            </nav>
            </div>
            <div class="ms-auto">
            
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <div class="row align-items-center m-0">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>Все категории</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" class="form-control">
                    </div>
                    
                </div>
            </div>
           
            <div class="card-body">

                <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Картинка и Заголовок</td>
                            <td>Цена</td>
                            <td>Категория</td>
                            <td>Регион</td>
                            <td>Телефон</td>
                            <td>Дата добавления</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adverts as $advert)
                            <tr>
                                <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                </td>
                                <td class="productlist">
                                    <a class="d-flex align-items-center gap-2" href="#">
                                        <div class="product-box">

                                            @if($advert->test == true)
                                                @foreach($advert->images as $image)
                                                    @if($image->name == 'заглушка.jpg')
                                                        <img alt="{{ $advert->title }}" src="/assets/images/заглушка.jpg">
                                                        
                                                        @else
                                                            <img alt="{{ $advert->title }}" src="/assets/uploads/usr/0/{{$image->name}}">
                                                    @endif
                                                @endforeach
                                                @elseif($advert->test == false)
                                                    @foreach($advert->images as $image)                                
                                                        <img alt="{{ $advert->title }}" src="/storage/images/{{$image->name}}">
                                                    @endforeach
                                            @endif
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 product-title">{{ $advert->title }}</h6>
                                        </div>
                                    </a>
                                </td>
                                <td><span>{{ $advert->price }} руб</span></td>
                                <td><span class="badge rounded-pill alert-success">{{ $advert->category->name }}</span></td>
                                @if($advert->region != null)
                                    <td><span class="badge rounded-pill alert-success">{{ $advert->region->name }}</span></td>
                                @endif
                                <td><span class="badge rounded-pill alert-success">{{ $advert->telephone }}</span></td>
                                <td><span>{{ $advert->created_at }}</span></td>
                                <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    @if(isset($advert->user->id) && !isset($advert->category->id) && !isset($advert->region->id))
                                        <a href="javascript:;" class="text-warning btn-update-advert" data-bs-toggle="modal" data-bs-target="#updateAdvertModal" data-user-id="{{ $advert->user->id}}" data-user-email="{{ $advert->user->email}}" data-user-name="{{ $advert->user->name}}"  data-title="{{ $advert->title}}" data-price="{{ $advert->price}}" data-description="{{ $advert->description}}" data-id="{{ $advert->id}}" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        @elseif(isset($advert->user->id) && isset($advert->category->id) && !isset($advert->region->id))
                                            <a href="javascript:;" class="text-warning btn-update-advert" data-bs-toggle="modal" data-bs-target="#updateAdvertModal" data-user-id="{{ $advert->user->id}}" data-user-email="{{ $advert->user->email}}" data-user-name="{{ $advert->user->name}}" data-category="{{ $advert->category->id}}" data-title="{{ $advert->title}}" data-price="{{ $advert->price}}" data-description="{{ $advert->description}}" data-id="{{ $advert->id}}" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                @elseif(isset($advert->user->id) && isset($advert->category->id) && isset($advert->region->id))
                                                    <a href="javascript:;" class="text-warning btn-update-advert" data-bs-toggle="modal" data-bs-target="#updateAdvertModal" data-user-id="{{ $advert->user->id}}" data-user-email="{{ $advert->user->email}}" data-user-name="{{ $advert->user->name}}" data-region="{{ $advert->region->id}}" data-category="{{ $advert->category->id}}" data-title="{{ $advert->title}}" data-price="{{ $advert->price}}" data-description="{{ $advert->description}}" data-id="{{ $advert->id}}" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    
                                    @endif
                                    
                                    <a href="javascript:;" class="text-danger btn-delete-advert" data-bs-toggle="modal" data-bs-target="#deleteAdvertModal" data-id="{{ $advert->id}}" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                </div>

        <nav class="float-end mt-4" aria-label="Page navigation">
            {{ $adverts->withQueryString()->links() }}
        </nav>

    </div>
    </div>

</main>
    <!--end page main-->

    <script>
        let btns = document.querySelectorAll(".btn-delete-advert");
        console.log(btns);
        for(let btn of btns){
          btn.addEventListener('click', function(evt){
            let link = evt.target.parentElement;
            let id = link.getAttribute('data-id')
            document.querySelector("#deleteAdvertModal .id_advert").value = id;
          });
        }

        let btnsUpdate = document.querySelectorAll(".btn-update-advert");
        console.log(btnsUpdate);
        for(let btn of btnsUpdate){
          btn.addEventListener('click', function(evt){
            let link = evt.target.parentElement;
            let id = link.getAttribute('data-id')
            let title = link.getAttribute('data-title')
            let description = link.getAttribute('data-description')
            let category = link.getAttribute('data-category')
            let userEmail = link.getAttribute('data-user-email')
            let userName = link.getAttribute('data-user-name')
            let userId = link.getAttribute('data-user-id')
            let region = link.getAttribute('data-region')
            let price = link.getAttribute('data-price')

            document.querySelector("#updateAdvertModal .id_advert").value = id;
            if(userName != null){
                document.querySelector("#updateAdvertModal .user_name").value = userName;
            }
            document.querySelector("#updateAdvertModal .user_id").value = userId;
            document.querySelector("#updateAdvertModal .user_email").value = userEmail;
            document.querySelector("#updateAdvertModal .advert_price").value = price;
            document.querySelector("#updateAdvertModal .advert_title").value = title;
            document.querySelector("#updateAdvertModal .advert_description").value = description;
            let categoryOptions = document.querySelectorAll("#updateAdvertModal .advert_category option")
            for(let option of categoryOptions){
                console.log(option);

                if(option.value == category){
                    console.log(option);
                    option.setAttribute('selected') = 'slected'
                }
            }
            
            document.querySelector("#updateAdvertModal .advert_region").value = region;
          });
        }
      </script>
      
@endsection
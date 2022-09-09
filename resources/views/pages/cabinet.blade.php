@extends('templates.'.$template)

@section('content')






<div id="main" class="mbg">
    
    <div class="container page-add ">
        <div class="bl-tb container-tb">
            <!-- Начало контента -->
            <div class="col-md-9">

                <!-- <div class="bl-cell al-top bl-center"> -->
                    <h1>Личные данные</h1> 
                    @if(isset(Auth::user()->avatar))
                        <img src="/storage/avatars/{{ Auth::user()->avatar}}" alt="140x140" class="img-circle img-responsive">
                    @endif
                    @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">
                            <button class="close" data-dismiss="alert">×</button>
                            {{ $error }}
                        </div>
                        @endforeach

                    @endif
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Ок!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/cabinet/personal-data-request" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Ваше имя</label>
                            <input type="text" class="form-control input-dis" value="{{ Auth::user()->name }}" name="name" id="exampleInputName" placeholder="{{ Auth::user()->name }}" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваша почта</label>
                            <input type="email" class="form-control input-dis" name="email" value="{{ Auth::user()->email }}" id="exampleInputEmail1" placeholder="email" disabled="disabled">
                        </div>
                        <div class="form-group pos-rel">
                            <div class="pos-rel">
                                <label for="password1">Новый пароль</label>
                                <input placeholder="Пароль" name="password" id="password1" value="" class="form-control show-pas1 input-dis" type="password" disabled="disabled">
                                <span class="masked1 bl-bl pos-abs point"></span>
                            </div>
                            <div class="pos-rel">
                                <label for="password2">Подтвердить пароль</label>
                                <input placeholder="Повторите пароль" name="password1" id="password2" value="" class="form-control show-pas2" type="password" style="display: none;">
                                <span class="masked2 bl-bl pos-abs point"></span>
                            </div> 
                            <div class="alert alert-success form-alert" style="display: none;" id="password_success">Пароли совпали!</div>
                            <div class="alert alert-warning form-alert" style="display: none;" id="password_warning">Пароли не совпадают!</div>
                            <div class="alert alert-info form-alert" style="display: none;" id="password_info">Пароль слишком короткий!</div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Сменить аватар</label>
                            <input type="file" id="exampleInputFile" class="input-dis" name="avatar" disabled="disabled">
                            <p class="help-block">Допустимы форматы jpeg,jpg,png,pdf, не более 20МБ </p>
                        </div>
                        
                        <button type="button" class="btn btn-primary remover-btn">Изменить данные</button>
                        <button type="submit" class="btn btn-default input-dis" disabled="disabled">Подтвердить</button>
                    </form>
                    
                </div>

            <!-- </div> -->
            <!-- Конец контента -->

            <div class="col-md-3">
                <div class="bl-cell al-top bl-right">
                    <div class="sidebar_right pos-rel">
                        <!-- Sidebar начало -->
        
                        <div class="container">

                            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                                <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                                    <li role="presentation" class="active"><a href="/cabinet">Личные данные</a></li>
                                    <li role="presentation"><a href="#">Profile</a></li>
                                    <li role="presentation"><a href="#">Messages</a></li>
                                </ul>
                                <!-- <ul class="nav nav-pills flex-column mb-auto">
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
                                </ul> -->
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
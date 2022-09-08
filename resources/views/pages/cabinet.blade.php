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
                        <img src="/assets/images/avatars/{{ Auth::user()->avatar}}" alt="140x140" class="img-circle img-responsive">
                    @endif
                    <form action="/cabinet/personal-data-request" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваша почта</label>
                            <input type="email" class="form-control input-dis" name="email" id="exampleInputEmail1" placeholder="{{ Auth::user()->email }}" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control input-dis" name="password" id="exampleInputPassword1" placeholder="Password" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Сменить аватар</label>
                            <input type="file" id="exampleInputFile" class="input-dis" name="avatar" disabled="disabled">
                            <p class="help-block">Допустимы форматы .png </p>
                        </div>
                        <button type="button" class="btn btn-default remover-btn">Редактировать</button>
                        <button type="submit" class="btn btn-default input-dis" disabled="disabled">Submit</button>
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
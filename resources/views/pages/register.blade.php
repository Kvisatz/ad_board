@extends('templates.'.$template)

@section('content')






<div id="main" class="mbg">
    
    <div class="container page-add ">
        <div class="bl-tb container-tb">
            <!-- Начало контента -->
            <div class="col-md-9">

                <!-- <div class="bl-cell al-top bl-center"> -->
                    <h1>Регистрация</h1> 
                    
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
                        @elseif(session('fail'))
                        <div class="alert alert-danger">
                            <button class="close" data-dismiss="alert">×</button>
                            {{ session('fail') }}
                        </div>
                    @endif
                    <form action="/register-request" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Ваше имя</label>
                            <input type="text" class="form-control input-dis" value="" name="name" id="exampleInputName" placeholder="Введите логин">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваша почта</label>
                            <input type="email" class="form-control input-dis" name="email" value="" id="exampleInputEmail1" placeholder="E-mail">
                        </div>
                        <div class="form-group pos-rel">
                            <div class="pos-rel">
                                <label for="password1">Пароль</label>
                                <input placeholder="Пароль" name="password" id="password1" value="" class="form-control show-pas1 input-dis" type="password">
                                <span class="masked1 bl-bl pos-abs point"></span>
                            </div>
                            <div class="pos-rel">
                                <label for="password2">Подтвердить пароль</label>
                                <input placeholder="Повторите пароль" name="password2" id="password2" value="" class="form-control show-pas2" type="password" style="display: none;">
                                <span class="masked2 bl-bl pos-abs point"></span>
                            </div> 
                            <div class="alert alert-success form-alert" style="display: none;" id="password_success">Пароли совпали!</div>
                            <div class="alert alert-warning form-alert" style="display: none;" id="password_warning">Пароли не совпадают!</div>
                            <div class="alert alert-info form-alert" style="display: none;" id="password_info">Пароль слишком короткий!</div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Аватар</label>
                            <input type="file" id="exampleInputFile" class="input-dis" name="avatar">
                            <p class="help-block">Допустимы форматы jpeg,jpg,png,pdf, не более 20МБ </p>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                    
                </div>

            <!-- </div> -->
            <!-- Конец контента -->

            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
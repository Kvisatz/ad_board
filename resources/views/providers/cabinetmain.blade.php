<!-- Начало контента -->
<div class="col-md-9">

<!-- <div class="bl-cell al-top bl-center"> -->
    <h1>Личные данные</h1> 
    @if(isset(Auth::user()->avatar))
        <div class="container">
            <div class="row">
                <img src="/storage/avatars/{{ Auth::user()->avatar}}" width="100" height="100" alt="140x140" class="img-circle img-responsive">
            </div>
        </div>
        
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
        <div class="alert alert-success">
            <strong>Ок!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">×</button>
        </div>
    @endif
    <form action="/cabinet/personal-data-request" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Ваше имя</label>
            <input type="text" class="form-control input-dis" value="{{ $user()->name }}" name="name" id="exampleInputName" placeholder="{{ Auth::user()->name }}" disabled="disabled">
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
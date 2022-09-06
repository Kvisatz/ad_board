@extends('templates.'.$template)

@section('content')
    <div id="main" class="mbg">
        <div class="container"> 
            <div class="bl-tb container-tb">
                <div class="bl-cell al-top bl-center">
                    <h1></h1>  
                    <div class="text-center">
                        <form role="form" method="POST" action="/login-request" name="login_page" class="form-container form-login bl-inl al-top form-hover">
                            @csrf
                            <div class="text-center">
                                <h1>Вход в личный кабинет</h1>
                            </div>
                            @if(count($errors) > 0)
                                @foreach ($errors->all() as $error)

                                <div class="alert alert-danger">
                                    <button class="close" data-dismiss="alert">×</button>
                                    {{ $error }}
                                </div>
                                @endforeach

                            @endif
                            <div class="field-form text-left">
                                <input placeholder="E-mail" name="email" id="sender-email" type="email" class="email form-control br3 b-f">
                                <div class="pos-rel">
                                    <input placeholder="Пароль" name="password" type="password" class="pass-log show-pas1 form-control br3 b-f" id="user-pass">
                                    <span class="masked1 bl-bl pos-abs point"></span>
                                </div>
                                <div class="text-right">
                                    <a class="a-pass s13" href="/users/password_recovery/">Напомнить пароль</a>
                                </div>
                            </div>
                           <div class="btn-form text-center">
                                <button type="submit" class="btn btn-primary s16">Войти</button>
                            </div>
                            
                            <div class="text-center">
                                <a class="a-reg" href="/users/register/">Регистрация</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
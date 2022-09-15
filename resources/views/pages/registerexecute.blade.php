@extends('templates.'.$template)

@section('content')






<div id="main" class="mbg">
    
    <div class="container page-add ">
        <div class="bl-tb container-tb">
            <!-- Начало контента -->
            <div class="col-md-9">
                    
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            <strong>Ок!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert">×</button>
                        </div>
                    @endif
                    <a href="/" class="btn btn-primary">На главную</a>
                    <a href="/login" class="btn btn-primary">Войти в мой кабинет</a>
                    
                    
            </div>

        
            <!-- Конец контента -->
        </div>
    </div>
</div>






@endsection
@extends('templates.'.$template)

@section('content')
 
 <!--start content-->
 <main class="page-content">
        <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Pages</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Coming Soon</li>
            </ol>
        </nav>
        </div>
        <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-12 col-lg-6 mx-auto">
        <div class="card shadow-none bg-transparent">
            <div class="card-body text-center">
            <h1 class="display-4 mt-5">Страница скоро будет готова</h1>
            <p>Мы усиленно трудимся над разработкой данной страницы
                </p>
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
            
                <h4 class="mt-3">Подписывайтесь на нас в сойсетях</h4>
                <div class="error-social mt-3"> <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                    <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    </main>
    <!--end page main-->

    @endsection
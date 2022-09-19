@extends('templates.'.$template)

@section('content')
    <!--start content-->
    <main class="page-content">

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Component</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Alerts</li>
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
  <div class="col col-lg-9 mx-auto">

  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title mb-0">Alerts With Light Colors</h5>
       <div class="my-3 border-top"></div>
      <div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-success">A simple success alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-danger alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-danger">A simple danger alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-warning alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-warning"><i class="bi bi-exclamation-triangle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-warning">A simple Warning alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-info alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-info"><i class="bi bi-info-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-info">A simple info alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-dark alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-dark"><i class="bi bi-bell-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-dark">A simple dark alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title">Color Examples Without Icons</h5>
       <div class="my-3 border-top"></div>
      <div class="alert border-0 bg-light-success alert-dismissible fade show">
        <div class="text-success">A simple success alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-danger alert-dismissible fade show">
        <div class="text-danger">A simple danger alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-warning alert-dismissible fade show">
        <div class="text-warning">A simple Warning alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-info alert-dismissible fade show">
        <div class="text-info">A simple info alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-light-dark alert-dismissible fade show">
        <div class="text-dark">A simple dark alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>


  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title mb-0">Alerts With Borders</h5>
       <div class="my-3 border-top"></div>
      <div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-success">A simple success alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-danger">A simple danger alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-warning border-start border-4 bg-light-warning alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-warning"><i class="bi bi-exclamation-triangle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-warning">A simple Warning alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-info border-start border-4 bg-light-info alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-info"><i class="bi bi-info-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-info">A simple info alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-dark border-start border-4 bg-light-dark alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-dark"><i class="bi bi-bell-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-dark">A simple dark alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title">Color Examples Without Icons</h5>
       <div class="my-3 border-top"></div>
      <div class="alert border-0 border-success border-start border-4 bg-light-success alert-dismissible fade show">
        <div class="text-success">A simple success alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show">
        <div class="text-danger">A simple danger alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-warning border-start border-4 bg-light-warning alert-dismissible fade show">
        <div class="text-warning">A simple Warning alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-info border-start border-4 bg-light-info alert-dismissible fade show">
        <div class="text-info">A simple info alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 border-dark border-start border-4 bg-light-dark alert-dismissible fade show">
        <div class="text-dark">A simple dark alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>


  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title mb-0">Alerts With Dark Colors</h5>
       <div class="my-3 border-top"></div>
      <div class="alert border-0 bg-success alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-white"><i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-white">A simple success alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-danger alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-white"><i class="bi bi-x-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-white">A simple danger alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-warning alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-dark"><i class="bi bi-exclamation-triangle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-dark">A simple Warning alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-info alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-dark"><i class="bi bi-info-circle-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-dark">A simple info alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert border-0 bg-dark alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
          <div class="fs-3 text-white"><i class="bi bi-bell-fill"></i>
          </div>
          <div class="ms-3">
            <div class="text-white">A simple dark alert—check it out!</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title">Color Examples Without Icons</h5>
       <div class="my-3 border-top"></div>
      <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
        <div class="text-white">A simple success alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
        <div class="text-white">A simple danger alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show">
        <div class="text-dark">A simple Warning alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-info border-0 bg-info alert-dismissible fade show">
        <div class="text-dark">A simple info alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-dark border-0 bg-dark alert-dismissible fade show">
        <div class="text-white">A simple dark alert—check it out!</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>





</div>
</div><!--end row-->
</main>
<!--end page main-->
@endsection
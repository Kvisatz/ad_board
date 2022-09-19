<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assetsadmin/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assetsadmin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="assetsadmin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- <link href="assetsadmin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /> -->
  <link href="assetsadmin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assetsadmin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assetsadmin/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assetsadmin/css/style.css" rel="stylesheet" />
  <link href="assetsadmin/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  

  <!-- loader-->
	<link href="assetsadmin/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="assetsadmin/css/dark-theme.css" rel="stylesheet" />
  <link href="assetsadmin/css/light-theme.css" rel="stylesheet" />
  <link href="assetsadmin/css/semi-dark.css" rel="stylesheet" />
  <link href="assetsadmin/css/header-colors.css" rel="stylesheet" />

  <title>Администраторская зона</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Поиск">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="/">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                     @if(isset(Auth::user()->avatar))
                        <img src="/storage/avatars/{{ Auth::user()->avatar}}" class="user-img" alt="">
                        @else
                        <img src="assetsadmin/images/avatars/avatar-1.png" class="user-img" alt="">   
                    @endif
                    
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                       @if(isset(Auth::user()->avatar))
                            <img src="/storage/avatars/{{ Auth::user()->avatar}}" class="user-img" alt="">
                            @else
                            <img src="assetsadmin/images/avatars/avatar-1.png" class="user-img" alt="">   
                        @endif
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">{{ Auth::user()->role->name }}</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="profile">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Профиль</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="coming-soon">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-gear-fill"></i></div>
                           <div class="ms-3"><span>Настройки</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="dashboard">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-speedometer"></i></div>
                           <div class="ms-3"><span>Главная</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="coming-soon">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                           <div class="ms-3"><span>Earnings</span></div>
                         </div>
                       </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="cabinet">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
                           <div class="ms-3"><span>В кабинет</span></div>
                         </div>
                       </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="admin-logout">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Выйти</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="projects">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                   <div class="row row-cols-3 gx-2">
                      <div class="col">
                        <a href="categories">
                         <div class="apps p-2 radius-10 text-center">
                            <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                              <i class="bi bi-basket2-fill"></i>
                            </div>
                            <p class="mb-0 apps-name">Категории</p>
                         </div>
                        </a>
                      </div>
                      <div class="col">
                        <a href="users">
                        <div class="apps p-2 radius-10 text-center">
                           <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                            <i class="bi bi-people-fill"></i>
                           </div>
                           <p class="mb-0 apps-name">Пользователи</p>
                        </div>
                      </a>
                     </div>
                     <div class="col">
                      <a href="adverts">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                          <i class="bi bi-trophy-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Обьявления</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="coming-soon">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                          <i class="bi bi-collection-play-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Медиа</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="profile">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                          <i class="bi bi-person-circle"></i>
                         </div>
                         <p class="mb-0 apps-name">Аккаунт</p>
                       </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="coming-soon">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                          <i class="bi bi-file-earmark-text-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Документы</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="coming-soon">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                          <i class="bi bi-credit-card-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Платежи</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="coming-soon">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                          <i class="bi bi-calendar-check-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">События</p>
                      </div>
                    </a>
                    </div>
                    <div class="col">
                      <a href="coming-soon">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                          <i class="bi bi-book-half"></i>
                         </div>
                         <p class="mb-0 apps-name">История</p>
                        </div>
                      </a>
                    </div>
                   </div><!--end row-->
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="messages">
                    <span class="notify-badge">5</span>
                    <i class="bi bi-chat-right-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Messages</h5>
                  </div>
                 <div class="header-message-list p-2">
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="assetsadmin/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                          </div>
                       </div>
                     </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span class="msg-time float-end text-secondary">3 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It was popularised in the 1960</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span class="msg-time float-end text-secondary">1 d</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If you are going to use a passage</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span class="msg-time float-end text-secondary">2 w</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All the Lorem Ipsum generators</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <img src="assetsadmin/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                         </div>
                      </div>
                    </a>
                   <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="assetsadmin/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                        </div>
                     </div>
                   </a>
                   <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="assetsadmin/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                        </div>
                     </div>
                   </a>
                </div>
                <div class="p-2">
                  <div><hr class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <div class="text-center">View All Messages</div>
                    </a>
                </div>
               </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <span class="notify-badge">8</span>
                    <i class="bi bi-bell-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Notifications</h5>
                  </div>
                  <div class="header-notifications-list p-2">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                           <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                           <div class="ms-3 flex-grow-1">
                             <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                             <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                           </div>
                        </div>
                      </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">Time Response  <span class="msg-time float-end text-secondary">3 h</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1 min avarage time response</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Product Approved  <span class="msg-time float-end text-secondary">1 d</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
                          </div>
                       </div>
                     </a>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
                          <div class="ms-3 flex-grow-1">
                            <h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
                          </div>
                       </div>
                     </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
                         </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                         </div>
                      </div>
                    </a>
                 </div>
                 <div class="p-2">
                   <div><hr class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                       <div class="text-center">View All Notifications</div>
                     </a>
                 </div>
                </div>
              </li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="assetsadmin/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">Админка</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Главная</div>
              </a>
              <ul>
                <li> <a href="dashboard"><i class="bi bi-circle"></i>Основная тема</a>
                </li>
                
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Приложение</div>
              </a>
              <ul>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Почта</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Чаты</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Менеджер файлов</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Задачи</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Счет-фактура</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Календарь</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Интерфейсы</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Виджеты</div>
              </a>
              <ul>
                <li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Статические виджеты</a>
                </li>
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Динамические виджеты</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">eCommerce</div>
              </a>
              <ul>
                <li> <a href="adverts"><i class="bi bi-circle"></i>Обьявления</a>
                </li>
                <li> <a href="categories"><i class="bi bi-circle"></i>Категории</a>
                </li>
                <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Детали обьявления</a>
                </li>
                <li> <a href="coming-soon"><i class="bi bi-circle"></i>Магазины</a>
                </li>
                
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Компоненты</div>
              </a>
              <ul>
                <li> <a href="alerts"><i class="bi bi-circle"></i>Алерты</a>
                </li>
                <li> <a href="badges"><i class="bi bi-circle"></i>Значки</a>
                </li>
                <li> <a href="buttons"><i class="bi bi-circle"></i>Кнопки</a>
                </li>
                <li> <a href="cards"><i class="bi bi-circle"></i>Карточки</a>
                </li>
                <li> <a href="carousels"><i class="bi bi-circle"></i>Карусельки</a>
                </li>
                <li> <a href="lists"><i class="bi bi-circle"></i>Списки</a>
                </li>
                <li> <a href="modals"><i class="bi bi-circle"></i>Модальные окна</a>
                </li>
                <li> <a href="navigations"><i class="bi bi-circle"></i>Навигация и табы</a>
                </li>
                
              </ul>
            </li>
            
            <li class="menu-label">Страницы</li>
            
            <li>
              <a href="profile">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Профиль</div>
              </a>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Ошибки</div>
              </a>
              <ul>
                <li> <a href="404" target="_blank"><i class="bi bi-circle"></i>404 Error</a>
                </li>
                <li> <a href="500" target="_blank"><i class="bi bi-circle"></i>500 Error</a>
                </li>
                <li> <a href="coming-soon" target="_blank"><i class="bi bi-circle"></i>Coming Soon</a>
                </li>
              </ul>
            </li>
            
            <li class="menu-label">Прочее</li>
            
            <li>
              <a href="coming-soon" target="_blank">
                <div class="parent-icon"><i class="bi bi-file-code-fill"></i>
                </div>
                <div class="menu-title">Документация</div>
              </a>
            </li>
            <li>
              <a href="coming-soon" target="_blank">
                <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                </div>
                <div class="menu-title">Поддержка</div>
              </a>
            </li>
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->

       @yield('content')

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assetsadmin/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assetsadmin/js/jquery.min.js"></script>
  <script src="assetsadmin/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assetsadmin/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assetsadmin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assetsadmin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assetsadmin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assetsadmin/js/pace.min.js"></script>
  <script src="assetsadmin/plugins/chartjs/js/Chart.min.js"></script>
  <script src="assetsadmin/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="assetsadmin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="assetsadmin/js/app.js"></script>
  <script src="assetsadmin/js/index.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preschool.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 08:43:13 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Preskool - Dashboard</title>

    <link rel="shortcut icon" href="/dashboard/assets/img/favicon.png" />

    <link
        href="/dashboard/fonts.googleapis.com/css2ccf1.css?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/feather/feather.css" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/icons/flags/flags.css" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/dashboard/assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="/dashboard/assets/css/style.css" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/datatables/datatables.min.css" />


    <link rel="stylesheet" href="/dashboard/assets/plugins/datatables/datatables.min.css" />

    <link rel="stylesheet" href="/dashboard/assets/plugins/select2/css/select2.min.css" />

    <link rel="stylesheet" href="/dashboard/assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="/dashboard/assets/plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" href="/dashboard/assets/plugins/select2/css/select2.min.css" />

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>

</head>


<body>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('admin.home') }}" class="logo">
                    <img src="/dashboard/assets/img/logo.png" alt="Logo" />
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="/dashboard/assets/img/logo-small.png" alt="Logo" width="30" height="30" />
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown me-2">
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/dashboard/assets/img/profiles/avatar-02.jpg" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Carlson Tech</span> has approved
                                                    <span class="noti-title">your estimate</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/dashboard/assets/img/profiles/avatar-11.jpg" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">International Software Inc</span>
                                                    has sent you a invoice in the amount of
                                                    <span class="noti-title">$218</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/dashboard/assets/img/profiles/avatar-17.jpg" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">John Hendry</span> sent a cancellation
                                                    request
                                                    <span class="noti-title">Apple iPhone XR</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/dashboard/assets/img/profiles/avatar-13.jpg" />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Mercury Software Inc</span> added a new
                                                    product
                                                    <span class="noti-title">Apple MacBook Pro</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="/dashboard/assets/img/profiles/avatar-01.jpg"
                                width="31" alt="Ryan Taylor" />
                            <div class="user-text">
                                <h6>{{ Auth::User()->name }}</h6>
                                <p class="text-muted mb-0">{{ Auth::User()->name }}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/dashboard/assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle" />
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('admin.appetizer_academic_years.create') }}">Adicionar nova Doação</a>
                        <a class="dropdown-item" href="{{ route('admin.seminars.create') }}">Dados da Seminário</a>
                        <a class="dropdown-item" href="{{ route('admin.rectors.create') }}">Dados da Reitor</a>
                        <a class="dropdown-item" href="{{ route('admin.partners.create') }}">Parceiro</a>
                        <a class="dropdown-item" href="{{ route('admin.user.create') }}">Adicionar Novo Utilizador</a>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="flaticon-turn-off"></i>Log Out</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>

                </li>
            </ul>
            @include('layouts._includes.dashboard.Menu')
        </div>


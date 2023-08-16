<!DOCTYPE html>
<html lang="en">

<!-- <?php
    session_start();
?>  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="../qlbanve/assets/img/favicon.png">

    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/admin.css">

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>

                    <div class="navbar-brand">
                        <span class="logo-text">
                            <img src="" alt="">
                            <h4>My Bus &emsp; &emsp;<img src="https://img.icons8.com/dusk/64/null/bus--v1.png" />
                            </h4>
                        </span>
                    </div>
                
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a> 
                </div>
                
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent">  
                    <!-- tool -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1"> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="user.php">Chỉnh Sửa cá nhân</a>
                                <a class="dropdown-item" href="doimk.php">Đổi Mật Khẩu</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>

                    <!-- User profile and search -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <!-- anh dai dien -->
                                <img src="assets/images/avt1.png" alt="user" class="rounded-circle" width="40">

                                <span class="ml-2 d-none d-lg-inline-block">
                                    <span>Xin chào</span> 
                                    <span class="text-dark"> 
                                        <?php if(isset($_SESSION["email"]))
                                            echo $_SESSION["name"];
                                            else echo ' '; ?>
                                    </span> 
                                    <i data-feather="chevron-down" class="svg-icon"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="user.php">
                                    <i data-feather="user" class="svg-icon mr-2 ml-1"></i> Trang cá nhân
                                </a>
                                <a class="dropdown-item" href="/QLBanVeXeKhach/index.php">
                                    <i data-feather="mail" class="svg-icon mr-2 ml-1"></i> Trang Chủ hệ thống
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dangxuat.php">
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i> Đăng Xuất
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    
        
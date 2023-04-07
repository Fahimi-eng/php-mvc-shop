<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
    <meta name="Author" content="SPRUKO™">
    <meta name="Keywords" content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix"/>

    <!-- Title -->
    <title> پنل مدیریت </title>

    <!-- styles -->
    <!-- Favicon -->
    <link rel="icon" href="/public/admin/img/brand/favicon.png" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="/public/admin/plugins/icons/icons.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="/public/admin/plugins/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="/public/admin/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="/public/admin/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!--  Sidemenu css -->
    <link id="theme" rel="stylesheet" href="/public/admin/css-rtl/sidemenu.css">


    <!--  Owl-carousel css-->
    <link href="/public/admin/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Maps css -->
    <link href="/public/admin/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">


    <!--- Style css --->
    <link href="/public/admin/css-rtl/style.css" rel="stylesheet">
    <link href="/public/admin/css-rtl/style-dark.css" rel="stylesheet">
    <link href="/public/admin/css-rtl/boxed.css" rel="stylesheet">
    <link href="/public/admin/css-rtl/dark-boxed.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="/public/admin/css-rtl/skin-modes.css" rel="stylesheet" />

    <!--- Animations css-->
    <link href="/public/admin/css-rtl/animate.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="/public/admin/switcher/css/switcher-rtl.css" rel="stylesheet">
    <link href="/public/admin/switcher/demo.css" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini">

<!-- Loader -->
<div id="global-loader">
    <img src="/public/admin/img/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page">

    <!-- main-sidebar -->
    <!-- main-sidebar -->
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="index.html"><img src="/public/admin/img/brand/logo.png" class="main-logo" alt="logo"></a>
            <a class="desktop-logo logo-dark active" href="index.html"><img src="/public/admin/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="/public/admin/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="/public/admin/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="">
                        <img alt="user-img" class="avatar avatar-xl brround" src="/public/admin/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="fw-semibold mt-3 mb-0">پتی کروزر</h4>
                        <span class="mb-0 text-muted">مدیریت</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">اصلی</li>
                <li class="slide">
                    <a class="side-menu__item" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">صفحه اصلی</span><span class="badge bg-success text-light" id="bg-side-text">1</span></a>
                </li>
                <li class="side-item side-item-category">تجارت الکترونیک</li>
                <li class="slide">
                    <a class="side-menu__item" href="icons.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">آیکون ها</span><span class="badge bg-danger text-light" id="bg-side-text">جدید</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">نمودار</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="chart-morris.html">نمودار موریس</a></li>
                        <li><a class="slide-item" href="chart-flot.html">نمودار های فلوت</a></li>
                        <li><a class="slide-item" href="chart-chartjs.html">نمودار JS</a></li>
                        <li><a class="slide-item" href="chart-echart.html">اچارت</a></li>
                        <li><a class="slide-item" href="chart-sparkline.html">شكلر</a></li>
                        <li><a class="slide-item" href="chart-peity.html">چارت گرایی</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg><span class="side-menu__label">تجارت الکترونیک</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="products.html">محصولات</a></li>
                        <li><a class="slide-item" href="product-details.html">مشخصات محصول</a></li>
                        <li><a class="slide-item" href="product-cart.html">سبد</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!-- main-sidebar -->
    <!-- main-content -->
    <div class='main-content app-content'>

        <!-- main-header -->
        <!-- main-header -->
        <div class="main-header sticky side-header nav nav-item">
            <div class="container-fluid">
                <div class="main-header-left ">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="/public/admin/img/brand/logo.png" class="logo-1" alt="لوگو"></a>
                        <a href="index.html"><img src="/public/admin/img/brand/logo-white.png" class="dark-logo-1" alt="لوگو"></a>
                        <a href="index.html"><img src="/public/admin/img/brand/favicon.png" class="logo-2" alt="لوگو"></a>
                        <a href="index.html"><img src="/public/admin/img/brand/favicon.png" class="dark-logo-2" alt="لوگو"></a>
                    </div>
                    <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                        <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                        <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                    </div>
                    <div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
                        <input class="form-control" placeholder="هر چیزی را جستجو کنید ..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                    </div>
                </div>
                <div class="main-header-right">
                    <ul class="nav">
                        <li class="">
                            <div class="dropdown  nav-itemd-none d-md-flex">
                                <a href="#" class="d-flex  nav-item country-flag1"
                                   data-bs-toggle="dropdown" aria-expanded="false">
											<span class="avatar country-Flag me-0 align-self-center bg-transparent"><img
                                                    src="/public/admin/img/flags/us_flag.jpg" alt="img"></span>
                                    <div class="my-auto">
                                        <strong class="me-2 ms-2 my-auto">انگلیسی</strong>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow"
                                     x-placement="bottom-end">
                                    <a href="#" class="dropdown-item d-flex ">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img
                                                        src="/public/admin/img/flags/french_flag.jpg" alt="img"></span>
                                        <div class="d-flex">
                                            <span class="mt-2">فرانسوی</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img
                                                        src="/public/admin/img/flags/germany_flag.jpg" alt="img"></span>
                                        <div class="d-flex">
                                            <span class="mt-2">آلمان</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img
                                                        src="/public/admin/img/flags/italy_flag.jpg" alt="img"></span>
                                        <div class="d-flex">
                                            <span class="mt-2">ایتالیا</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img
                                                        src="/public/admin/img/flags/russia_flag.jpg" alt="img"></span>
                                        <div class="d-flex">
                                            <span class="mt-2">روسیه</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img
                                                        src="/public/admin/img/flags/spain_flag.jpg" alt="img"></span>
                                        <div class="d-flex">
                                            <span class="mt-2">اسپانیا</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="nav nav-item  navbar-nav-right ml-auto">
                        <div class="nav-link" id="bs-example-navbar-collapse-1">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="جستجو کردن">
                                    <span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link resp-btn">
											<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
										</button>
									</span>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown nav-item main-header-message ">
                            <a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content bg-primary text-right">
                                    <div class="d-flex">
                                        <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">پیام ها</h6>
                                        <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">علامت گذاری همه</span>
                                    </div>
                                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">شما 4 پیام خوانده نشده دارید</p>
                                </div>
                                <div class="main-message-list chat-scroll">
                                    <a href="#" class="p-3 d-flex border-bottom">
                                        <div class="  drop-img  cover-image  " data-bs-image-src="/public/admin/img/faces/3.jpg">
                                            <span class="avatar-status bg-teal"></span>
                                        </div>
                                        <div class="wd-90p">
                                            <div class="d-flex">
                                                <h5 class="mb-1 name">پتی کروزر</h5>
                                            </div>
                                            <p class="mb-0 desc">متاسفم اما مطمئن نیستم که چگونه به شما در این زمینه کمک کنم ......</p>
                                            <p class="time mb-0 text-left float-right mr-2 mt-2">15 مهر 3:55 بعد از ظهر</p>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 d-flex border-bottom">
                                        <div class="drop-img cover-image" data-bs-image-src="/public/admin/img/faces/2.jpg">
                                            <span class="avatar-status bg-teal"></span>
                                        </div>
                                        <div class="wd-90p">
                                            <div class="d-flex">
                                                <h5 class="mb-1 name">جیمی چانگا</h5>
                                            </div>
                                            <p class="mb-0 desc">همه آماده! اکنون وقت آن است که اکنون به سراغ شما بروم ......</p>
                                            <p class="time mb-0 text-left float-right mr-2 mt-2">مهر 06 01:12 صبح</p>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 d-flex border-bottom">
                                        <div class="drop-img cover-image" data-bs-image-src="/public/admin/img/faces/9.jpg">
                                            <span class="avatar-status bg-teal"></span>
                                        </div>
                                        <div class="wd-90p">
                                            <div class="d-flex">
                                                <h5 class="mb-1 name">گراهام کراکر</h5>
                                            </div>
                                            <p class="mb-0 desc">آیا آماده تحویل کالا هستید ...</p>
                                            <p class="time mb-0 text-left float-right mr-2 mt-2">25 مهر 10:35 صبح</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center dropdown-footer">
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown nav-item main-header-notification">
                            <a class="new nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content bg-primary text-right">
                                    <div class="d-flex">
                                        <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">اطلاعیه</h6>
                                        <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">علامت گذاری همه</span>
                                    </div>
                                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">شما 4 اعلان خوانده نشده دارید</p>
                                </div>
                                <div class="main-notification-list Notification-scroll">
                                    <a class="d-flex p-3 border-bottom" href="#">
                                        <div class="notifyimg bg-pink">
                                            <i class="la la-file-alt text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">پرونده های جدید موجود است</h5>
                                            <div class="notification-subtext">10 ساعت پیش</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                    <a class="d-flex p-3" href="#">
                                        <div class="notifyimg bg-purple">
                                            <i class="la la-gem text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">به روزرسانی های موجود</h5>
                                            <div class="notification-subtext">2 روز قبل</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                    <a class="d-flex p-3 border-bottom" href="#">
                                        <div class="notifyimg bg-success">
                                            <i class="la la-shopping-basket text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">سفارش جدید دریافت شد</h5>
                                            <div class="notification-subtext">1 ساعت پیش</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                    <a class="d-flex p-3 border-bottom" href="#">
                                        <div class="notifyimg bg-warning">
                                            <i class="la la-envelope-open text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">بررسی جدید دریافت شد</h5>
                                            <div class="notification-subtext">1 روز پیش</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                    <a class="d-flex p-3 border-bottom" href="#">
                                        <div class="notifyimg bg-danger">
                                            <i class="la la-user-check text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">22 ثبت نام تایید شده</h5>
                                            <div class="notification-subtext">2 ساعت پیش</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                    <a class="d-flex p-3 border-bottom" href="#">
                                        <div class="notifyimg bg-primary">
                                            <i class="la la-check-circle text-white"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="notification-label mb-1">پروژه تصویب شده است</h5>
                                            <div class="notification-subtext">4 ساعت پیش</div>
                                        </div>
                                        <div class="mr-auto">
                                            <i class="las la-angle-left text-left text-muted"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item full-screen fullscreen-button">
                            <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
                        </div>
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex" href="#"><img alt="" src="/public/admin/img/faces/6.jpg"></a>
                            <div class="dropdown-menu">
                                <div class="main-header-profile bg-primary p-3">
                                    <div class="d-flex wd-100p">
                                        <div class="main-img-user"><img alt="" src="/public/admin/img/faces/6.jpg" class=""></div>
                                        <div class="ms-3 my-auto">
                                            <h6>پتی کروزر</h6><span>مدیریت</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="#"><i class="bx bx-user-circle"></i>مشخصات</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-cog"></i> ویرایش نمایه</a>
                                <a class="dropdown-item" href="#"><i class="bx bxs-inbox"></i>صندوق ورودی</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-envelope"></i>پیام ها</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-slider-alt"></i> تنظیمات حساب</a>
                                <a class="dropdown-item" href="signin.html"><i class="bx bx-log-out"></i> خروج از سیستم</a>
                            </div>
                        </div>
                        <div class="dropdown main-header-message right-toggle">
                            <a class="nav-link pe-0" data-bs-toggle="sidebar-left" data-bs-target=".sidebar-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-header -->
        <!-- Container open -->
        <div class="container-fluid">
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">تجارت الکترونیک</h4><span
                                class="text-muted mt-1 tx-13 ms-2 mb-0">/ محصولات</span>
                    </div>
                </div>
                <div class="d-flex my-xl-auto right-content">
                    <div class="mb-xl-0" id="p-r-c-1">
                        <button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i
                                    class="mdi mdi-filter-variant"></i></button>
                    </div>
                    <div class="mb-xl-0" id="p-r-c-1">
                        <button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i
                                    class="mdi mdi-star"></i></button>
                    </div>
                    <div class="mb-xl-0" id="p-r-c-1">
                        <button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i
                                    class="mdi mdi-refresh"></i></button>
                    </div>
                    <div class="mb-xl-0">
                        <div class="btn-group dropdown">
                            <button type="button" class="btn btn-primary">20 مهر 1400</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
                                 x-placement="bottom-end">
                                <a class="dropdown-item" href="#">1397</a>
                                <a class="dropdown-item" href="#">1398</a>
                                <a class="dropdown-item" href="#">1399</a>
                                <a class="dropdown-item" href="#">1400</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb -->
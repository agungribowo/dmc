<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>PT. Metro Bekasi</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=base_url() ?>assets/backend/img/favicon.png">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/backend/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->        
        <link rel="stylesheet" href="<?=base_url() ?>assets/backend/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/backend/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/backend/css/main.css">       
        <link rel="stylesheet" href="<?=base_url() ?>assets/backend/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?=base_url() ?>assets/backend/js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->        
        <div id="page-wrapper">
            <!-- Preloader -->            
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->            
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">      
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="<?=base_url('user/dashboard')?>" class="sidebar-brand">
                                <i class="fa fa-home"></i><span class="sidebar-nav-mini-hide"><strong>PT.Metro</strong> Bekasi</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="<?=base_url()?>user/dashboard">
                                        <img src="<?=base_url() ?>assets/backend/img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"><?=$this->session->userdata('NamaDepan')?></div>                                
                            </div>
                            <!-- END User Info -->                           

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                                      
                                
                                <li class="sidebar-header">                                   
                                    <span class="sidebar-header-title">Menu Pengguna</span>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>user/profil"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Profil</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>produk"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Daftar Produk</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>user/status"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Konfirmasi Pemesanan</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>user/bookingfee "><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Verifikasi Pembayaran</span></a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>keluar"><i class="fa fa-lock sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Keluar</span></a>
                                </li>                                                 
                              
                            </ul>
                            <!-- END Sidebar Navigation -->                           
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->
<!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                   
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->                          
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?=base_url() ?>assets/backend/img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>                                 
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                        <a href="<?php echo base_url(); ?>keluar"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                

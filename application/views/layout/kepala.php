<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>SIP | Perumahan PT.Metro Bekasi</title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=base_url() ?>assets/frontend/img/favicon.png">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="<?=base_url() ?>assets/frontend/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/frontend/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/frontend/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/frontend/css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?=base_url() ?>assets/frontend/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?=base_url() ?>assets/frontend/js/vendor/modernizr.min.js"></script>
    </head>

    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="<?= base_url()?>web" class="site-logo">
                        <i class="fa fa-home"></i> <strong>PT. Metro Bekasi</strong>
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->                            
                            
                            <li <?php if($this->uri->segment(1)=="") { echo 'class="active"'; } ?>>
                                <a href="<?= base_url()?>">Home</a>                                
                            </li>
                            <li <?php if($this->uri->segment(1)=="produk") { echo 'class="active"'; } ?>>
                                <a href="<?= base_url()?>produk">Daftar Produk</a>
                            </li>                                                  
                            <li <?php if($this->uri->segment(1)=="tentang") { echo 'class="active"'; } ?>>
                                <a href="<?= base_url()?>tentang">Tentang</a>
                            </li>
                            <li <?php if($this->uri->segment(1)=="kontak") { echo 'class="active"'; } ?>>
                                <a href="<?= base_url()?>kontak">Kontak</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>masuk" class="btn btn-primary">Masuk</a>
                            </li>                            
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->
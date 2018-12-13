<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Job Portal</title>
        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <!-- icons -->
        <link href="<?= base_url() ?>assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.min.css">
        <!--bootstrap -->
        <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/material/material.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/material_style.css">
        <!-- Theme Styles -->
        <link href="<?= base_url() ?>assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
        <link href="<?= base_url() ?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- data tables -->
        <link href="<?= base_url() ?>assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

        
        <!-- favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" /> 
        <!-- start js include path -->
        
        <script src="<?= base_url() ?>assets/js/jquery.min.js" ></script>
        <script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.0.min.js" ></script>
        <script src="<?= base_url() ?>assets/js/popper/popper.js" ></script>
        <script src="<?= base_url() ?>assets/js/jquery.blockui.min.js" ></script>
        <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
        <!-- bootstrap -->
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js" ></script>
        <script src="<?= base_url() ?>assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
        <div class="page-wrapper">
            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner ">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="<?=base_url()?>">
                            <span class="logo-icon fa fa-briefcase"></span>
                            <span class="logo-default" >Job Portal</span> </a>
                    </div>
                    <!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                    </ul>
                    <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- start mobile menu -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- end mobile menu -->
                    <!-- start header menu -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- start language menu -->
                            <!--                            <li class="dropdown language-switch">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="<?= base_url() ?>assets/img/flags/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="deutsch"><img src="<?= base_url() ?>assets/img/flags/de.png" alt=""> Deutsch</a>
                                                                </li>
                                                                <li>
                                                                    <a class="ukrainian"><img src="<?= base_url() ?>assets/img/flags/ua.png" alt=""> ??????????</a>
                                                                </li>
                                                                <li>
                                                                    <a class="english"><img src="<?= base_url() ?>assets/img/flags/gb.png" alt=""> English</a>
                                                                </li>
                                                                <li>
                                                                    <a class="espana"><img src="<?= base_url() ?>assets/img/flags/es.png" alt=""> Espa�a</a>
                                                                </li>
                                                                <li>
                                                                    <a class="russian"><img src="<?= base_url() ?>assets/img/flags/ru.png" alt=""> ???????</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!-- end language menu -->
                            <!-- start notification dropdown -->

                                </ul>
                            </li>
                            <!-- end notification dropdown -->
                            <!-- start message dropdown -->


                        </ul>
                    </div>
                </div>
            </div>
            <!-- end header -->
            <!-- start page container -->
            <div class="page-container">
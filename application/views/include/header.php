<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kardia Doctors</title>
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
                            <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                            <span class="logo-default" >KARDIA</span> </a>
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
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge headerBadgeColor1"> 6 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">Notifications</span></h3>
                                        <span class="notification-label purple-bgcolor">New 6</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                        <b>John Micle </b>is now following you. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">7 mins</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                        <b>Sneha Jogi </b>sent you a message. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">12 mins</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                        <b>Ravi Patel </b>like your photo. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">15 mins</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 hrs</span>
                                                    <span class="details">
                                                        <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="javascript:void(0)"> All notifications </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- end notification dropdown -->
                            <!-- start message dropdown -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge headerBadgeColor2"> 2 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">Messages</span></h3>
                                        <span class="notification-label cyan-bgcolor">New 2</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="<?= base_url() ?>assets/img/doc/doc2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Sarah Smith </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Jatin I found you on LinkedIn... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="<?= base_url() ?>assets/img/doc/doc3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> John Deo </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="<?= base_url() ?>assets/img/doc/doc1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Rajesh </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> pls take a print of attachments. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="<?= base_url() ?>assets/img/doc/doc8.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lina Smith </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Apply for Ortho Surgeon </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="<?= base_url() ?>assets/img/doc/doc5.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Jacob Ryan </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Request for leave application. </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="#"> All Messages </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- end message dropdown -->
                            <!-- start manage user dropdown -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle " src="<?= base_url() ?>assets/img/dp.jpg" />
                                    <span class="username username-hide-on-mobile"> 
                                        <?php echo   $this->session->userdata('title').'. '.$this->session->userdata('firstname') ?>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?= base_url() ?>user/user-profile">
                                            <i class="icon-user"></i> Profile </a>
                                    </li>
                                    <!--                                    <li>
                                                                            <a href="#">
                                                                                <i class="icon-settings"></i> Settings
                                                                            </a>
                                                                        </li>-->
                                    <li>
                                        <a href="#not_develped_yet">
                                            <i class="icon-directions"></i> Help
                                        </a>
                                    </li>                                    
                                    <!--                                    <li>
                                                                            <a href="lock_screen.html">
                                                                                <i class="icon-lock"></i> Lock
                                                                            </a>
                                                                        </li>-->
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="<?= base_url() . 'logout' ?>">
                                            <i class="icon-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end manage user dropdown -->
                            <!--                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                                                <i class="material-icons">more_vert</i>
                                                            </a>
                                                        </li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end header -->
            <!-- start page container -->
            <div class="page-container">
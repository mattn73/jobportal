<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title><?= $title ?></title>
    <!-- google font -->
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <!-- icons -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/extra_pages.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom-style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico"/>
    <!-- start js include path -->


    <!-- start js include path -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
            integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
            crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>


</head>
<!-- END HEAD -->
<body>
<div class="page-wrapper">
    <!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Job Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Job</a>
            </li>
        </ul>
        <ul id="connection-nav" class="navbar-nav mr-auto mt-2 mt-lg-0">

            <?php if (isset($is_logged_in) && $is_logged_in): ?>

                <li class="notification" ><a  href="/user/application" data-badge="" class="badge1" ><i class="fas fa-bell"></i></a></li>

                <li class="nav-item dropdown account">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $name ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user">Profile</a>
                        <a class="dropdown-item" href="/logout">LogOut</a>

                    </div>
                </li>

            <?php else : ?>


                <li class="nav-item">
                    <a class="nav-link" href="/login/company">Login as Company</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup/user">Register</a>
                </li>

            <?php endif; ?>

        </ul>

    </div>
    </nav>
    <!-- end header -->
    <!-- start page container -->
    <div class="container">



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

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper/popper.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.blockui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap-switch/js/bootstrap-switch.min.js"></script>
</head>
<!-- END HEAD -->
<body>
<div class="page-wrapper">
    <!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- end header -->
    <!-- start page container -->
    <div class="container">

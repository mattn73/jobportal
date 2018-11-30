<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kardia | Login</title>
        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <!-- icons -->
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= base_url() ?>assets/iconic/css/material-design-iconic-font.min.css">
        <!-- bootstrap -->
        <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- style -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/extra_pages.css">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" /> 
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100 page-background">
                <div class="wrap-login100">
                    <?php echo form_open(base_url() . 'login/seeker', 'class="login100-form validate-form" id="login_form"'); ?>
                    <span class="login100-form-logo">
                        <img alt="" src="<?= base_url() ?>assets/img/hospital.png">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-30">
                        <a class="txt1" href="forgot_password.html">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="text-center p-t-30">
                        <!-- Client side validation errors -->
                        <?php echo validation_errors(); ?>
                        <!-- Server side validation errors -->
                        <?php if (isset($error)): ?>
                            <div class="alert <?= $error->class; ?>" role="alert">
                                <?= $error->msg; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <!-- start js include path -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js" ></script>
        <!-- bootstrap -->
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js" ></script>
        <script src="<?= base_url() ?>assets/js/login.js"></script>
        <!-- end js include path -->
    </body>
</html>
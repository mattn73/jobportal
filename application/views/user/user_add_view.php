<link href="<?= base_url() ?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="<?= base_url() ?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
<!-- Date Time item CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/material-datetimepicker/bootstrap-material-datetimepicker.css" />
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Patient</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Patient</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Basic Information</header>
                        <button id = "panel-button" 
                                class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                data-upgraded = ",MaterialButton">
                            <i class = "material-icons">more_vert</i>
                        </button>
                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for = "panel-button">
                            <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                            <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                            <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                        </ul>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <?php echo form_open('user/add', 'class="form-horizontal" id="add_patient_form"'); ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Title
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <?php
                                    $title = array(
                                        'Mr' => 'Mr',
                                        'Mrs' => 'Mrs',
                                        'Miss' => 'Miss',
                                        'Dr' => 'Dr',
                                    );
                                    ?>
                                    <?php echo form_dropdown('title', $title, '', 'class="form-control input-height"'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">First Name
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Last Name
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="lastname" data-required="1" placeholder="enter last name" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Date Of Birth
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input class="form-control input-height" name="birthdate" size="16" placeholder="date of Birth" type="text" value="">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" name="dateofbirth" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Gender
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Phone No.
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input name="phone" type="text" placeholder="phone number" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control input-height" name="email" placeholder="Email Address"> </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Address
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="address" placeholder="address" class="form-control textarea" rows="5" ></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Role
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <?php
                                    $roles = array(
                                        '1' => 'Admin',
                                        '2' => 'Doctor',
                                        '3' => 'Patient',
                                        '4' => 'User',
                                        '5' => 'No role'
                                    );
                                    ?>
                                    <?php echo form_dropdown('role', $roles, '', 'class="form-control input-height"'); ?>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="offset-md-3 col-md-9">
                                        <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                        <input type="reset" class="btn btn-default" value="Reset">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-5 offset-md-3">
                                    <?php if (validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">  <?php echo validation_errors(); ?> </div>
                                    <?php endif; ?>
                                    <?php if ($this->input->get('status')) : ?>
                                        <div class="alert alert-success" role="alert">Account is successfully created</div>
                                    <?php endif; ?>
                                </div>
                            </div>       
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
<script  src="<?= base_url() ?>assets/material-datetimepicker/moment-with-locales.min.js"></script>

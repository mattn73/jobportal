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
                    <div class="page-title">Edit Appointment</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Appointment</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Appointment</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Appointment Details</header>
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
                        <?php echo form_open('appointment/add', 'class="form-horizontal" id="add_appointment_form"'); ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Patient
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input id="patient" type="text" name="patient" data-required="1" placeholder="select patient" class="form-control input-height" /> 
                                    <input id="patient_id" type="hidden" name="patient_id" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Consulting Doctor
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" id="doctor" name="doctor" placeholder="select doctor" class="form-control input-height" />
                                    <input type="hidden" id="doctor_id" name="doctor_id" /> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Date Of Appointment
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input class="form-control input-height" name="date" size="16" placeholder="select date" type="text" value="">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">From</label>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input class="form-control input-height" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                        <label class="control-label small-label col-md-2">To</label>
                                        <div class="col-md-5">
                                            <input class="form-control input-height" type="time" value="13:45:00" id="example-time-input2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Injury/Condition
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input name="condition" type="text" placeholder="Injury/Condition" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Note
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="note" placeholder="address" class="form-control textarea" rows="5" ></textarea>
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
                            <div>
                                <?php echo validation_errors(); ?>
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
<script src="<?= base_url() ?>assets/js/jquery-ui.min.js"  charset="UTF-8"></script>
<script>
    $(function () {
        $("#patient").autocomplete({
            source: 'http://3.0.56.127/site/user/get_patients',
            minLength: 1,
            select: function (event, ui) {
                $('#patient_id').val(ui.item.id);
            }
        });
        $("#doctor").autocomplete({
            source: 'http://3.0.56.127/site/user/get_doctors',
            minLength: 1,
            select: function (event, ui) {
                $('#doctor_id').val(ui.item.id);
            }
        });
    });
</script>

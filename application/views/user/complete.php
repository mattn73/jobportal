<link href="<?= base_url() ?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="<?= base_url() ?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
<!-- Date Time item CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/material-datetimepicker/bootstrap-material-datetimepicker.css" />
<div class="row">
    <div class="col-md-8 register-form  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Complete Profile</h2>
                <?php echo form_open('user/seeker_complete', 'validate-form" id="signup_form"'); ?>
                <table class="table table-user-information ">
                    <tbody>
                        <tr>
                            <td>Contact Number:</td>
                            <td><input type="number" value="" class="form-control"
                                       name="mobile" placeholder="Enter Contact Number" value="<?= set_value('mobile') ?>" ></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control input-height" name="dob" size="16" placeholder="select closing date" type="text" value="<?= set_value('dob') ?>">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input2" value="" /></td>
                        </tr>


                        <tr>
                            <td>Highest Qualification Achieved:</td>
                            <td>
                                <input type="text" value=""
                                       class="form-control" name="hqa"
                                       placeholder="Enter Highest Qualification Achieved" value="<?= set_value('hqa') ?>"  ></td>
                        </tr>
                    </tbody>
                </table>

                <?php echo validation_errors(); ?>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Save</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</div>

<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
<script  src="<?= base_url() ?>assets/material-datetimepicker/moment-with-locales.min.js"></script>
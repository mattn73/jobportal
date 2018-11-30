<link href="<?= base_url() ?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="<?= base_url() ?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
<!-- Date Time item CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/material-datetimepicker/bootstrap-material-datetimepicker.css" />
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Jobs</header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <?php echo form_open('company/edit_job/' . $this->uri->segment(3), 'class="form-horizontal" id="job_form"'); ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Job Title
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="title" value="<?= $job->title ?>"  placeholder="enter job title" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Job Reference
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="reference" value="<?= $job->reference ?>"   placeholder="enter job reference" class="form-control input-height" disabled="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Closing Date
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input class="form-control input-height" name="closing_date_s" size="16" placeholder="select closing date" type="text" value="<?= $job->close_date ?>"  >
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    </div>
                                    <input type="hidden" name="closing_date" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Description
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="description" placeholder="description" class="form-control textarea" >
                                        <?= $job->description ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-3 col-md-9">
                                    <button type="submit" class="btn btn-info m-r-20">Save</button>

                                </div>
                                <div>
                                    <?php echo validation_errors(); ?>
                                </div> 
                                <input type="hidden" name="job_id" value="<?= $job->id ?>" />
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
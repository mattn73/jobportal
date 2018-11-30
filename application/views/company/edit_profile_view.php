<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Company Profile</header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <?php echo form_open('company/edit_profile/', 'class="form-horizontal" id="profile_form"'); ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Name
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="name" value="<?= $profile->name ?>"  placeholder="enter company name" class="form-control input-height" />
                                    <p><?php echo form_error('name', '<div class="alert alert-danger">', '</div>'); ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="email" value="<?= $profile->email ?>"  placeholder="enter company email" class="form-control input-height" />
                                    <p><?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Contact Name
                                    
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="contact_name" value="<?= $profile->contact_name ?>"  placeholder="enter contact name" class="form-control input-height" />
                                    <p><?php echo form_error('contact_name', '<div class="alert alert-danger">', '</div>'); ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Contact Email
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="contact_email" value="<?= $profile->contact_email ?>"  placeholder="enter contact email" class="form-control input-height" disabled="" />
                                    <p><?php echo form_error('contact_email', '<div class="alert alert-danger">', '</div>'); ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Address
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="address" placeholder="address" class="form-control textarea" >
                                        <?= $profile->address ?>
                                    </textarea>
                                    <p><?php echo form_error('address', '<div class="alert alert-danger">', '</div>'); ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-3 col-md-9">
                                    <button type="submit" class="btn btn-info m-r-20">Save</button>
                                   
                                </div>
<!--                                <div>
                                    <?php echo validation_errors(); ?>
                                </div> -->
                            </div>

                          
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
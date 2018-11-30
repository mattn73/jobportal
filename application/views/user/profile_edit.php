<link href="<?= base_url() ?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="<?= base_url() ?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
<!-- Date Time item CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/material-datetimepicker/bootstrap-material-datetimepicker.css" />
<div class="row">
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo ucfirst($seeker->firstname) ?></h2>
                <?php echo form_open('user/edit_save', 'validate-form" id="signup_form"'); ?>
                <table class="table table-user-information ">
                    <tbody>
                        <tr>
                            <td>Title:</td>
                            <td><?php echo ucfirst($seeker->title) ?></td>
                        </tr>
                        <tr>
                            <td>Firstname:</td>
                            <td><input type="text" value="<?= $seeker->firstname ?>" class="form-control"
                                       name="firstname" placeholder="Enter Firstname" ></td>
                        </tr>
                        <tr>
                            <td>Lastname:</td>
                            <td><input type="text" value="<?= $seeker->lastname ?>" class="form-control"
                                       name="lastname" placeholder="Enter Lastname" ></td>
                        </tr>


                        <tr>
                            <td>Postal Address:</td>
                            <td id="profile-address"><input type="text" value="<?= $seeker->postal_address ?>"
                                                            class="form-control" name="postal_address"
                                                            placeholder="Enter Postal Address" ></td>
                        </tr>

                        <tr>
                            <td>Contact Number:</td>
                            <td>

                                <input type="number" value="<?php echo((int) $seeker->mobile); ?>" class="form-control"
                                       name="mobile"
                                       placeholder="Enter Contact Number" >
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>
                                <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control input-height" name="dob" size="16" placeholder="select closing date" type="text" value="<?= $seeker->dob ?>">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input2" value="" />
                            </td>
                        </tr>
                        <tr>

                            <td>Highest Qualification Achieved</td>
                            <td>
                                <input type="text" value="<?= $seeker->hqa ?>" class="form-control" name="hqa"
                                       placeholder="Enter Highest Qualification Achieved" >
                            </td>
                        </tr>

                    </tbody>
                </table>


                <?php echo validation_errors(); ?>
                <button type="submit" class="btn btn-lg btn-primary ml-2">Save</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Skill</h3>
                <table id="profile-skill" class="table table-user-information ">
                    <tbody>

                        <?php foreach ($skills as $skill): ?>
                            <tr>
                                <td><?= $skill->name ?></td>
                                <td><a class="delete-icon" data-custom-value="<?= $skill->id ?>"><i
                                            class="fa fa-times-circle"></i></a></td>

                            </tr>

                        <?php endforeach; ?>

                        <tr>
                            <td>
                                <form id="skill-form" class="skill-form form-inline" style="display: none">
                                    <div class="form-group"><input type="text" name="name" class="form-control add-skill"
                                                                   id="add-skill"></div>
                                    <button type="submit" class="btn btn-primary ml-2">Add</button>
                                </form>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <a href="#" onClick="addSkill()" class="btn btn-primary ml-2">Add Skill</a>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
<script src="<?= base_url() ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
<script  src="<?= base_url() ?>assets/material-datetimepicker/moment-with-locales.min.js"></script>
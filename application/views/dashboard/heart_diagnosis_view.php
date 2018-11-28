<link href="<?= base_url() ?>assets/css/formlayout.css" rel="stylesheet" type="text/css" />
<!-- dropzone -->
<link href="<?= base_url() ?>assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Heart Diagnosis</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url() ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Heart Diagnosis</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Patient Tests</header>
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
                        <?php echo form_open('dashboard/heart_diagnosis', 'class="form-horizontal" id="add_patient_form"'); ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Age
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="age" data-required="1" placeholder="enter Age" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Gender
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="gender">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Chest Pain Type
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="cp">
                                        <option value="1">typical angina</option>
                                        <option value="2">atypical angina</option>
                                        <option value="3">non-anginal pain </option>
                                        <option value="4">asymptomatic </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Resting Blood Pressure
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="trestbps" data-required="1" placeholder="enter value" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Serum Cholestoral in mg/dl 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="chol" data-required="1" placeholder="enter value" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Fasting Blood Sugar
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="fbs">
                                        <option value="1">true</option>
                                        <option value="0">false</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Resting Electrocardiographic Results 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="restecg">
                                        <option value="0">normal </option>
                                        <option value="1">having ST-T wave abnormality (T wave inversions and/or ST elevation or depression of > 0.05 mV) </option>
                                        <option value="2">showing probable or definite left ventricular hypertrophy by Estes' criteria </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Maximum Heart Rate Achieved  
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="thalach" data-required="1" placeholder="enter value" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Exercise Induced Angina
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="exang">
                                        <option value="1">yes</option>
                                        <option value="0">no</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">ST depression induced by exercise relative to rest 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="oldpeak" data-required="1" placeholder="enter value" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Exercise Induced Angina
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="slope">
                                        <option value="1">upsloping</option>
                                        <option value="2">flat</option>
                                        <option value="3">downsloping </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Number of major vessels (0-3) colored by flourosopy  
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="ca" data-required="1" placeholder="enter value" class="form-control input-height" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3"> Thal
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="thal">
                                        <option value="3">normal</option>
                                        <option value="6">Fixed defect</option>
                                        <option value="7">reversable defect</option>
                                    </select>
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
                                        <?php if ($this->input->get('result')) : ?>
                                            <div class="alert alert-danger" role="alert"> The result of the prediction is positive</div>
                                        <?php else: ?>
                                            <div class="alert alert-success" role="alert"> The result of the prediction is negative</div>
                                        <?php endif; ?>
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

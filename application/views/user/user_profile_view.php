<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Patient Profile</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Patients</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Patient Profile</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <!--                    <div class=" cardbox patient-profile">
                                            <img src="img/patient1.jpg" class="img-responsive" alt="">
                                        </div>-->
                    <div class="cardbox">
                        <div class="header">
                            <h4 class="font-bold">ABOUT PATIENT</h4>
                        </div>
                        <div class="body">
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Name</strong>
                                        <p><?php echo $user_personal_info->firstname . ' ' . $user_personal_info->lastname ?></p>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Date of Join</strong>
                                        <p><?php echo $user_personal_info->join_date; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Email</strong>
                                        <p><?php echo $user_personal_info->email; ?></p>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Phone</strong>
                                        <p><?php echo $user_personal_info->phone; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Address</strong>
                                        <p><?php echo $user_personal_info->address; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="cardbox">
                    <div class="body"> 
                        <div class="mypost-list">
                            <div class="post-box">
                                <h4 class="font-bold">General Report</h4>                                        
                                <hr>
                                <h5>Heart Beat <span class="pull-right"><?= $general_reports->pulse ?></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?= @$general_reports->pulse ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= @$general_reports->pulse ?>%"></div>
                                </div>
                                <h5>Blood Pressure<span class="pull-right"><?= $general_reports->blood_pressure ?></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="<?= @$general_reports->blood_pressure ?>" aria-valuemin="0" aria-valuemax="20" style="width:<?= @$general_reports->blood_pressure ?>%;"></div>
                                </div>
                                <h5>Sugar<span class="pull-right"><?= $general_reports->blood_sugar ?></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="<?= @$general_reports->blood_sugar ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= @$general_reports->blood_sugar ?>%;"></div>
                                </div>
                                <h5>Cholesterol<span class="pull-right"><?= $general_reports->cholesterol ?></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?= @$general_reports->cholesterol ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= @$general_reports->cholesterol ?>%;"></div>
                                </div>
                            </div>
                        </div>
                        <hr>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-topline-purple">
                            <div class="card-head">
                                <header>Past Visit History</header>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table table-hover">
                                        <thead>
                                            <tr>                                                                
                                                <th>Doctor</th>
                                                <th>Treatment</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($appointments) : ?>
                                                <?php foreach ($appointments as $appointment) : ?>
                                                    <tr>
                                                        <td><?= $appointment->lastname ?></td>
                                                        <td><?= $appointment->condition ?></td>
                                                        <td><?= $appointment->date ?></td>
                                                        <?php
                                                        $date_from = strtotime($appointment->date . ' ' . $appointment->from);
                                                        $date_to = strtotime($appointment->date . ' ' . $appointment->to);
                                                        ?>
                                                        <td><?= date('H:i', $date_from) . ' - ' . date('H:i', $date_to) ?></td>
                                                        <?php if ($appointment->status) : ?>
                                                            <td>Pending</td>
                                                        <?php else: ?>
                                                            <td>Done</td>
                                                        <?php endif; ?>
                                                    </tr> 
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-topline-purple">
                            <div class="card-head">
                                <header>Recent readings</header>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table table-hover">
                                        <thead>
                                            <tr>                                                                
                                                <th>Blood Sugar</th>
                                                <th>Blood Pressure</th>
                                                <th>Cholesterol</th>
                                                <th>Weight</th>
                                                <th>Pulse</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($user_readings) : ?>
                                                <?php foreach ($user_readings as $user_reading) : ?>
                                                    <tr>
                                                        <td><?= $user_reading->blood_sugar ?></td>
                                                        <td><?= $user_reading->blood_pressure ?></td>
                                                        <td><?= $user_reading->cholesterol ?></td>
                                                        <td><?= $user_reading->weight ?></td>
                                                        <td><?= $user_reading->pulse ?></td>
                                                        <td><?= $user_reading->date ?></td>
                                                    </tr> 
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- morris chart start -->
        <!-- start line chart -->
<!--        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Weight</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">
                            <div id="morris_chart_1" style="width:100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->
    <!-- end chat sidebar -->
</div>
<!-- end page container -->
<!-- morris chart -->
<script src="<?= base_url() ?>assets/morris/morris.min.js" ></script>
<script src="<?= base_url() ?>assets/morris/raphael-min.js" ></script>

<script>
    jQuery(document).ready(function () {
        'use strict';
        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        new Morris.Line({
            element: 'morris_chart_1',
            data: [
                {m: '2018-01', a: 15},
                {m: '2018-02', a: 25},
                {m: '2018-03', a: 30},
                {m: '2018-04', a: 35},
                {m: '2018-05', a: 40},
                {m: '2018-06', a: 45},
                {m: '2018-07', a: 50},
                {m: '2018-08', a: 55},
                {m: '2018-09', a: 60},
                {m: '2018-10', a: 65},
                {m: '2018-11', a: 70},
                {m: '2018-12', a: 100},
            ],
            xkey: 'm',
            ykeys: ['a'],
            labels: ['Series A'],
            xLabelFormat: function (x) {
                var month = months[x.getMonth()];
                return month;
            },
            dateFormat: function (x) {
                var month = months[new Date(x).getMonth()];
                return month;
            }
        });
    });
</script>
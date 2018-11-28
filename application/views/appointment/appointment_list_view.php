<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Appointments List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url() ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Appointments</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Appointments List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <!--                    <ul class="nav customtab nav-tabs" role="tablist">
                                            <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>
                                            <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
                                        </ul>-->
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-topline-red">
                                        <div class="card-head">
                                            <header></header>
                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="btn-group">
                                                        <?php if ($this->session->userdata('role') == 1): ?>
                                                            <a href="<?= base_url() ?>appointment/add" id="addRow" class="btn btn-info">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="btn-group pull-right">
                                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-print"></i> Print </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable">
                                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Id</th>
                                                            <th>Patient Name</th>
                                                            <th>Date of Appointment</th>
                                                            <th>From</th>
                                                            <th>To</th>
                                                            <th>Consulting Doctor</th>
                                                            <th>Injury/Condition</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($appointments) : ?>
                                                            <?php foreach ($appointments as $appointment) : ?>                                                    
                                                                <tr class="odd gradeX">
                                                                    <td class="center">
                                                                        <a href="<?= base_url() ?>user/profile/<?= $appointment->patient_id ?>"><?= $appointment->patient_id ?></a>
                                                                    </td>
                                                                    <td class="center"><?= $appointment->patient_name ?></td>
                                                                    <td class="center"><?= $appointment->date ?></td>
                                                                    <td class="center"><?= $appointment->from ?></td>
                                                                    <td class="center"><?= $appointment->to ?></td>
                                                                    <td class="center"><?= $appointment->doctor_name ?></td>
                                                                    <td class="center"><?= $appointment->condition ?></td>
                                                                    <td>
        <!--                                                                        <a href="<?= base_url() ?>appointment/edit/<?= $appointment->id ?>" class="btn btn-primary btn-xs btn-add">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>-->
                                                                        <?php if ($this->session->userdata('role') == 1): ?>
                                                                            <a href="<?= base_url() ?>appointment/delete/<?= $appointment->appointment_id ?>" class="btn btn-danger btn-xs btn-delete">
                                                                                <i class="fa fa-trash-o "></i>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                        <a href="<?= base_url() ?>appointment/deactivate/<?= $appointment->appointment_id ?>" class="btn btn-success btn-xs btn-delete">
                                                                            <i class="fa  fa-check "></i>
                                                                        </a>
                                                                    </td>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<script>
    $('.btn-delete').click(function (e) {

        if (confirm('Are you sure you want to perform this action?')) {
            window.location = $(this).attr('href');
        } else {
            console.log('Operation canceled');
            e.preventDefault();
        }
    });
</script>
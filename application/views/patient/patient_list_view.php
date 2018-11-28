<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Patients List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url() ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Patients</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Patient List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
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
                                                            <th> Name </th>
                                                            <th> Gender </th>
                                                            <th> Address </th>
                                                            <th> Mobile </th>
                                                            <th> Birth Date </th>
                                                            <th>Age</th>
<!--                                                            <th> Action </th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($patients) : ?>
                                                            <?php foreach ($patients as $patient) : ?>                                                    
                                                                <tr class="odd gradeX">
                                                                    <td class="center">
                                                                        <a href="<?= base_url() ?>user/profile/<?= $patient->id ?>"><?= $patient->id ?></a>
                                                                    </td>
                                                                    <td><?= $patient->firstname . ' ' . $patient->lastname ?></td>
                                                                    <td class="center"><?= $patient->gender ?></td>
                                                                    <td class="center"><?= $patient->address ?></td>
                                                                    <td>
                                                                        <a href="tel:<?= $patient->phone ?>"><?= $patient->phone ?></a>
                                                                    </td>
                                                                    <td class="center"><?= $patient->birthdate ?></td>
                                                                    <td class="center"><?= date_diff(date_create($patient->birthdate), date_create('now'))->y; ?></td>

<!--                                                                    <td>
                                                                        <a href="<?= base_url() ?>patient/edit/<?= $patient->id ?>" class="btn btn-primary btn-xs btn-add">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                        <a href="<?= base_url() ?>patient/delete/<?= $patient->id ?>" class="btn btn-danger btn-xs btn-delete">
                                                                            <i class="fa fa-trash-o "></i>
                                                                        </a>
                                                                    </td>-->
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
                        <div class="tab-pane" id="tab2">
                            <div class="row">
                                <?php if ($patients) : ?>
                                    <?php foreach ($patients as $patient) : ?>
                                        <div class="col-md-4">
                                            <div class="card card-topline-aqua">
                                                <div class="card-body no-padding ">
                                                    <div class="doctor-profile">

                                                        <img src="<?= base_url() ?>assets/img/user/user1.jpg" class="doctor-pic" alt=""> 
                                                        <div class="profile-usertitle">
                                                            <div class="doctor-name"><?= $patient->firstname . ' ' . $patient->lastname ?></div>
                                                        </div>
                                                        <p><?= $patient->address ?></p> 
                                                        <div><p><i class="fa fa-phone"></i><a href="tel:<?= $patient->phone ?>">  <?= $patient->phone ?></a></p> </div>
                                                        <div class="profile-userbuttons">
                                                            <a href="<?= base_url() ?>patient/profile" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

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
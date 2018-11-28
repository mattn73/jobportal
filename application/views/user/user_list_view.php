<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Users List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url() ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Users</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">User List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">

                        <div class="col-md-12"> 
                            Filters
                        </div>

                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url() ?>user/view">
                            <div class="row">
                                <div class="col-lg-3"> 
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <div>
                                            <select class="form-control input-height" name="role">
                                                <option value="0">Select...</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Doctor</option>
                                                <option value="3">Patient</option>
                                                <option value="4">User</option>
                                                <option value="5">No role</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3"> 
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div>
                                            <select class="form-control input-height" name="status">
                                                <option value="-1">Select...</option>
                                                <option value="0">Blocked</option>
                                                <option value="1">Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3"> 
                                    <input type="submit" value="Filter" class="btn btn-info m-r-20">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
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
                                                        <a href="<?= base_url() ?>user/add" id="addRow" class="btn btn-info">
                                                            Add New <i class="fa fa-plus"></i>
                                                        </a>
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
                                                            <th>UserId</th>
                                                            <th>Role</th>
                                                            <th> Name </th>
                                                            <th> Gender </th>
<!--                                                            <th> Address </th>-->
                                                            <th> Mobile </th>
                                                            <th> Birth Date </th>
                                                            <th>Age</th>
                                                            <?php if ($this->session->userdata('role') == 1) : ?>
                                                                <th> Action </th>
                                                            <?php endif; ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($users) : ?>
                                                            <?php foreach ($users as $user) : ?>                                                    
                                                                <tr class="odd gradeX">
                                                                    <td class="center">
                                                                        <?php if ($user->role == 3 || $user->role == 4): ?>
                                                                            <a href="<?= base_url() ?>user/profile/<?= $user->id ?>"><?= $user->id ?></a>
                                                                        <?php else : ?>
                                                                            <a href="#"><?= $user->id ?></a>
                                                                        <?php endif; ?>

                                                                    </td>
                                                                    <td><?= $user->type ?></td>
                                                                    <td><?= $user->firstname . ' ' . $user->lastname ?></td>
                                                                    <td class="center"><?= $user->gender ?></td>
<!--                                                                    <td class="center"><?= $user->address ?></td>-->
                                                                    <td>
                                                                        <a href="tel:<?= $user->phone ?>"><?= $user->phone ?></a>
                                                                    </td>
                                                                    <td class="center"><?= $user->birthdate ?></td>
                                                                    <td class="center"><?= date_diff(date_create($user->birthdate), date_create('now'))->y; ?></td>
                                                                    <?php if ($this->session->userdata('role') == 1) : ?>
                                                                        <td>
                                                                            <a href="<?= base_url() ?>user/edit/<?= $user->id ?>" class="btn btn-primary btn-xs btn-add">
                                                                                <i class="fa fa-pencil"></i>
                                                                            </a>
                                                                            <a href="<?= base_url() ?>user/delete/<?= $user->id ?>" class="btn btn-danger btn-xs btn-delete">
                                                                                <i class="fa fa-trash-o "></i>
                                                                            </a>
                                                                            <?php if ($user->status): ?>
                                                                                <a href="<?= base_url() ?>user/block/<?= $user->id ?>" class="btn btn-secondary btn-xs btn-delete">
                                                                                    <i class="fa fa-unlock "></i>
                                                                                </a>
                                                                            <?php else: ?>
                                                                                <a href="<?= base_url() ?>user/unblock/<?= $user->id ?>" class="btn btn-secondary btn-xs btn-delete">
                                                                                    <i class="fa fa-lock "></i>
                                                                                </a>
                                                                            <?php endif; ?>
                                                                        </td>
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
                        <!--                        <div class="tab-pane" id="tab2">
                                                    <div class="row">
                        <?php if ($users) : ?>
                            <?php foreach ($users as $user) : ?>
                                                                                                                                                                                                        <div class="col-md-4">
                                                                                                                                                                                                            <div class="card card-topline-aqua">
                                                                                                                                                                                                                <div class="card-body no-padding ">
                                                                                                                                                                                                                    <div class="doctor-profile">
                                                                                                                                                                
                                                                                                                                                                                                                        <img src="<?= base_url() ?>assets/img/user/user1.jpg" class="doctor-pic" alt=""> 
                                                                                                                                                                                                                        <div class="profile-usertitle">
                                                                                                                                                                                                                            <div class="doctor-name"><?= $user->firstname . ' ' . $user->lastname ?></div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <p><?= $user->address ?></p> 
                                                                                                                                                                                                                        <div><p><i class="fa fa-phone"></i><a href="tel:<?= $user->phone ?>">  <?= $user->phone ?></a></p> </div>
                                                                                                                                                                                                                        <div class="profile-userbuttons">
                                                                                                                                                                                                                            <a href="<?= base_url() ?>user/profile" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                
                                                                                                                                                                
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                                                    </div>
                                                </div>-->
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
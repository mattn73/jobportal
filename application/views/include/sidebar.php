<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= base_url() ?>assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> <?= $this->session->userdata('name') ?></p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item start active open">
                    <a href="<?php echo base_url() ?>company/profile" class="nav-link nav-toggle">
                        <i class="material-icons">business</i>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="<?php echo base_url() ?>company/jobs" class="nav-link nav-toggle">
                        <i class="material-icons">work_outline</i>
                        <span class="title">Jobs</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="<?php echo base_url() ?>company/applications" class="nav-link nav-toggle">
                        <i class="material-icons">file_copy</i>
                        <span class="title">Applications</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="<?php echo base_url() ?>company/candidates" class="nav-link nav-toggle">
                        <i class="material-icons">group</i>
                        <span class="title">Candidates</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu --> 
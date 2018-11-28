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
                            <p> <?php echo $this->session->userdata('title') . '. ' . $this->session->userdata('firstname') ?></p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item start active open">
                    <a href="<?php echo base_url() ?>" class="nav-link nav-toggle">
                        <i class="material-icons">home</i>
                        <span class="title">Home</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 2) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">dashboard</i>
                            <span class="title">Tools</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item active open  ">
                                <a href="<?= base_url() ?>dashboard/heart-diagnosis" class="nav-link ">
                                    <span class="title">Heart Diagnosis</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <!--                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle">
                                        <i class="material-icons">email</i>
                                        <span class="title">Email</span>
                                        <span class="arrow"></span>
                                        <span class="label label-rouded label-menu deepPink-bgcolor">3</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="<?= base_url() ?>email/inbox" class="nav-link ">
                                                <span class="title">Inbox</span>
                                            </a>
                                        </li>
                                                                <li class="nav-item  ">
                                                                    <a href="<?= base_url() ?>email/view" class="nav-link ">
                                                                        <span class="title">View Mail</span>
                                                                    </a>
                                                                </li>
                                        <li class="nav-item  ">
                                            <a href="<?= base_url() ?>email/compose" class="nav-link ">
                                                <span class="title">Compose Mail</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
                <li class="nav-item  ">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
                        <span class="title">Appointments</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?= base_url() ?>appointment/schedule" class="nav-link "> <span class="title">Doctor Schedule</span>
                            </a>
                        </li>

                        <!--                        <li class="nav-item  ">
                                                    <a href="book_appointment_material.html" class="nav-link "> <span class="title">Book Appointment Material</span>
                                                    </a>
                                                </li>-->
                        <!--                        <li class="nav-item  ">
                                                    <a href="edit_appointment.html" class="nav-link "> <span class="title">Edit Appointment</span>
                                                    </a>
                                                </li>-->
                        <li class="nav-item  ">
                            <a href="<?= base_url() ?>appointment/view" class="nav-link "> <span class="title">View All Appointment</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') == 1) : ?>
                        <li class="nav-item  ">
                            <a href="<?= base_url() ?>appointment/risk_assessment" class="nav-link "> <span class="title">Risk assessment</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </li>
                <!--                <li class="nav-item  ">
                                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">healing</i>
                                        <span class="title">Doctors</span> <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="<?= base_url() ?>doctor/all" class="nav-link "> <span class="title">All Doctor</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="<?= base_url() ?>doctor/add" class="nav-link "> <span class="title">Add Doctor</span>
                                            </a>
                                        </li>
                                                                <li class="nav-item  ">
                                                                    <a href="add_doctor_material.html" class="nav-link "> <span class="title">Add Doctor Material</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item  ">
                                                                    <a href="<?= base_url() ?>doctor/edit" class="nav-link "> <span class="title">Edit Doctor</span>
                                                                    </a>
                                                                </li>
                                        <li class="nav-item  ">
                                            <a href="<?= base_url() ?>doctor/profile" class="nav-link "> <span class="title">About Doctor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
                <?php if ($this->session->userdata('role') != 1) : ?>
                    <li class="nav-item  ">
                        <a href="<?= base_url() ?>patient/view" class="nav-link nav-toggle"> <i class="material-icons">accessible</i>
                            <span class="title">Patients</span> <span class="arrow"></span>
                        </a>

                    </li>
                <?php else: ?>
                    <li class="nav-item  ">
                        <a href="<?= base_url() ?>user/view" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                            <span class="title">Users</span> <span class="arrow"></span>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu --> 
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <!--                    <div class=" cardbox patient-profile">
                                            <img src="img/patient1.jpg" class="img-responsive" alt="">
                                        </div>-->
                    <div class="cardbox">
                        <div class="header">
                            <h4 class="font-bold d-inline">ABOUT COMPANY</h4>
                            <a class="btn deepPink-bgcolor d-inline pull-right" href="<?=base_url()?>company/edit_profile">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Name</strong>
                                        <p><?= $profile->name ?></p>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Email</strong>
                                        <p><?= $profile->email ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Contact Name</strong>
                                        <p><?= $profile->contact_name ?></p>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><strong>Contact Email</strong>
                                        <p><?= $profile->contact_email ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Address</strong>
                                        <p><?= $profile->address ?></p>
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
                                <p>It is also used to identify any abnormal tissue in the uterine cavity, such as uterine fibroids, endometrial polyps, scar tissue, or retained pregnancy tissue, the presence of which may be suggested by history or previous tests such as a hysterosalpingogram (x-ray of the uterus and tubes). This procedure is done in the office here at IVF New England, and is done by one of the physicians.  </p>
                                <p>Approximately an hour before the exam we suggest that you take Ibuprofen 600 mg (Motrin/Advil) or a similar medication to minimize some mild to moderate cramping that you may experience during the procedure. </p>
                            </div>
                            <hr>
                            <div class="post-box">
                                <h4 class="font-bold">General Report</h4>                                        
                                <hr>
                                <h5>Heart Beat <span class="pull-right">85</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                                <h5>Blood Pressure<span class="pull-right">93</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5>Sugar<span class="pull-right">55</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5>Haemoglobin<span class="pull-right">78%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
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
                                                <header>Past Visit History</header>
                                            </div>
                                            <div class="card-body ">
                                                <div class="table-responsive">
                                                    <table class="table table-striped custom-table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Doctor</th>
                                                                <th>Treatment</th>
                                                                <th>Chart</th>
                                                                <th>Charges($)</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>11/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>Check up</td>
                                                                <td><div id="sparkline"></div></td>
                                                                <td>14$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>X-Ray</td>
                                                                <td><div id="sparkline3"></div></td>
                                                                <td>16$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>Blood Test</td>
                                                                <td><div id="sparkline1"></div></td>
                                                                <td>24$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>14/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>Admit</td>
                                                                <td><div id="sparkline2"></div></td>
                                                                <td>14$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>15/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>Operation</td>
                                                                <td><div id="sparkline4"></div></td>
                                                                <td>14$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>18/05/2017</td>
                                                                <td>Dr.Rajesh</td>
                                                                <td>Discharge</td>
                                                                <td><div id="sparkline5"></div></td>
                                                                <td>14$</td>
                                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit">
                                                                        <i class="fa fa-check"></i></a> 
                                                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                                                        <i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
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
                        <h4 class="font-bold">ECG Report</h4>
                        <div class="demo-container">
                            <div id="placeholder" class="demo-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Start Doctor Chat --> 
                <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="img/doc/doc3.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="img/doc/doc1.jpg" width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="img/doc/doc5.jpg" width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="img/doc/doc4.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="img/doc/doc2.jpg" width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="img/doc/doc7.jpg" width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="img/doc/doc6.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Nurse</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="img/doc/doc8.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="img/doc/doc9.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Compounder</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="img/doc/doc10.jpg" width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-sidebar-item">
                        <div class="chat-sidebar-chat-user">
                            <div class="page-quick-sidemenu">
                                <a href="javascript:;" class="chat-sidebar-back-to-list">
                                    <i class="fa fa-angle-double-left"></i>Back
                                </a>
                            </div>
                            <div class="chat-sidebar-chat-user-messages">
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                        <span class="body-out"> could you send me menu icons ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                        <span class="body"> please give me 10 minutes. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                        <span class="body-out"> ok fine :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                        <span class="body">Sorry for
                                            the delay. i sent mail to you. let me know if it is ok or not.</span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                        <span class="body-out"> it is perfect! :) </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="img/dp.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                        <span class="body-out"> Great! Thanks. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                        <span class="body"> it is my pleasure :) </span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-sidebar-chat-user-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn deepPink-bgcolor">
                                            <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat --> 
                <!-- Start Setting Panel --> 
                <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Menu </div>
                                    <div class="setting-set">
                                        <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                            <option value="accordion" selected="selected">Accordion</option>
                                            <option value="hover">Hover</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-1">
                                                <input type = "checkbox" id = "switch-1" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-7">
                                                <input type = "checkbox" id = "switch-7" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-2">
                                                <input type = "checkbox" id = "switch-2" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-3">
                                                <input type = "checkbox" id = "switch-3" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-4">
                                                <input type = "checkbox" id = "switch-4" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-5">
                                                <input type = "checkbox" id = "switch-5" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                   for = "switch-6">
                                                <input type = "checkbox" id = "switch-6" 
                                                       class = "mdl-switch__input" checked>
                                            </label>
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
    <!-- end chat sidebar -->
</div>
<!-- end page container -->
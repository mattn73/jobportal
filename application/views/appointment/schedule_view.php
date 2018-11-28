
<!-- full calendar -->
<link href="<?= base_url() ?>assets/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Doctor Schedule</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Appointment</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Doctor Schedule</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="panel">
                            <header class="panel-heading panel-heading-blue">
                                Calendar</header>
                            <div class="panel-body">
                                <div id="calendar" class="has-toolbar"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="panel">
                            <header class="panel-heading panel-heading-blue">
                                Draggable Events </header>
                            <div class="panel-body">
                                <div id="external-events">
                                    <form class="inline-form">
                                        <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title" />
                                        <br/>
                                        <a href="javascript:;" id="event_add" class="btn btn-success"> Add Schedule </a>
                                    </form>
                                    <hr/>
                                    <div id="event_box" class="mg-bottom-10"></div>
                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline" for="drop-remove"> remove after drop
                                        <input type="checkbox" class="group-checkable" id="drop-remove" />
                                        <span></span>
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
<!-- end page content -->

<!-- calendar -->
<script src="<?= base_url() ?>assets/js/moment.min.js" ></script>
<script src="<?= base_url() ?>assets/fullcalendar/fullcalendar.min.js" ></script>
<script src="<?= base_url() ?>assets/js/calendar.min.js" ></script>
<script>
    $('#calendar').fullCalendar({

        events: {
            url: '/site/appointment/get_schedule',
            type: 'POST',
            data: {
                custom_param1: 'something',
                custom_param2: 'somethingelse'
            },
            error: function () {
                alert('there was an error while fetching events!');
            },
            color: 'blue', // a non-ajax option
            textColor: 'black' // a non-ajax option
        }

    });
   



</script>
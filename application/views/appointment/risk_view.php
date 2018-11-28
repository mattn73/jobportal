<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Risk Assessment List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= base_url() ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">ssessment</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Assessment List</li>
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
                                            
                                            <div class="table-scrollable">
                                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Id</th>
                                                            <th>Patient Name</th>
                                                            <th>Date of assessment</th>                           
                                                            <th>Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($risks) : ?>
                                                            <?php foreach ($risks as $risk) : ?>                                                    
                                                                <tr class="odd gradeX">
                                                                    <td class="center">
                                                                        <a href="<?= base_url() ?>user/profile/<?= $risk->id ?>"><?= $risk->id ?></a>
                                                                    </td>
                                                                    <td class="center"><?= $risk->firstname . ' ' . $risk->lastname ?></td>
                                                                    <td class="center"><?= $risk->assessment_date ?></td>
                                                                    <td class="center"><?= $risk->result ?></td>
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
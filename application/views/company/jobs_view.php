<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
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
                                    <a href="<?= base_url() ?>company/add_job" id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table class="table table-hover table-checkable order-column full-width" id="example4">
                                <thead>
                                    <tr>
                                        <th> Job Title </th>
                                        <th> Job Reference </th>
                                        <th> Closing Date </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($jobs) : ?>
                                        <?php foreach ($jobs as $job) : ?>
                                            <tr class="odd gradeX">
                                                <td><?= $job->title ?></td>
                                                <td><?= $$job->reference ?></td>
                                                <td><?= $$job->close_date ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>company/edit_job/<?= $job->id ?>" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="<?= base_url() ?>company/delete_job/<?= $job->id ?>" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o "></i>
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
<!-- end page content -->
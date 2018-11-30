<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Job applications</header>

                    </div>
                    <div class="card-body ">

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
                                    <?php if ($applications) : ?>
                                        <?php foreach ($applications as $application) : ?>
                                            <tr class="odd gradeX">
                                                <td><?= $application->title ?></td>
                                                <td><?= $application->reference ?></td>
                                                <td><?= $application->close_date ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>company/open_application/<?= $application->id ?>" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="<?= base_url() ?>company/convert_application/<?= $application->id ?>" class="btn btn-danger btn-xs">
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
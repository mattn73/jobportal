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
                                        <th> Application date </th>
                                        <th> Candidate Name </th>
                                        <th> Candidate Email </th>
                                        <th> Candidate CV </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($applications) : ?>
                                        <?php foreach ($applications as $application) : ?>
                                            <tr class="odd gradeX">
                                                <td><?= $application->date ?></td>
                                                <td><?= $application->firstname . ' ' . $application->lastname ?></td>
                                                <td><?= $application->email ?></td>
                                                <td>
                                                    <?php if ($application->cv) : ?>
                                                        <a id="view_cv" href="<?= base_url() . $application->cv_path ?>">view</a>
                                                    <?php else : ?>
                                                        --
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?= $application->status ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url() ?>company/application_status/Accepted" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="<?= base_url() ?>company/application_status/Rejected" class="btn btn-danger btn-xs">
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
<script>
    $('#view_cv').click(function () {
        $.get("<?= base_url()?>company/application_status", function (data, status) {
            console.log('Status Changed!');
        });
    });
</script>
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Candidates finder</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <form class="form-inline" action="<?= base_url() ?>company/candidates" method="post">
                                    <div class="form-group mb-2">
                                        <label for="staticEmail2" class="sr-only">Skill</label>
                                        <input type="text" class="form-control" id="staticEmail2" name="skill" value="<?= set_value('skill'); ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <div>
                                        <?php echo validation_errors(); ?>
                                    </div> 
                                </form>

                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table class="table table-hover table-checkable order-column full-width" id="example4">
                                <thead>
                                    <tr>
                                        <th> Candidate Email </th>
                                        <th> Candidate Name </th>
                                        <th> Candidate Contact </th>
                                        <th> CV </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($candidates)) : ?>
                                        <?php foreach ($candidates as $candidate) : ?>
                                            <tr class="odd gradeX">
                                                <td><?= $candidate->email ?></td>
                                                <td><?= $candidate->firstname . ' ' . $candidate->lastname ?></td>
                                                <td><?= $candidate->mobile ?></td>
                                                <td>
                                                    <?php if (1) : ?>
                                                        <a href="<?= base_url() . $candidate->cv_path ?>">view</a>
                                                    <?php else : ?>
                                                        --
                                                    <?php endif; ?>
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
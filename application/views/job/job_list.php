   <h2>JOBS</h2>
    <?php $date = new DateTime(); ?>
    <div class="row">

        <?php foreach ($jobs as $job): ?>

            <?php if (($date) <= (new DateTime($job->close_date))): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box">

                    <div class="box-part text-center">

                        <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>

                        <div class="title">
                            <h4><?= $job->title ?></h4>
                        </div>

                        <div class="title">
                            <h6><?= $job->name ?></h6>
                        </div>

                        <div class="text">
                            <span><?= $job->description ?></span>
                        </div>

                        <a href="/job/view/<?= $job->id ?>">Learn More</a>

                    </div>
                </div>
            <?php endif ?>

        <?php endforeach; ?>
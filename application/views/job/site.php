<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="font-weight-normal">Welcome to the Job Portal</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
            this example based on Apple's marketing pages.</p>

    </div>
</div>
<div>

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

                        <div class="text">
                            <span><?= $job->description ?></span>
                        </div>

                        <a href="/site/job/<?= $job->id ?>">Learn More</a>

                    </div>
                </div>
            <?php endif ?>

        <?php endforeach; ?>


    </div>

</div>

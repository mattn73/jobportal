<h2 class="title-apply">JOBS APPLY</h2>


<?php foreach ($jobs as $job): ?>
    <div class="row row-status">
        <div class="card" style="width: 51rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $job->title ?></h5>
                <?php if ($job->status == 'New' || $job->status == 'Viewed'): ?>

                <?php if ($job->client_status == 'New'): ?> <span class="news-bagde">New</span> <?php endif; ?> <i class='icon-status fas fa-exclamation-circle' style='color: #eaba02cf'></i>
                <?php elseif ($job->status == 'Accepted'): ?>

                    <i class='icon-status far fa-check-circle' style='color: #008000;'></i>

                <?php else: ?>


                    <i class='icon-status far fa-times-circle' style='color: #c5151b;'></i>

                <?php endif; ?>
                <h6 class="card-subtitle mb-2 text-muted"><?= $job->name ?></h6>
                <p class="card-text"><?php echo trim($job->description); ?></p>

                <a href="/job/check_appllcation/<?= $job->id ?>" class="card-link"><button type="button" class="btn btn-lg  btn-primary custom-btn">View</button></a>

            </div>
        </div>
    </div>
    <hr>
<?php endforeach; ?>


if (appointement[0].status == 2) {

appointBody = appointBody + "<i class='far fa-check-circle' style='color: #008000;'></i>";
} else if (appointement[0].status == 1) {

appointBody = appointBody + "<i class='fas fa-exclamation-circle' style='color: #eaba02cf'></i>";
} else {

appointBody = appointBody + "<i class='far fa-times-circle' style='color: #008000;'></i>";
}